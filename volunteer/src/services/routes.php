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
    // volunteer with id
    Route::any('/{id}', ['id' => '[0-9]+'], function($id){
        return 'records/home/' . $id;
    });

    // sort volunteers by the position they occupy
    Route::any('/sort/{id}', ['id' => '[0-9]+'], function($id){
        return 'records/sort/' . $id;
    });

    // return all positions
    Route::any('/positions', function(){
        return 'records/positions';
    });
    
});