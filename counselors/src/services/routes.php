<?php

use Lightroom\Packager\Moorexa\Router as Route;
use function Lightroom\Requests\Functions\{session};
/*
 ***************************
 * 
 * @ Route
 * info: Add your GET, POST, DELETE, PUT request handlers here. 
*/
Moorexa\Middlewares\Access::lockPermission(function()
{   
    // counselor with id
    Route::any('/{id}', ['id' => '[0-9]+'], function($id){
        return 'app/records/' . $id;
    });

    // get all cases
    Route::any('/cases/{id}', ['id' => '[0-9]+'], function($id){
        return 'app/cases/' . $id;
    });

    // approve a volunteer
    Route::resolvePost('/approve/{accountid}', ['accountid' => '[0-9]+'], function($accountid)
    {
        return 'records/approve/' . $accountid;
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