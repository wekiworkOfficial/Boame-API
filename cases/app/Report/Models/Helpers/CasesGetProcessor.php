<?php
namespace Moorexa\Framework\Report\Models\Helpers;

use function Lightroom\Database\Functions\{map, db};
/**
 * @package Cases CasesGetProcessor
 * @author Amadi Ifeanyi <wekiwork.com> <amadiify.com>
 */
trait CasesGetProcessor
{
    use CasesHelper;

    /**
     * @method CasesGetProcessor textCaseProcessor
     * @param int $caseTypeId
     * @param int $casesReportedID
     * @return void 
     */
    public function textCaseProcessor($caseTypeId, $casesReportedID) : void
    {
        // get all
        if ($casesReportedID == 0) $this->fetchAllCases($caseTypeId, 'images_attached');

        // get a single case
        $this->fetchSingleCase($caseTypeId, 'images_attached', $casesReportedID);
    }

    /**
     * @method CasesGetProcessor audioCaseProcessor
     * @param int $caseTypeId
     * @param int $casesReportedID
     * @return void 
     */
    public function audioCaseProcessor($caseTypeId, $casesReportedID) : void
    {
        // get all
        if ($casesReportedID == 0) $this->fetchAllCases($caseTypeId, 'audio_attached');

        // get a single case
        $this->fetchSingleCase($caseTypeId, 'audio_attached', $casesReportedID);
    }

    /**
     * @method CasesGetProcessor videoCaseProcessor
     * @param int $caseTypeId
     * @param int $casesReportedID
     * @return void 
     */
    public function videoCaseProcessor($caseTypeId, $casesReportedID) : void
    {
        // get all
        if ($casesReportedID == 0) $this->fetchAllCases($caseTypeId, 'video_attached');

        // get a single case
        $this->fetchSingleCase($caseTypeId, 'video_attached', $casesReportedID);
    }
}