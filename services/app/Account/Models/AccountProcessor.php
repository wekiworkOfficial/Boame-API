<?php
namespace Moorexa\Framework\Account\Models;

use Closure;
use Lightroom\Packager\Moorexa\{
    MVC\Model, Interfaces\ModelInterface
};
use Boame\Support\UploadToStorage;
use function Lightroom\Database\Functions\{map, db};
use function Lightroom\Requests\Functions\{files, headers, post};
/**
 * AccountProcessor model class auto generated.
 *
 *@package Account AccountProcessor Model
 *@author Amadi Ifeanyi <amadiify.com>
 **/

class AccountProcessor extends Model
{
    use UploadToStorage;

    /**
     * @var array $actionable
     */
    public $actionable = [
        'read/accounts' => [
            'GET' => 'getReadAccounts'
        ],
    ];

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
     * @method AccountProcessor getRead
     * @param int $accountid
     * @return mixed
     */
    public function getRead($accountid)
    {
        // validate param
        $data = app('filter')->safeParam(['number' => $accountid]);

        // are we good ??
        if ($data->isOk()) :

            // Check if account exists
            $account = map(db('accounts')->get('accountid = ?', $accountid));

            // are we good ?
            if ($account->rows == 0) return app('response')->error('This account does not exists.');
            
            // get the account type
            $accountType = $account->from('account_types', 'accounttypeid')->get();

            // get who added this account
            $addedBy = map(db('accounts')->get('accountid = ?', $account->addedby));

            // get the row
            $account = $account->row();

            // reset addedby
            $account->addedby = 'Boame IRobot';

            // check if we have something
            if ($addedBy->rows > 0) $account->addedby = ucwords($addedBy->firstname . ' ' . $addedBy->lastname);

            // add account type
            $account->accountType = $accountType->account_type;

            // fetch volunteer info
            $volunteer = map(db('volunteers')->get('accountid = ?', $account->accountid));

            // are we good ?
            if ($volunteer->rows > 0) :

                // get row
                $record = $volunteer->row();

                // get position
                $position = $volunteer->from('volunteer_positions', 'volunteerpositionid')->get();

                // add position
                $record->position = $position->volunteerposition;

                // get who approved account
                if ($record->approved_by != null) :

                    // make request
                    $getApprover = map(db('accounts')->get('accountid = ?', $record->approved_by));

                    // update
                    $record->approved_by = ucwords($getApprover->firstname . ' ' . $getApprover->lastname);

                endif;

                // add to account
                $account->information = $record;

            endif;

            // all good 
            app('response')->success(['account' => $account]);

        endif;

        // handle error
        app('filter')->errors($data);
    }

    /**
     * @method AccountProcessor postUpdate
     * @param int $accountID
     */
    public function postUpdate(int $accountID = 0)
    {
        // load account ID
        if ($accountID == 0) return app('response')->error('Invalid Account ID');

        // validate param
        $data = app('filter')->safeParam(['number' => $accountID]);

        // is param safe
        if ($data->isOk()) :

            // apply filter
            $data = filter('POST', [
                'firstname' => 'required|string|notag|min:2',
                'lastname'  => 'required|string|notag|min:2'
            ]);

            // are we good ??
            if ($data->isOk()) :

                // add gender
                if (post()->has('gender')) $data->gender = post()->gender('gender');

                // check if we account
                $account = map(db('accounts')->get('accountid = ?', $accountID));

                // end now if account doesn't exists
                if ($account->row == 0) return app('response')->error('Account doesn\'t exists.');

                // @var mixed $record
                $record = func()->toArray($account->row());

                // check if file has been pushed
                if (files()->has('display_image')) $data->display_image = $this->uploadFile($_FILES['display_image'], $record);

                // remove number 0
                $data->pop('number0');

                // update account
                $account->update($data->data());

                // fetch again
                app('response')->success(['message' => 'Profile updated successfully', 'data' => map(db('accounts')->get('accountid = ?', $accountID))->row()]);

            endif;
 
        endif;

        // handle error
        app('filter')->errors($data);
    }

