<?php
namespace Moorexa\Framework\Report\Models\Helpers;

use Boame\Support\QueryHelper;
use Lightroom\Database\LightQuery;
use function Lightroom\Database\Functions\{db, map};
use function Lightroom\Requests\Functions\{headers};
/**
 * @package CasesHelper
 * @author Amadi Ifeanyi <wekiwork.com> <amadiify.com>
 */
trait CasesHelper
{
    use LightQuery, QueryHelper;

    /**
     * @method CasesHelper isCaseTypeValid
     * @param string $caseType
     * @param mixed $data *ref
     * @return mixed
     */
    public function isCaseTypeValid(string $caseType, &$data, bool $runFilter = true)
    {
        // check if case type exists
        $caseTypeDb = map(db('case_types')->get('case_type = ?', $caseType));

        // hmmm, not really
        if ($caseTypeDb->rows == 0) :

            // show error
            app('response')->error('Invalid case type "'.$caseType.'"');

            // return bool
            return false;

        endif;

        // run filter
        if ($runFilter) :

            // check the required fields
            $data = filter('POST', app('filter')->get('reportCase' . ucfirst($caseType)));

            // is ok?
            return $data->isOk();

        endif;

        // ok all good
        return $caseTypeDb->primary();
    }

    /**
     * @method CasesHelper fetchAllCases
     * @param int $caseTypeId
     * @param string $upload_table
     * @return void
     */
    public function fetchAllCases(int $caseTypeId, string $upload_table) : void 
    {
        // set the table
        $this->setTable('cases_reported');

        // do we have something
        if ($this->rows('casetypeid = ?', $caseTypeId) > 0) :

            // get all
            $cases = map(db('cases_reported')
            ->get('casetypeid = ?', $caseTypeId)
            ->if(true, function($query){ $this->addFetchQueryLimits($query); }));

            // @var array $allCases
            $allCases = [];

            // fetch all
            $cases->obj(function($case) use (&$allCases, $upload_table)
            {
                // fetch upload
                $uploads = [];

                // run query
                map(db($upload_table)->get('casesreportedid = ?', $case->casesreportedid))
                ->obj(function($upload) use (&$uploads){
                    $uploads[] = $upload->row();
                });

                // get case 
                $case = $case->row();

                // add uploads
                $case->uploads = $uploads;

                // send outside
                $allCases[] = $case;

            });

            // share 
            app('response')->success(['cases' => $allCases]);

        endif;

        // no result
        app('response')->error('No "Text" Case reported yet.');
    }

    /**
     * @method CasesHelper fetchSingleCase
     * @param int $caseTypeId
     * @param string $upload_table
     * @param int $casesReportedID
     * @return void 
     */
    public function fetchSingleCase(int $caseTypeId, string $upload_table, int $casesReportedID) : void 
    {
        // set the table
        $this->setTable('cases_reported');

        // do we have such a case
        if ($this->rows('casetypeid = ? and casesreportedid = ?', $caseTypeId, $casesReportedID) > 0) :

            // get the last query
            $case = map($this->lastQuery())->row();

            // @var array $uploads
            $uploads = [];

            // get uploads
            map(db($upload_table)->get('casesreportedid = ?', $case->casesreportedid))
            ->obj(function($upload) use (&$uploads){
                $uploads[] = $upload->row();
            });

            // add now
            $case->uploads = $uploads;

            // print now
            app('response')->success(['cases' => $case]);

        endif;

        // nope!
        app('response')->error('No record found');
    }
}