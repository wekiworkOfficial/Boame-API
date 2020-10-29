<?php
namespace Moorexa\Framework\Statistics\Providers;

use Closure;
use Lightroom\Packager\Moorexa\Interfaces\ViewProviderInterface;
/**
 * @package Query View Page Provider
 * @author Moorexa <moorexa.com>
 */

class QueryProvider implements ViewProviderInterface
{
    /**
     * @method ViewProviderInterface setArguments
     * @param array $arguments
     * 
     * This method sets the view arguments
     */
    public function setArguments(array $arguments) : void {}

    /**
     * @method ViewProviderInterface viewWillEnter
     * @param Closure $next
     * 
     * This method would be called before rendering view
     */
    public function viewWillEnter(Closure $next) : void
    {
        // route passed
        $next();
    }

    /**
     * @method QueryProvider getTodaySubmission
     * @param $query
     * @param string $column
     * @return int
     */
    public function getTodaySubmission($query, string $column) : int
    {
        // @var int $todayCount
        $todayCount = 0;

        // @var string $today
        $today = date('Y-m-d');

        // get query
        $query->obj(function($row) use ($today, &$todayCount, $column)
        {
            // convert to date string
            $dateFromRow = date('Y-m-d', $row->{$column});

            // compare
            if ($dateFromRow == $today) $todayCount++;

        });

        // return int
        return $todayCount;
    }

    /**
     * @method QueryProvider getTodaySubmissionFromAuthentication
     * @param $query
     * @return int
     */
    public function getTodaySubmissionFromAuthentication($query) : int
    {
        // @var int $todayCount
        $todayCount = 0;

        // @var string $today
        $today = date('Y-m-d');

        // fetch from authentication
        $query->obj(function($row) use (&$todayCount, $today)
        {
            // run query
            $auth = $row->from('authentication', 'accountid')->get();

            // check today submission
            if (date('Y-m-d', $auth->date_created) == $today) $todayCount++;
        });

        // return count
        return $todayCount;
    }
}