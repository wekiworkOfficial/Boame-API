<?php
namespace Boame\Models;

use Closure;
use Boame\Security\Salts;
use Lightroom\Packager\Moorexa\{
    MVC\Model, Interfaces\ModelInterface
};
use Boame\Messaging\Emails;
use Lightroom\Database\LightQuery as Query;
use function Lightroom\Database\Functions\{db, map, rows};
use function Lightroom\Security\Functions\{hash_password, verify_password};
/**
 * Auth model class auto generated.
 *
 *@package Auth Helper Model
 *@author Amadi Ifeanyi <amadiify.com>
 **/

class Auth extends Model
{
    use Query, Traits\RegistrationProcessor;

    /**
     * @method ModelInterface onModelInit
     * @param ModelInterface $model
     * @param Closure $next
     * @return void
     */
    public function onModelInit(ModelInterface $model, Closure $next) : void 
    {
        // call closure
        $next();
    }

    /**
     * @method Auth postRegister
     * @param string $accountType
     */
    public function postRegister($accountType)
    {
        // filter param
        $data = app('filter')->safeParam(['string' => $accountType]);

        // is param safe??
        if ($data->isOk()) :

            // check if account exists
            $account = map(db('account_types')->get('account_type = ?', $accountType));

            // hmmm, not really
            if ($account->rows == 0) return app('response')->error('Invalid account type');

            // check the required fields
            $data = filter('POST', app('filter')->get($accountType . 'Register'));

            // can we continue
            if ($data->isOk()) :

                // load registration processor
                $processor = $accountType . 'Processor';

                // does processor exists
                if (method_exists($this, $processor)) :
                    
                    // are we good ?
                    if ($this->{$processor}($data, $account->accounttypeid)) app('response')->success('Your registration was successful');

                    // failed
                    app('response')->error('Your registration was not successful');

                endif;

                // no processor found
                app('response')->error('We are currently not processing registration for a ' . $accountType);

            endif;
        
        endif;

        // manage filter errors
        app('filter')->errors($data);
    }

    /**
     * @method Auth postResetPassword
     * @return mixed
     */
    public function postResetPassword()
    {
        // filter post
        $data = filter('POST', app('filter')->get('passwordReset'));

        // are we good ?
        if ($data->isOk()) :

            // verify password
            if ($data->password != $data->password_again) return app('response')->error('Password provided does not match');

            // check if username exists
            $account = map(db('accounts')->get('telephone = ? or email = ?', $data->username));

            // are we good 
            if ($account->rows == 0) return app('response')->error('Account does not exists.');

            // generate password reset code
            $resetCode = mt_rand(1000, 9999);

            // generate password salt
            $salt = Salts::generate();

            // hash password with salt
            $password = hash_password($data->password, $salt);

            // check if we have something
            $vault = map(db('password_reset_vault')->get('accountid = ?', $account->accountid));

            // can we insert
            if ($vault->rows == 0) :

                // push new record
                $reset = map(db('password_reset_vault')->insert([
                    'accountid'     => $account->accountid,
                    'password'      => $password,
                    'password_salt' => $salt,
                    'reset_code'    => $resetCode,
                    'date_created'  => time(),
                    'expire_date'   => strtotime('+30 minutes')
                ]));

            else:

                // reset done
                $reset = (object) ['id' => $vault->password_reset_vaultid];
                $resetCode = $vault->reset_code;

                // update expire date and password
                $vault->update([
                    'expire_date'   => strtotime('+30 minutes'),
                    'password'      => $password,
                    'password_salt' => $salt
                ]);

            endif;

            // add to password_valt
            if ($reset) :

                // send mail
                Emails::sendResetMail($account, $resetCode);

                // all good 
                app('response')->success([
                    'message' => 'Your password reset code has been sent to ['.$account->email.']', 
                    'vaultId' => $reset->id
                ]);
            
            endif;

            // failed
            app('response')->error('Your password reset was not successful. Please try again!');

        endif;

        // handle error
        app('filter')->errors($data);
    }

