<?php
namespace Boame\Models\Traits;

use Closure;
use Boame\Security\Salts;
use function Lightroom\Database\Functions\{map, db}; 
use function Lightroom\Security\Functions\{hash_password};
/**
 * @package RegistrationHelper
 * @author Amadi Ifeanyi <amadiify.com> <wekiwork.com>
 */
trait RegistrationHelper
{
    /**
     * @var bool $continueProcessing
     */
    private $continueProcessing = true;

    /**
     * @method RegistrationHelper processBasics
     * @param mixed $filter
     * @param int $accounttypeid
     * @param Closure $callback
     */
    private function processBasics($filter, int $accounttypeid, Closure $callback)
    {
        // check email and phone
        $hasAccount = map(db('accounts')->get('email = ? or telephone = ?', $filter->email, $filter->telephone));

        // are we good
        if ($hasAccount->rows == 0) :

            // compare password
            if ($filter->password != $filter->password_again) : app('response')->error('Password provided does not match.'); return false; endif;

            // account data
            $accountData = [
                'firstname'     => $filter->firstname,
                'lastname'      => $filter->lastname,
                'email'         => $filter->email,
                'telephone'     => $filter->telephone,
                'accounttypeid' => $accounttypeid,
                'verified'      => 0
            ];

            // valid user
            call_user_func_array($callback, ['create', &$accountData]);

            // can we continue
            if ($this->continueProcessing) :

                // create account and get the account id
                $createAccount = map(db('accounts')->insert($accountData));

                // add to authentication table and get the id
                $authentication = map(db('authentication')->insert([
                    'accountid'     => $createAccount->id,
                    'date_created'  => time()
                ]));
                    
                // generate password salt
                $salt = Salts::generate();

                // hash password with salt
                $password = hash_password($filter->password, $salt);

                // add to password_hash table
                db('password_hash')->insert([
                    'authenticationid'  => $authentication->id,
                    'passwordhash'      => $password,
                    'password_salt'     => $salt
                ])->go();

                // @TODO : send email here
                // .. 

                // load callback now
                call_user_func_array($callback, [
                    'complete', 
                    &$accountData, [
                        'accountid'         => &$createAccount->id, 
                        'authenticationid'  => &$authentication->id
                    ]
                ]);

            endif;
            
        endif;

        // account does not exists
        if ($hasAccount->rows > 0) app('response')->error('There is already an account associated with this email address or phone');

    }
}