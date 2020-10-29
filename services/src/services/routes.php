<?php

use Lightroom\Packager\Moorexa\Router as Route;
use function Lightroom\Requests\Functions\{session};
use function Lightroom\Database\Functions\{db, map};
/*
 ***************************
 * 
 * @ Route
 * info: Add your GET, POST, DELETE, PUT request handlers here. 
*/
Moorexa\Middlewares\Access::lockPermission(function()
{   
    // request for an account information - allow read only
    Route::get('account/{id}', ['id' => '[0-9]+'], function($request, $id)
    {
        return 'account/read/' . $id;
    });

    // request for a feedback submitted - allow read only
    Route::get('feedback/{id}', ['id' => '[0-9]+'], function($request, $id)
    {
        return 'feedback/home/' . $id;
    });

    // load configuration
    Route::get('/config', function()
    {
        // load configurations
        $config = map(db('configuration')->get('configurationid = ?', 1));

        // are we good ?
        if ($config->rows == 0) :

            // no config
            app('response')->error('No configuration settings found.');

        else:

            // got something
            app('response')->success(['config' => $config->row()]);

        endif;
    });
    
    // delete an account
    Route::resolvePost('account/delete', function()
    {
        return 'account/deleteAccount';
    },
    // resolver
    function($callback, $request)
    {
        // apply middleware
        $allow = Lightroom\Router\Middlewares::apply(Moorexa\Middlewares\HasRights::class, $request);

        // we good ?
        if ($allow) $callback();

    });
});