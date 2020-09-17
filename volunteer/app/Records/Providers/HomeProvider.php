<?php
namespace Moorexa\Framework\Records\Providers;

use Closure;
use Moorexa\Framework\Records\Models\Volunteers;
use Lightroom\Packager\Moorexa\Interfaces\ViewProviderInterface;
/**
 * @package Home View Page Provider
 * @author Moorexa <moorexa.com>
 */

class HomeProvider implements ViewProviderInterface
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
     * @method HomeProvider show 
     * @param Volunteers $model
     * @return void
     */
    public function show(Volunteers $model) : void { }
}