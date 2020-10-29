<?php
namespace Moorexa\Framework;

use Lightroom\Packager\Moorexa\MVC\Controller;

/**
 * Documentation for Account Page can be found in Account/readme.txt
 *
 *@package      Account Page
 *@author       Moorexa <www.moorexa.com>
 *@author       Amadi Ifeanyi <amadiify.com>
 **/

class Account extends Controller
{
    /**
    * @method Account read
    *
    * See documentation https://www.moorexa.com/doc/controller
    *
    * You can catch params sent through the $_GET request
    * @return void
    **/

    public function read() : void 
    {
        
    }


    /**
    * @method Account update
    *
    * See documentation https://www.moorexa.com/doc/controller
    *
    * You can catch params sent through the $_GET request
    * @return void
    **/
    public function update() : void
    {
        
    }

    /**
    * @method Account deleteAccount
    *
    * See documentation https://www.moorexa.com/doc/controller
    *
    * You can catch params sent through the $_GET request
    * @return void
    **/
    public function deleteAccount() : void
    {
        app('screen')->render(['status' => 'success', 'message' => 'route works!']);
    }
}
// END class