    /**
     * @method AccountProcessor getAccounts
     * @return mixed
     */
    public function getReadAccounts()
    {
        // get accounts from types
        if (headers()->has('x-account-types')) :

            // get all account types
            $accountTypesArray = explode(',', headers()->get('x-account-types'));

            // @var array $where
            $where = [];

            // get account type names
            foreach($accountTypesArray as $accountTypeName) $where[] = "account_type = '".trim($accountTypeName)."'";

            // fetch account type
            $accountType = db('account_types')->get(implode(' or ', $where))->go();

            // @var array $allowed
            $allowed = $where = [];

            // load allowed
            if ($accountType->rowCount() > 0) :

                // make query
                foreach ($accountType->fetchAll(FETCH_ASSOC) as $row) :

                    // push to allowed
                    $allowed[$row['accounttypeid']] = $row['account_type'];

                    // push to where
                    $where[] = "accounttypeid = {$row['accounttypeid']}";

                endforeach;

            endif;

            // make query
            $query = db('accounts')->get(implode(' or ', $where))->go();
            
            // @var array $accounts
            $accounts = []; 

            // get accounts
            if ($query->rowCount() > 0) :

                // add to accounts
                foreach($query->fetchAll(FETCH_ASSOC) as $row) :

                    // add account type
                    $row['accountType'] = $allowed[$row['accounttypeid']];

                    // get date created
                    $row['date_created'] = db('authentication')->get('accountid = ?', $row['accountid'])->go()->fetch(FETCH_OBJ)->date_created;

                    // get total cases submitted
                    $row['cases_submitted'] = db('cases_reported')->get('accountid = ?', $row['accountid'])->go()->rowCount();

                    // get last seen
                    $authentication = db('authentication')->get('accountid = ?', $row['accountid'])->go();

                    // are we good ??
                    if ($authentication->rowCount() > 0) :

                        // get record
                        $authentication = $authentication->fetch(FETCH_OBJ);

                        // add last seen
                        $row['last_seen'] = $authentication->last_seen;

                    endif;

                    if ($row['accountType'] == 'Volunteer') :
                        // check if approved
                        $volunteer = db('volunteers')->get('accountid = ?', $row['accountid'])->go();
                        // are we good ?
                        if ($volunteer->rowCount() > 0):
                            if ($volunteer->fetch(FETCH_OBJ)->approved == 1) $accounts[] = $row;
                        endif;
                    else:

                        // push to accounts
                        $accounts[] = $row;
                    endif;

                endforeach;

            endif;

            // are we good ??
            return count($accounts) > 0 ? app('response')->success(['accounts' => $accounts]) : app('response')->error('No account found');

        endif;

        // get all accounts
        $query = map(db('accounts')->get());

        // @var array $accounts
        $accounts = [];

        // fetch
        $query->obj(function($row) use (&$accounts){

            // get the account type
            $accountType = $row->from('account_types', 'accounttypeid')->get();

            // get record
            $record = $row->row();

            // add account type
            $record->accountType = $accountType->account_type;

            // get date created
            $record->date_created = $row->from('authentication', 'accountid')->get()->date_created;

            // get cases submitted
            $record->cases_submitted = $row->from('cases_reported', 'accountid')->get()->rows;

            // get last seen
            $authentication = db('authentication')->get('accountid = ?', $row->accountid)->go();

            // are we good ??
            if ($authentication->rowCount() > 0) :

                // get record
                $authentication = $authentication->fetch(FETCH_OBJ);

                // add last seen
                $record->last_seen = $authentication->last_seen;

            endif;

            if ($record->accountType == 'Volunteer') :

                // check if approved
                $volunteer = db('volunteers')->get('accountid = ?', $record->accountid)->go();

                // are we good ?
                if ($volunteer->rowCount() > 0):
                    if ($volunteer->fetch(FETCH_OBJ)->approved == 1) $accounts[] = $row;
                endif;

            else:

                // push to accounts
                $accounts[] = $row;
                
            endif;

            // push to accounts
            $accounts[] = $record;

        });

        // are we good ??
        return count($accounts) > 0 ? app('response')->success(['accounts' => $accounts]) : app('response')->error('No account found');
    }

    /**
     * @method AccountProcessor postDeleteAccount
     * @return mixed
     */
    public function postDeleteAccount()
    {
        // get the account id
        $input = filter('POST', [
            'accountid' => 'required|number|min:1'
        ]);

        // are we good
        if (!$input->isOk()) return app('response')->error('Missing the account id. Please include and try again.');

        // ok start processing
        // ... 

        // check if account exists
        $account = db('accounts')->get('accountid = ?', $input->accountid)->go();

        // does account exists ??
        if ($account->rowCount() == 0) return app('response')->error('Account does not exists. Sorry we could not proceed with this request.');

        // delete from accounts
        db('accounts')->delete('accountid = ?', $input->accountid)->go();

        // delete from articles
        db('articles')->delete('accountid = ?', $input->accountid)->go();

        // delete from authentication
        db('authentication')->delete('accountid = ?', $input->accountid)->go();

        // delete from cases_reported
        db('cases_reported')->delete('accountid = ?', $input->accountid)->go();

        // update assigned_to 
        db('cases_reported')->update(['assigned_to' => 0, 'date_modified' => ''], 'accountid = ?', $input->accountid)->go();

        // delete from chatconnections
        db('chatconnection')->delete('accountid = ? or accountid2 = ?', $input->accountid)->go();

        // delete from feedbacks
        db('feedbacks')->delete('accountid = ?', $input->accountid)->go();

        // delete from video published
        db('videos_published')->delete('accountid = ?', $input->accountid)->go();

        // delete from volunteers
        db('volunteers')->delete('accountid = ?', $input->accountid)->go();

        // ok we good now
        app('response')->success('Account deleted successfully.');

    }
}