    /**
     * @method Auth getResetPassword
     * @param int $vaultId
     * @return mixed
     */
    public function getResetPassword($vaultId)
    {
        // filter parameter
        $data = app('filter')->safeParam(['number' => $vaultId]);

        // are we good ?
        if ($data->isOk()) :

            // check if vault exists
            $vault = map(db('password_reset_vault')->get('password_reset_vaultid = ?', $vaultId));

            // not created
            if ($vault->rows == 0) return app('response')->error('Invalid VaultID. Could not replay transaction');

            // created
            // get account info
            $account = map(db('accounts')->get('accountid = ?', $vault->accountid));

            // send mail
            Emails::sendResetMail($account, $vault->reset_code);

            // all good 
            app('response')->success([
                'message' => 'Your password reset code has been resent to ['.$account->email.']', 
                'vaultId' => $vault->password_reset_vaultid
            ]);

        endif;

        // failed. Handle error
        app('filter')->errors($data);
    }

    /**
     * @method Auth postCompleteResetPassword
     * @return mixed
     */
    public function postCompleteResetPassword()
    {
        // verify post
        $data = filter('POST', app('filter')->get('completePasswordReset'));

        // are we good ?
        if ($data->isOk()) :

            // check if account exists
            $account = map(db('accounts')->get('email = ? or telephone = ?', $data->username));

            // are we not good?
            if ($account->rows == 0) return app('response')->error('Account does not exists.');

            // verify code
            $vault = map(db('password_reset_vault')->get('accountid = ? and reset_code = ?', $account->accountid, $data->reset_code));

            // all not good ?
            if ($vault->rows == 0) return app('response')->error('Incorrect Authentication code. Password reset failed.');

            // check if code has expired
            if (intval($vault->expire_date) < time()) :

                // delete record
                $vault->pop();

                // expired
                return app('response')->error('Your password reset code has expired. Please start all over again.');

            endif;

            // all good
            // get the authentication id
            $auth = map(db('authentication')->get('accountid = ?', $account->accountid));

            // update password hash and salt
            $change = db('password_hash')->update(['passwordhash' => $vault->password, 'password_salt' => $vault->password_salt])
            ->where('authenticationid = ?', $auth->authenticationid)->go();

            // all good 
            if ($change == true) :

                // remove vault
                $vault->pop();

                // all good
                app('response')->success('Password updated successfully');

            endif;

            // failed
            app('response')->error('Password reset failed. Please try one more time');

        endif;

        // failed
        app('filter')->errors($data);
    }

