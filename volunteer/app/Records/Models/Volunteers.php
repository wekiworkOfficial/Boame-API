<?php
namespace Moorexa\Framework\Records\Models;

use Closure;
use Lightroom\Database\LightQuery;
use Lightroom\Packager\Moorexa\{
    MVC\Model, Interfaces\ModelInterface
};
use function Lightroom\Database\Functions\{map, db};
use function Lightroom\Functions\GlobalVariables\{var_get};
/**
 * Volunteers model class auto generated.
 *
 *@package Records Volunteers Model
 *@author Amadi Ifeanyi <amadiify.com>
 **/

class Volunteers extends Model
{
    use LightQuery;

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
     * @method Volunteers getRecords
     * @param int $accountid <optional>
     * @return mixed 
     */
    public function getRecords($accountid = 0)
    {
        // load fetcher trait
        $fetcher = new class() { use Helpers\VolunteerFetcher; };

        // set the accountTypeid
        $fetcher->accountTypeId = $this->getAccountTypeId();

        // fetch all
        if ($accountid == 0) return $fetcher->fetchAllVolunteers();

        // fetch one single record
        $fetcher->fetchVolunteer($accountid);
    }

    /**
     * @method Volunteers getSort
     * @param int $volunteerPositionId
     */
    public function getSort($volunteerPositionId=0)
    {
        // filter param
        $param = app('filter')->safeParam(['number' => $volunteerPositionId]);

        // are we good ??
        if ($param->isOk()) :

            // load fetcher trait
            $fetcher = new class() { use Helpers\VolunteerFetcher; };

            // sort volunteers
            return $fetcher->fetchAllVolunteersByPosition($volunteerPositionId);

        endif;

        // invalid positionid 
        app('response')->error('Invalid Volunteer Position ID');
    }

    /**
     * @method Volunteers getPositions
     * @return void
     */
    public function getPositions() : void
    {
        // set the table
        $this->setTable('volunteer_positions');

        // fetch
        if ($this->rows() > 0) :

            // get rows
            $records = $this->lastQuery()->fetchAll(FETCH_OBJ);

            // print out
            app('response')->success(['records' => $records]);

        endif;

        // not found
        app('response')->error('No volunteer position at this time');
    }

    /**
     * @method Volunteers getAccountTypeId
     * @return int
     */
    private function getAccountTypeId() : int
    {
        // set the table
        $this->setTable('account_types');

        // check for account type
        if ($this->rows('account_type = ?', 'volunteer')) :

            // load data
            $data = $this->lastQuery()->fetch(FETCH_OBJ);

            // Return id
            return $data->accounttypeid;

        endif;

        // failed
        app('response')->error('Volunteer account id wasn\'t found.');

        // return 0
        return 0;
    }

    /**
     * @method Volunteers postApprove
     * @param int $accountId
     * @return mixed
     */
    public function postApprove($accountId)
    {
        // validate id
        $data = app('filter')->safeParam(['number' => $accountId]);

        // are we good ?
        if ($data->isOk()) :

            // check if account exists
            $volunteer = map(db('volunteers')->get('accountid = ?', $accountId));

            // not good ?
            if ($volunteer->rows == 0) return app('response')->error('Account not found or not a volunteer!');

            // approved previously?
            if ($volunteer->date_approved != '') return app('response')->error('Volunteer approved already.');

            // apply filter
            $data = filter('POST', app('filter')->get('approveVolunteer'));

            // all good ?
            if ($data->isOk()) :

                // approve now
                $volunteer->update([
                    'comment' => $data->comment,
                    'date_approved' => time(),
                    'approved' => 1,
                    'approved_by' => var_get('accountid')
                ]);

                // all good
                app('response')->success('Volunteer approved successfully');

            endif;

        endif;

        // handle error
        app('filter')->errors($data);
    }
}