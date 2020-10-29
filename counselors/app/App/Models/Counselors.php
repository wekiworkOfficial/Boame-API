<?php
namespace Moorexa\Framework\App\Models;

use Closure;
use Lightroom\Database\LightQuery;
use Lightroom\Packager\Moorexa\{
    MVC\Model, Interfaces\ModelInterface
};
use function Lightroom\Database\Functions\{map, db};
/**
 * Counselors model class auto generated.
 *
 *@package App Counselors Model
 *@author Amadi Ifeanyi <amadiify.com>
 **/

class Counselors extends Model
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
     * @method Counselors getRecords
     * @param int $accountid <optional>
     * @return mixed 
     */
    public function getRecords($accountid = 0)
    {
        // load fetcher trait
        $fetcher = new class() { use Helpers\CounselorsFetcher; };

        // set the accountTypeid
        $fetcher->accountTypeId = $this->getAccountTypeId();

        // fetch all
        if ($accountid == 0) return $fetcher->fetchAllCounselors();

        // fetch one single record
        $fetcher->fetchCounselor($accountid);
    }

    /**
     * @method Counselors postRecords
     * @param int $accountid
     * @return mixed
     * 
     * Update a counselor information
     */
    public function postRecords($accountid = 0)
    {
        // must not be 0
        if ($accountid === 0) return app('response')->error('Invalid Counselor account ID');
    }

    /**
     * @method Counselors getCases
     * @param int $accountid
     * @return mixed
     * 
     * Get cases assigned to a counselor
     */
    public function getCases($accountid = 0)
    {
        // must not be 0
        if ($accountid === 0) return app('response')->error('Invalid Counselor account ID');

        // get accounttypeid
        $accountTypeId = $this->getAccountTypeId();

        // check if account exists
        $account = db('accounts')->get('accountid = ? and accounttypeid = ?', $accountid, $accountTypeId)->go();

        // are we good ??
        if ($account->rowCount() == 0) return app('response')->error('Invalid Counselor account.');

        // get cases assigned
        $cases = db('cases_reported')->get('assigned_to = ?', $accountid)->orderBy('date_modified', 'desc')->go();

        // are we good ??
        if ($cases->rowCount() == 0) return app('response')->error('No Case assigned to you yet.');

        // ok we roll
        $casesPacked = [];

        // run through
        while($case = $cases->fetch(FETCH_OBJ)) :

            // @var mixed reported
            $case->reporter = null;

            // get who reported the case
            if ($case->accountid != 0) $case->reporter = db('accounts')->get('accountid = ?', $case->accountid)->go()->fetch(FETCH_ASSOC);

            // get the case type
            $case->caseType = db('case_types')->get('casetypeid = ?', $case->casetypeid)->go()->fetch(FETCH_OBJ)->case_type;

            // add to pack
            $casesPacked[] = $case;

        endwhile;

        // print 
        app('response')->success(['cases' => $casesPacked]);
    }

    /**
     * @method Counselors getAccountTypeId
     * @return int
     */
    private function getAccountTypeId() : int
    {
        // set the table
        $this->setTable('account_types');

        // check for account type
        if ($this->rows('account_type = ?', 'Counsellor')) :

            // load data
            $data = $this->lastQuery()->fetch(FETCH_OBJ);

            // Return id
            return $data->accounttypeid;

        endif;

        // failed
        app('response')->error('Counselor account id wasn\'t found.');

        // return 0
        return 0;
    }
}