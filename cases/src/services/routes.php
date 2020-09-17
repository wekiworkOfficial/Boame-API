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
    // case with no id
    Route::any('report/{type}', function($type){
        return 'report/cases/'.$type;
    });

    // case with an id
    Route::any('report/{type}/{id}', function($type, $id){
        return 'report/cases/' . $type . '/' . $id;
    });
});