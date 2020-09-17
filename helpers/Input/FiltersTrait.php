<?php
namespace Boame\Input;
/**
 * @package Boame Input FiltersTrait
 * @author Amadi Ifeanyi <wekiwork.com> <amadiify.com>
 */
trait FiltersTrait
{
    /**
     * @method FiltersInterface get
     * @param string $rule
     * @return array
     */
    public function get(string $rule, ...$args) : array 
    {
        // @var array $rule
        $rules = [];

        // @var string $method
        $method = lcfirst($rule) . 'Rule';

        // check if method exists
        if (method_exists($this, $method)) $rules = call_user_func_array([$this, $method], $args);

        // return array
        return $rules;
    }

    /**
     * @method FiltersInterface errors
     * @param array $filter
     * @return void
     */
    public function errors(...$filter) : void
    {
        // check for errors from $filter object
        foreach ($filter as $class) :

            // do we have errors to print
            if (!$class->isOk()) :

                // get the errors
                $allErrors = $class->getErrors();

                // set the status
                app('response')->error([
                    'total' => count($allErrors), 
                    'message' => 'You have an '.$this->filterCaller.' error',
                    'errors' => $allErrors
                ]);

                // stop
                break;

            endif;

        endforeach;
    }
}