    /**
     * @method Auth postLogin
     * @return mixed
     */
    public function postLogin()
    {
        // validate post
        $data = filter('POST', app('filter')->get('login'));

        // are we good
        if ($data->isOk()) :

            // check the platform 
            $platform = map(db('platforms')->get('platformid = ?', $data->platformid));

            // we good ?
            if ($platform->rows == 0) return app('response')->error('Invalid PlatformID');

            // check if username exists
            $account = map(db('accounts')->get('email = ? or telephone = ?', $data->username));

            // we good ?
            if ($account->rows == 0) return app('response')->error('Unknown ' . (preg_match('/[0-9]+/', $data->username) ? 'telephone number' : 'email address') . ' for account login.');

            // get auth table
            $authentication = $account->from('authentication', 'accountid')->get();

            // get hash table
            $hash = $authentication->from('password_hash', 'authenticationid')->get();

            // verify password
            if (!verify_password($data->password, $hash->passwordhash, $hash->password_salt)) return app('response')->error('You have provided an incorrect password');

            // check if this user has areas to navigate to
            $navigation = map(db('navigation')->get('platformid = ? and accounttypeid = ?', $platform->platformid, $account->accounttypeid));

            // we good ?
            if ($navigation->rows == 0) return app('response')->error('You don\'t have enough access to use the ' . $platform->platform_name . ' platform');

            // ok looks good already
            // ... 

            // generate a new salt
            $salt = Salts::generate();

            // hash password again
            db('password_hash')->update([
                'passwordhash'  => hash_password($data->password, $salt),
                'password_salt' => $salt
            ])->where('authenticationid = ?', $authentication->authenticationid)->go();

            // generate token
            $token = sha1(str_shuffle($salt) . $hash->password_salt);

            // update authentication table
            db('authentication')->update([
                'token'     => $token,
                'last_seen' => time(),
                'isonline'  => 0,
            ])->where('accountid = ?', $account->accountid)->go();

            // get all nav
            $navs = [];

            // run loop
            $navigation->obj(function($row) use (&$navs){

                // load actions
                $actions = explode(',', $row->permissionid);

                $navs[] = [
                    'nav_name' => $row->nav_name,
                    'nav_tag' => $row->nav_tag,
                    'actions' => array_map(function($action)
                    {
                        // trim space
                        $action = trim($action);

                        // get privilege
                        $permission = map(db('permissions')->get('permissionid = ?', $action));

                        // we good ?
                        if ($permission->rows > 0) return $permission->privilege;

                        // nope
                        return '';

                    }, $actions)
                ];
            });

            // @var array $accountInfo
            $accountInfo = $account->row();

            // get the account type
            $accountInfo->accountType = $account->from('account_types', 'accounttypeid')->get()->row();

            // return 
            // 1. account info
            // 2. token
            // 3. navigation
            // 4. platform
            app('response')->success([
                'message'       => 'login was successful',
                'token'         => $token,
                'account'       => $accountInfo,
                'navigations'   => $navs,
                'platform'      => $platform->platform_name
            ]);

        endif;

        // handle error
        app('filter')->errors($data);
    }

    /**
     * @method Auth postLoginWithFacebook
     * @return mixed
     */
    public function postLoginWithFacebook()
    {
        // validate post
        $data = filter('POST', [
            'id'         => 'number|required|min:4',
            'name'       => 'string|required|min:3',
            'email'      => 'string|required|min:5',
            'picture'    => 'string|required|min:10',
            'platformid' => ['number|required|min:1', 2]
        ]);

        // are we good ?
        if ($data->isOk()) :

            // check if email axists
            $account = map(db('accounts')->get('email = ?', $data->email));

            // do we have something ??
            if ($account->rows > 0) :

                // build post data
                $_POST = [
                    'username'      => $data->email,
                    'platformid'    => $data->platformid,
                    'password'      => $data->id . '@' . $data->email
                ];

                // try login
                return $this->postLogin();

            endif;

            // register as a reporter and log user in
            // get first and last name
            list($firstname, $lastname) = explode(" ", trim($data->name));

            // create password
            $password = $data->id . '@' . $data->email;

            // build post
            $_POST = [
                'firstname'         => $firstname,
                'lastname'          => $lastname,
                'telephone'         => '00000000',
                'email'             => $data->email,
                'password'          => $password,
                'password_again'    => $password,
                'gender'            => 'unknown'
            ];

            ob_start();

            // register reporter
            $this->postRegister('reporter');

            // re render again
            app('screen')->reRender();

            // clear 
            ob_clean();

            // update display image
            $account = map(db('accounts')->get('email = ?', $data->email));

            // log user in
            if ($account->rows > 0) :

                // update the display_image
                db('accounts')->update([
                    'display_image' => $data->picture
                ], 'accountid = ?', $account->accountid)
                ->go();

                // build post data
                $_POST = [
                    'username'      => $data->email,
                    'platformid'    => $data->platformid,
                    'password'      => $password
                ];

                // login now
                return $this->postLogin();

            endif;

            // login failed
            app('response')->error('Login failed. Please try again or contact support');


        endif;

        // handle error
        app('filter')->errors($data);
    }
}