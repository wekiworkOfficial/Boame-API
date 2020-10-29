<?php
namespace Moorexa\Framework;

use Lightroom\Packager\Moorexa\MVC\Controller;
use function Lightroom\Database\Functions\{map, db};
use function Lightroom\Requests\Functions\{headers};
use Moorexa\Framework\Statistics\Providers\QueryProvider;

/**
 * Documentation for Statistics Page can be found in Statistics/readme.txt
 *
 *@package      Statistics Page
 *@author       Moorexa <www.moorexa.com>
 *@author       Amadi Ifeanyi <amadiify.com>
 **/

class Statistics extends Controller
{
    /**
    * @method Statistics overview
    *
    * See documentation https://www.moorexa.com/doc/controller
    *
    * You can catch params sent through the $_GET request
    * @return void
    **/

    public function overview(QueryProvider $provider) : void 
    {
        // get all feedbacks
        $feedbacks = map(db('feedbacks')->get());

        // get all cases
        $cases = map(db('cases_reported')->get());

        // get all counselors
        $counselors = map(db('accounts')->get('accounttypeid = ?', 2));

        // get all volunteers
        $volunteers = map(db('accounts')->get('accounttypeid = ?', 5));

        // get all reporters
        $reporters = map(db('accounts')->get('accounttypeid = ?', 4));

        // show feedback
        app('response')->success([
            'feedbacks'  => [
                'total'  => $feedbacks->rows,
                'today'  => $provider->getTodaySubmission($feedbacks, 'date_created')
            ],
            'cases'      => [
                'total'  => $cases->rows,
                'today'  => $provider->getTodaySubmission($cases, 'date_created')
            ],
            'counselors' => [
                'total'  => $counselors->rows,
                'today'  => $provider->getTodaySubmissionFromAuthentication($counselors, 'date_created')
            ],
            'volunteers' => [
                'total'  => $volunteers->rows,
                'today'  => $provider->getTodaySubmissionFromAuthentication($volunteers, 'date_created')
            ],
            'reporters'  => [
                'total'  => $reporters->rows,
                'today'  => $provider->getTodaySubmissionFromAuthentication($reporters, 'date_created')
            ]
        ]);
    }

    /**
    * @method Statistics appUsage
    *
    * See documentation https://www.moorexa.com/doc/controller
    *
    * You can catch params sent through the $_GET request
    * @return void
    **/
    public function appUsage() : void
    {
        // @var string $currentDay
        $currentDay = date('d');

        // get current week
        $currentWeek = ceil(intval($currentDay) / 7);

        // get the current year
        $year = date('Y');

        // get the month
        $month = date('m');

        // run find query
        $find = db('app_usage')->get('year = ? and weekid = ? and month = ?', $year, $currentWeek, $month)->go();

        // are we good??
        if ($find->rowCount() > 0) app('response')->success(['usage' => $find->fetch(FETCH_ASSOC)]);

        // return default
        app('response')->success([
            'usage' => [
                'monday'    => 0,
                'tuesday'   => 0,
                'wednesday' => 0,
                'thursday'  => 0,
                'friday'    => 0,
                'saturday'  => 0,
                'sunday'    => 0,
            ]
        ]);
    }

    /**
    * @method Statistics casesOverview
    *
    * See documentation https://www.moorexa.com/doc/controller
    *
    * You can catch params sent through the $_GET request
    * @return void
    **/
    public function casesOverview(QueryProvider $provider) : void
    {
        // @var array $cases
        $cases = [];

        // load all types
        map(db('case_types')->get())->obj(function($row) use (&$cases, $provider){

            // run query
            $query = $row->from('cases_reported', 'casetypeid')->get();

            // load all cases by types
            $cases[$row->case_type] = [
                'total' => $query->rows,
                'today' => $provider->getTodaySubmission($query, 'date_created')
            ];
        });

        // push response
        app('response')->success($cases);
    }

    /**
     * @method Statistics libraryOverview
     * @return void
     */
    public function libraryOverview() : void
    {
        // beginging of the day
        $beginingOfTheDay = strtotime('12 am today');

        // ending of the day
        $endingOfDay = strtotime('11:59 am tomorrow');

        // get all todays articles
        $todaysArticlesCount = db('articles')->get('date_created >= ? and date_created <= ?', $beginingOfTheDay, $endingOfDay)->go()->rowCount();

        // get all articles
        $articlesCount = db('articles')->get()->go()->rowCount();

        // get vides published today
        $vidoesPublishedTodayCount = db('videos_published')->get('date_created >= ? and date_created <= ?', $beginingOfTheDay, $endingOfDay)->go()->rowCount();

        // get all published videos
        $vidoesCount = db('videos_published')->get()->go()->rowCount();

        // get total views
        $totalViews = 0;

        // make query
        $videosAttached = db('video_attached')->get('casesreportedid = ?', '0')->go();

        // add to total views
        if ($videosAttached->rowCount() > 0) :

            // append views
            while ($row = $videosAttached->fetch(FETCH_OBJ)) $totalViews += intval($row->total_views);

        endif;

        // get total views from articles
        $articles = db('articles')->get('total_views > 0')->go();

        // add to total views
        if ($articles->rowCount() > 0) :

            // append views
            while ($row = $articles->fetch(FETCH_OBJ)) $totalViews += intval($row->total_views);

        endif;

        // print out
        app('response')->success([
            'articles_today'    => $todaysArticlesCount,
            'videos_today'      => $vidoesPublishedTodayCount,
            'videos'            => $vidoesCount,
            'articles'          => $articlesCount,
            'views'             => $totalViews
        ]);
    }

