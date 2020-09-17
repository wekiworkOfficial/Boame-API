<?php
namespace Moorexa\Framework;

use Lightroom\Packager\Moorexa\MVC\Controller;

/**
 * Documentation for Records Page can be found in Records/readme.txt
 *
 *@package      Records Page
 *@author       Moorexa <www.moorexa.com>
 *@author       Amadi Ifeanyi <amadiify.com>
 **/

class Records extends Controller
{
    /**
    * @method Records home
    *
    * See documentation https://www.moorexa.com/doc/controller
    *
    * You can catch params sent through the $_GET request
    * @return void
    **/

    public function home(Records\Providers\HomeProvider $provider) : void 
    {
        
    }

    /**
    * @method Records sort
    *
    * See documentation https://www.moorexa.com/doc/controller
    *
    * You can catch params sent through the $_GET request
    * @return void
    **/
    public function sort(Records\Models\Volunteers $model) : void
    {
        
    }

    /**
    * @method Records positions
    *
    * See documentation https://www.moorexa.com/doc/controller
    *
    * You can catch params sent through the $_GET request
    * @return void
    **/
    public function positions(Records\Models\Volunteers $model) : void
    {
        
    }
}
// END class