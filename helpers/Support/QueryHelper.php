<?php 
namespace Boame\Support;

use function Lightroom\Requests\Functions\{headers};
/**
 * @package Support QueryHelper
 * @author Amadi Ifeanyi <wekiwork.com> <amadiify.com>
 */
trait QueryHelper
{
    /**
     * @method QueryHelper addFetchQueryLimits
     * @param mixed $query
     * @return void
     */
    private function addFetchQueryLimits(&$query) : void 
    {
        // @var int $start
        $start = 0;
                
        // @var int $end
        $end = 100;

        // do we have x-query-limits?
        if (headers()->has('x-query-limits')) :

            // get the limits
            $limits = headers()->get('x-query-limits');

            // split as an array
            $limits = explode(',', $limits);

            // get start
            $start = isset($limits[0]) ? (int) $limits[0] : $start;

            // get end
            $end = isset($limits[1]) ? (int) $limits[1] : $end;

        endif;

        // apply limts
        $query->limit($start, $end);
    }
}