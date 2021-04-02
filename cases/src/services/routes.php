<?php

use Boame\Support\UploadToStorage;
use Lightroom\Packager\Moorexa\Router as Route;
use Boame\Support\VideoProcessor as VideoHandler;
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

    // assign case
    Route::post('assign', function(){
        return 'report/assign';
    });

    // case with an id
    Route::any('report/{type}/{id}', function($type, $id){
        return 'report/cases/' . $type . '/' . $id;
    });

    // get cases assigned
    Route::get('assigned/{id}', function($id){
        return 'report/assigned/' . $id;
    });

    // upload file
    Route::any('caseFile', function(){

        // @var mixed $class
        $class = new class() { 
            
            use UploadToStorage; 
        
            /**
             * @method UploadToStorage startUploadAndGetFileName
             * @return string
             */
            public function startUploadAndGetFileName() : string 
            {
                // @var array $options
                $options = ['oc','d','f','g','kk','mo'];

                // shuffle now
                shuffle($options);

                // upload now
                return $this->uploadFile($_FILES['file'], $options);
            }

            /**
             * @method UploadToStorage startVideoCompressionProcessAndGetArray
             * @return array
             */
            public function startVideoCompressionProcessAndGetArray() : array 
            {
                // load handler
                $videoHandler = new VideoHandler();

                // @var array $response
                $response = [];

                // attach video
                $videoHandler->uploadAndCompress($_FILES['video'], 

                // get the video name, duration and insert to db
                function(string $videoName, string $videoFrame, string $videoDuration) use (&$response)
                {
                    // load response
                    $response = [
                        'name'      => $videoName,
                        'poster'    => $videoFrame,
                        'duration'  => $videoDuration
                    ];
                });

                // return array
                return $response;
            }
        };

        if (isset($_FILES['file'])) :

            // check for file
            echo json_encode(['name' => $class->startUploadAndGetFileName()]);

        elseif (isset($_FILES['video'])):

            // manage video upload
            echo json_encode($class->startVideoCompressionProcessAndGetArray());

        endif;

        // destroy
        $class = null;
    });
});