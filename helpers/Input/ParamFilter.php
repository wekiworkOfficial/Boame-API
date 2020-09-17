<?php
namespace Boame\Input;
/**
 * @package Boame Param Filters
 * @author Amadi Ifeanyi <wekiwork.com> <amadiify.com>
 */
trait ParamFilter
{
    /**
     * @method ParamFilter safeParam
     * @param array $param
     */
    public function safeParam(array $param)
    {
        // @var object $rules
        $rules = fdb()->get('default.param rules')->results();

        // create filter case
        $filter = [
            'data' => [],
            'rules' => []
        ];

        // param index
        $paramIndex = 0;

        // add to cases
        foreach ($param as $filterType => $value) :

            // get unquie name
            $dataName = $filterType . $paramIndex;

            // add to filter
            $filter['data'][$dataName] = $value;

            // add to rules
            $filter['rules'][$dataName] = $rules->{$filterType};

            // increment index
            $paramIndex++;

        endforeach;

        // apply filter
        $filter = filter($filter['data'], $filter['rules']);

        // change caller
        if (!$filter->isOk()) $this->filterCaller = 'invalid parameter[s], which resulted to an';

        // return filter
        return $filter;
    }
}