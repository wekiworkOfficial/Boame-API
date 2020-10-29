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
     * @var array $config
     * 
     * This would allow us run our query internally
     */
    public $config = [];

    /**
     * @method CasesHelper isCaseTypeValid
     * @param string $caseType
     * @param mixed $data *ref
     * @return mixed
     */
    public function isCaseTypeValid(string $caseType, &$data, bool $runFilter = true, &$caseTypeDb=null)
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
    public function fetchAllCases(int $caseTypeId = 0, string $upload_table = '') : void 
    {
        // set the table
        $this->setTable('cases_reported');

        // @var bool $canContinue
        $canContinue = false;

        // check for internal config
        if (count($this->config) == 0) :

            // check case types
            if ($this->rows('casetypeid = ?', $caseTypeId) > 0) :

                // where statement
                $where = ['casetypeid' => $caseTypeId];

                // check for x-requestid
                if (headers()->has('x-requestid')) $where['accountid'] = headers()->get('x-requestid');

                // can continue
                $canContinue = true;

            endif;

        else:

            // update where array
            $where = $this->config;

            // can continue
            $canContinue = true;

        endif;

        // do we have something
        if ($canContinue) :

            // get all
            $cases = map(db('cases_reported')
            ->get($where)
            ->orderBy('casesreportedid', 'desc')
            ->if(true, function($query){ 
                // add query limit
                $this->addFetchQueryLimits($query); 
            }));

            // @var array $allCases
            $allCases = [];

            // fetch all
            $cases->obj(function($case) use (&$allCases, $upload_table)
            {
                // fetch upload
                $uploads = [];

                // get all uploads
                $uploadFunc = function($upload_table) use ($case, &$uploads)
                {
                    // run query
                    map(db($upload_table)->get('casesreportedid = ?', $case->casesreportedid))
                    ->obj(function($upload) use (&$uploads){
                        $uploads[] = $upload->row();
                    });
                };

                // run specific query
                if ($upload_table != '') :

                    // get all uploads
                    $uploadFunc($upload_table);

                else:

                    // run specific queries
                    switch ($case->casetypeid) :

                        // video
                        case 1:
                            $uploadFunc('video_attached');
                        break;

                        // audio
                        case 2:
                            $uploadFunc('audio_attached');
                        break;

                        // text 
                        case 3:
                            $uploadFunc('images_attached');
                        break;

                    endswitch;
                
                endif;

                // load account info
                $account = ($case->accountid != 0) ? $case->from('accounts','accountid')->get()->row() : 'Anonnymus';

                // get case 
                $caseRow = $case->row();

                // add uploads
                $caseRow->uploads = $uploads;

                // add account
                $caseRow->account = $account;

                // get case type
                $caseRow->caseType = $case->from('case_types', 'casetypeid')->get()->row();

                // format date
                $caseRow->date_formatted = date('Y-m-d g:i a', $case->date_created);

                // send outside
                $allCases[] = $caseRow;

            });

            // share 
            app('response')->success(['cases' => $allCases]);

        endif;

        // no result
        app('response')->error('Could not load any case from this category.');
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
            $case = map($this->lastQuery());

            // @var object $row
            $row = $case->row();

            // try fetch account info
            if ($row->accountid != '0') $row->account = map(db('accounts')->get('accountid = ?', $row->accountid))->row();

            // try fetch assignee info
            if ($row->assigned_to != '0') $row->assignee = map(db('accounts')->get('accountid = ?', $row->assigned_to))->row();

            // @var array $uploads
            $uploads = [];

            // get uploads
            map(db($upload_table)->get('casesreportedid = ?', $case->casesreportedid))
            ->obj(function($upload) use (&$uploads){
                // add row
                $uploads[] = $upload->row();
            });

            // add now
            $row->uploads = $uploads;

            // print now
            app('response')->success(['cases' => $row]);

        endif;

        // nope!
        app('response')->error('No record found');
    }
}