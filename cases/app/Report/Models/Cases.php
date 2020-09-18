<?php
namespace Moorexa\Framework\Report\Models;

use Closure;
use Lightroom\Packager\Moorexa\{
    MVC\Model, Interfaces\ModelInterface
};
use function Lightroom\Database\Functions\{db, map};
/**
 * Cases model class auto generated.
 *
 *@package Report Cases Model
 *@author Amadi Ifeanyi <amadiify.com>
 **/

class Cases extends Model
{
    use Helpers\CasesHelper;
    
    /**
     * @var const DO_NOT_RUN_CASE_FILTER
     */
    const DO_NOT_RUN_CASE_FILTER = false;

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
     * @method Cases putCases
     * @param string $caseType
     * @return void 
     * 
     * Submit a case
     * 
     * #####
     * Ensure to set REQUEST_METHOD = PUT
     */
    public function putCases($caseType) 
    {
        // filter param
        $data = app('filter')->safeParam(['string' => $caseType]);

        // is param safe??
        if ($data->isOk()) :

            // can we continue
            if ($this->isCaseTypeValid($caseType, $data, true, $caseTypeDb)) :

                // @var annonymus $putClass
                $putClass = new class() { use Helpers\CasesPutProcessor; };

                // load case processor
                $processor = $caseType . 'CaseProcessor';

                // does processor exists
                if (method_exists($putClass, $processor)) :

                    // are we good ?
                    if ($putClass->{$processor}($data, $caseTypeDb->primary())) app('response')->success('Your case submission was successful');

                    // failed
                    app('response')->error('Your case submission was not successful');

                endif;

                // no processor found
                app('response')->error('We are currently not processing report for such case');

            endif;

        endif;

        // manage filter errors
        app('filter')->errors($data);
    }

    /**
     * @method Cases getCases
     * @param string $caseType
     * @param int $casesreportedid
     */
    public function getCases($caseType, $casesReportedID=0)
    {
        // filter param
        $data = app('filter')->safeParam(['string' => $caseType, 'number' => $casesReportedID]);

        // is param safe??
        if ($data->isOk()) :

            // can we continue
            if (($caseTypeId = $this->isCaseTypeValid($caseType, $data, self::DO_NOT_RUN_CASE_FILTER)) !== false) :

                // @var annonymus $getClass
                $getClass = new class() { use Helpers\CasesGetProcessor; };

                // load case processor
                $processor = $caseType . 'CaseProcessor';

                // does processor exists
                if (method_exists($getClass, $processor)) :

                    // call method
                    return $getClass->{$processor}($caseTypeId, $casesReportedID);

                endif;

                // no processor found
                app('response')->error('We currently do not have any report for such a case');

            endif;

        endif;

        // manage filter errors
        app('filter')->errors($data);

    }
}