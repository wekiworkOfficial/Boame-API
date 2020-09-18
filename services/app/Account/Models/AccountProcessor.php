<?php
namespace Moorexa\Framework\Account\Models;

use Closure;
use Lightroom\Packager\Moorexa\{
    MVC\Model, Interfaces\ModelInterface
};
use function Lightroom\Database\Functions\{map, db};
/**
 * AccountProcessor model class auto generated.
 *
 *@package Account AccountProcessor Model
 *@author Amadi Ifeanyi <amadiify.com>
 **/

class AccountProcessor extends Model
{
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
}