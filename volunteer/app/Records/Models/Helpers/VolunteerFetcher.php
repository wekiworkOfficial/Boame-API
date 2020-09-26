<?php
namespace Moorexa\Framework\Records\Models\Helpers;

use Boame\Support\QueryHelper;
use Lightroom\Database\LightQuery;
use function Lightroom\Database\Functions\{map, db};
/**
 * @package Volunteer Fetcher
 * @author Amadi Ifeanyi <wekiwork.com> <amadiify.com>
 */
trait VolunteerFetcher
{
    use LightQuery, QueryHelper;

    /**
     * @var int $accountTypeId
     */
    public $accountTypeId = 0;

    /**
     * @method VolunteerFetcher fetchAllVolunteers
     * @return void
     */
    public function fetchAllVolunteers() : void
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

                // load all
                while ($record = $accounts->fetch(FETCH_OBJ)) :

                    // load from 'volunteers'
                    $volunteer = db('volunteers')->get('accountid = ?', $record->accountid)->go()->fetch(FETCH_OBJ);

                    // get the account role
                    $volunteer->position = map(db('volunteer_positions')->get('volunteerpositionid = ?', $volunteer->volunteerpositionid))->volunteerposition;

                    // add information
                    $record->information = $volunteer;

                    // push to records
                    $records[] = $record;

                endwhile;

                // send 
                app('response')->success(['records' => $records]);

            endif;

        endif;

        // no volunteer
        app('response')->error('No volunteer recorded.');
    }

    /**
     * @method VolunteerFetcher fetchVolunteer
     * @param int $accountId
     * @return void
     */
    public function fetchVolunteer(int $accountId)
    {
        // are we clean
        if ($this->accountTypeId != 0) :

            // @var promise $accounts
            $accounts = db('accounts')->get('accounttypeid = ? and accountid = ?', $this->accountTypeId, $accountId)->go();

            // are we good ?
            if ($accounts->rowCount() > 0) :

                // @var object $record 
                $record = $accounts->fetch(FETCH_OBJ);

                // load from 'volunteers'
                $volunteer = db('volunteers')->get('accountid = ?', $accountId)->go()->fetch(FETCH_OBJ);

                // get the account role
                $volunteer->position = map(db('volunteer_positions')->get('volunteerpositionid = ?', $volunteer->volunteerpositionid))->volunteerposition;

                // add information
                $record->information = $volunteer;

                // send 
                app('response')->success(['records' => $record]);

            endif;

        endif;

        // no volunteer
        app('response')->error('Volunteer does not exists.');
    }   

    /**
     * @method VolunteerFetcher fetchAllVolunteersByPosition
     * @param int $positionId
     * @return void 
     */
    public function fetchAllVolunteersByPosition(int $positionId) : void
    {
        // @var mixed $volunteers
        $volunteers = db('volunteers')
        ->get('volunteerpositionid = ?', $positionId)
        ->if(true, function($query){ $query->orderBy('approved', 'desc'); $this->addFetchQueryLimits($query); })
        ->go();

        // are we good ?
        if ($volunteers->rowCount() > 0) :

            // @var array $records
            $records = [];

            // get position
            $position = map(db('volunteer_positions')->get('volunteerpositionid = ?', $positionId))->volunteerposition;

            // run through
            while($record = $volunteers->fetch(FETCH_OBJ)) :

                // get the account role
                $record->position = $position;

                // load account info
                $account = map(db('accounts')->get('accountid = ?', $record->accountid))->row();

                // add info
                $account->information = $record;

                // push to records
                $records[] = $account;

            endwhile;

            // send
            app('response')->success(['records' => $records]);
            
        endif;

        // no volunteer found
        app('response')->error('No Volunteer occupying this position yet!');
    }
}