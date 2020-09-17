<?php
namespace Boame\Input\Interfaces;
/**
 * @package Boame Input FiltersInterface
 * @author Amadi Ifeanyi <wekiwork.com> <amadiify.com>
 */
interface FiltersInterface
{
    /**
     * @method FiltersInterface get
     * @param string $rule
     * @return array
     */
    public function get(string $rule) : array;

    /**
     * @method FiltersInterface errors
     * @param array $filter
     * @return void
     */
    public function errors(...$filter) : void;
}