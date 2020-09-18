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
    // request for an account information - allow read only
    Route::get('account/{id}', ['id' => '[0-9]+'], function($request, $id)
    {
        return 'account/read/' . $id;
    });
    
});