    /**
     * @method Statistics generalOverview
     * @return void
     */
    public function generalOverview() : void 
    {
        // @var array $services
        $services = [
            'chat-with-counselor' => [
                'male'      => 0,
                'female'    => 0,
                'other'     => 0
            ],
            'report-case-tag' => [
                'male'      => 0,
                'female'    => 0,
                'other'     => 0
            ],
            'report-case-tag-audio' => [
                'male'      => 0,
                'female'    => 0,
                'other'     => 0
            ],
            'report-case-tag-video' => [
                'male'      => 0,
                'female'    => 0,
                'other'     => 0
            ],
            'read-article' => [
                'male'      => 0,
                'female'    => 0,
                'other'     => 0
            ],
            'watch-video' => [
                'male'      => 0,
                'female'    => 0,
                'other'     => 0
            ]
        ];

        // days of the week
        $daysOfTheWeek = [
            'monday'    => 0,
            'tuesday'   => 0,
            'wednesday' => 0,
            'thursday'  => 0,
            'friday'    => 0,
            'saturday'  => 0,
            'sunday'    => 0,
        ];

        // this month usuage
        $usageQuery = [
            date('Y') => [
                date('M') => $daysOfTheWeek
            ]
        ];

        // apply range
        if (headers()->has('x-date-range')) :

            // get range
            $range = preg_replace('/[\s]+/', '', str_replace('/', '-', headers()->get('x-date-range')));

            // split
            $rangeArray = explode(',', $range);

            // get start and end
            list($startDate, $endDate) = $rangeArray;

            // first day of the month
            $dayOne = mktime(0,0,0,intval(date('m', strtotime($startDate))),1,intval(date('Y', strtotime($startDate))));

            // last day of the month
            $lastDay = mktime(0,0,0,intval(date('m', strtotime($endDate))),31,intval(date('Y', strtotime($endDate))));

            // @var mixed $servicesRequested
            $servicesRequested = db('services_requested')->get('date_created >= ? and date_created <= ?', $dayOne, $lastDay)->go();

            // add usage to array
            $start = intval(date('m', strtotime($startDate)));
            $end   = intval(date('m', strtotime($endDate)));

            // use time date
            $startDateInstance = new \DateTime($startDate);
            $endDateInstance = new \DateTime($endDate);

            // get start year
            $startYear = intval(date('Y', strtotime($startDate)));
            $endYear = intval(date('Y', strtotime($endDate)));

            // reset usage
            $usageQuery = [];

            // update end
            $end = $end < $start ? ($start + $startDateInstance->diff($endDateInstance)->m) : $end;

            // run for loop
            for($year = $startYear; $year <= $endYear; $year++) :

                for ($x = $start; $x <= $end; $x++) :

                    if ($x <= 12) :

                        // get month
                        $month = date('M', mktime(0,0,0,$x,1,$year));
        
                        // add to usage
                        $usageQuery[$year][$month] = $daysOfTheWeek;

                    endif;
    
                endfor;

                // reset start
                $start = 1;
                $end = intval(date('m', strtotime($endDate)));
                
            endfor;

        else:

            // first day of the month
            $dayOne = mktime(0,0,0,intval(date('m')),1,intval(date('Y')));

            // last day of the month
            $lastDay = mktime(0,0,0,intval(date('m')),31,intval(date('Y')));

            // @var mixed $servicesRequested
            $servicesRequested = db('services_requested')->get('date_created >= ? and date_created <= ?', $dayOne, $lastDay)->go();

        endif;

        // are we good ??
        if ($servicesRequested->rowCount() > 0) :

            // ilterate
            while ($row = $servicesRequested->fetch(FETCH_OBJ)) :

                // check account id
                if ($row->accountid == 0) $services[$row->nav_tag]['other'] += 1;

                // get gender
                if ($row->accountid != 0) :

                    // make query 
                    $account = db('accounts')->get('accountid = ?', $row->accountid)->go();

                    // are we good ??
                    if ($account->rowCount() > 0) :

                        // load account 
                        $account = $account->fetch(FETCH_OBJ);

                        // get gender
                        $services[$row->nav_tag][strtolower($account->gender)] += 1;

                    endif;

                endif;

            endwhile;

        endif;

        // get app usuage
        foreach ($usageQuery as $year => $yearMonths) :

            // loop through the months
            foreach ($yearMonths as $month => $weekDays) :

                // make query 
                $query = db('app_usage')->get('year = ? and month = ?', $year, date('m', strtotime($month)))->go();

                // do we have something??
                if ($query->rowCount() > 0) :

                    // load object
                    while ($row = $query->fetch(FETCH_OBJ)) :

                        // Update week days
                        $weekDays['monday']     += intval($row->monday);
                        $weekDays['tuesday']    += intval($row->tuesday);
                        $weekDays['wednesday']  += intval($row->wednesday);
                        $weekDays['thursday']   += intval($row->thursday);
                        $weekDays['friday']     += intval($row->friday);
                        $weekDays['saturday']   += intval($row->saturday);
                        $weekDays['sunday']     += intval($row->sunday);

                        // update usage
                        $usageQuery[$year][$month] = $weekDays;

                    endwhile;

                endif;

            endforeach;

        endforeach;

        // print out
        app('response')->success([
            'usage'     => $usageQuery,
            'services'  => $services
        ]);
    }
}
// END class