<?php
namespace Moorexa\Framework\App\Models\Helpers;

use Boame\Support\QueryHelper;
use Lightroom\Database\LightQuery;
use function Lightroom\Database\Functions\{map, db};
/**
 * @package Counselors Fetcher
 * @author Amadi Ifeanyi <wekiwork.com> <amadiify.com>
 */
trait CounselorsFetcher
{
    use LightQuery, QueryHelper;

    /**
     * @var int $accountTypeId
     */
    public $accountTypeId = 0;

    /**
     * @method CounselorsFetcher fetchAllCounselors
     * @return void
     */
    public function fetchAllCounselors() : void
    {
        // are we clean
        if ($this->accountTypeId != 0) :

            // @var promise $accounts
            $accounts = db('accounts')
            ->get('accounttypeid = ?', $this->accountTypeId)
            ->if(true, function($query){ $query->orderBy('accountid', 'desc'); $this->addFetchQueryLimits($query); })
            ->go();

            // @var PDO $accounts
            if ($accounts->rowCount() > 0) :

                // @var array $records
                $records = [];

                // push to records
                while ($record = $accounts->fetch(FETCH_OBJ)) :

                    // get total cases assigned
                    $record->cases_assigned = db('cases_reported')->get('assigned_to = ?', $record->accountid)->go()->rowCount();

                    // get added by info
                    $record->addedby = db('accounts')->get('accountid = ?', $record->addedby)->go()->fetch(FETCH_ASSOC);

                    // add record
                    $records[] = $record;

                endwhile;

                // send 
                app('response')->success(['records' => $records]);

            endif;

        endif;

        // no counselor
        app('response')->error('No counselor added.');
    }

    /**
     * @method CounselorsFetcher fetchCounselor
     * @param int $accountId
     * @return void
     */
    public function fetchCounselor(int $accountId)
    {
        // are we clean
        if ($this->accountTypeId != 0) :

            // @var promise $accounts
            $accounts = db('accounts')->get('accounttypeid = ? and accountid = ?', $this->accountTypeId, $accountId)->go();

            // are we good ?
            if ($accounts->rowCount() > 0) :

                // @var object $record 
                $record = $accounts->fetch(FETCH_OBJ);

                // get total cases assigned
                $record->cases_assigned = db('cases_reported')->get('assigned_to = ?', $record->accountid)->go()->rowCount();

                // get added by info
                $record->addedby = db('accounts')->get('accountid = ?', $record->addedby)->go()->fetch(FETCH_ASSOC);

                // send 
                app('response')->success(['records' => $record]);

            endif;

        endif;

        // no counselor
        app('response')->error('Counselor does not exists.');
    }   
}