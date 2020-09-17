<?php
namespace Moorexa\Framework;

use Lightroom\Packager\Moorexa\MVC\Controller;

/**
 * Documentation for Auth Page can be found in Auth/readme.txt
 *
 *@package      Auth Page
 *@author       Moorexa <www.moorexa.com>
 *@author       Amadi Ifeanyi <amadiify.com>
 **/

class Auth extends Controller
{
    /**
    * @method Auth home
    *
    * See documentation https://www.moorexa.com/doc/controller
    *
    * You can catch params sent through the $_GET request
    * @return void
    **/

    public function home() : void 
    {
        app('screen')->render([
            'status' => 'success',
            'message' => 'route works!'
        ]);
    }


    /**
    * @method Auth login
    *
    * See documentation https://www.moorexa.com/doc/controller
    *
    * You can catch params sent through the $_GET request
    * @return void
    **/
    public function login() : void
    {
        app('screen')->render([
            'status' => 'success',
            'message' => 'route works!'
        ]);
    }

    /**
    * @method Auth resetPassword
    *
    * See documentation https://www.moorexa.com/doc/controller
    *
    * You can catch params sent through the $_GET request
    * @return void
    **/
    public function resetPassword(Auth\Models\Account $account) : void
    {
        app('screen')->render(['status' => 'success', 'message' => 'route works!']);
    }

    /**
    * @method Auth register
    *
    * See documentation https://www.moorexa.com/doc/controller
    *
    * You can catch params sent through the $_GET request
    * @return void
    **/
    public function register(\Boame\Models\Auth $auth) : void
    {
        app('screen')->render(['status' => 'success', 'message' => 'route works!']);
    }
}
// END class