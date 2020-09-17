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
    // request for articles or videos - allow read only
    Route::get('(videos|articles)', function($request){
        return ($request == 'articles') ? 'article/all' : 'video/all';
    });

    // request for a single article or video - allow read only
    Route::get('(video|article)/{id}', ['id' => '[0-9]+'], function($request, $id)
    {
        return ($request == 'article') ? 'article/view/' . $id : 'video/view/' . $id;
    });

    // check access right
    Moorexa\Middlewares\HasRights::checkPrivilege(function(){
        
        // delete article with an id
        Route::delete('article/{articleid}', ['articleid' => '[0-9]+'], function($articleid){
            return 'article/remove/' . $articleid;
        });

    });
    
});