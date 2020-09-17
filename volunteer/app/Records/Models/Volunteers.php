<?php
namespace Moorexa\Framework\Records\Models;

use Closure;
use Lightroom\Database\LightQuery;
use Lightroom\Packager\Moorexa\{
    MVC\Model, Interfaces\ModelInterface
};
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
}