<?php
namespace Moorexa\Framework\Models;

use Closure;
use Lightroom\Packager\Moorexa\{
    MVC\Model, Interfaces\ModelInterface
};
use Lightroom\Database\LightQuery;
use Boame\Support\{UploadToStorage, QueryHelper, VideoProcessor as VideoHandler};
use function Lightroom\Database\Functions\{map, db};
use function Lightroom\Requests\Functions\{headers};
/**
 * VideoProcessor model class auto generated.
 *
 *@package Article VideoProcessor Model
 *@author Amadi Ifeanyi <amadiify.com>
 **/

class VideoProcessor extends Model
{
    use UploadToStorage, QueryHelper, LightQuery;

    /**
     * @var array $defaultResponse
     */
    private $defaultResponse = [];

    /**
     * @method ModelInterface onModelInit
     * @param ModelInterface $model
     * @param Closure $next
     * @return void
     */
    public function onModelInit(ModelInterface $model, Closure $next) : void 
    {
        // call closure
        $next();
    }

    /**
     * @method VideoProcessor postCreate
     * @return void
     * 
     * Submit a video
     */
    public function postCreate() : void
    {
        // allow html
        env_set('bootstrap/filter-input', false);

        // apply filter
        $data = filter('POST', app('filter')->get('video'));

        // are we good ?
        if ($data->isOk()) :

            // set the table
            $this->setTable('videos_published');

            // check if video hasn't been published before
            if ($this->rows('video_title = ?', $data->video_title) == 0) :

                // exclude video
                $exceptVideo = $data->except('video');

                // load handler
                $videoHandler = new VideoHandler();

                // attach video
                $videoHandler->uploadAndCompress($data->video, 

                // get the video name, duration and insert to db
                function(string $videoName, string $videoFrame, int $videoDuration) use ($data)
                {
                    // attach video
                    $attachment = [
                        'video_address'     => $videoName,
                        'total_views'       => 0,
                        'total_likes'       => 0,
                        'video_caption'     => base64_encode($data->video_caption),
                        'date_created'      => time(),
                        'video_frame'       => $videoFrame
                    ];

                    // get videoAttachedId
                    $videoAttachedId = map(db('video_attached')->insert($attachment))->id;

                    // build data
                    $record = [
                        'video_title'        => $data->video_title,
                        'accountid'          => $data->accountid,
                        'video_length'       => $videoDuration,
                        'date_created'       => $attachment['date_created'],
                        'videoattachedid'    => $videoAttachedId
                    ];

                    // can we create
                    if ($this->add($record)) app('response')->success('Your video has been submitted successfully.');

                });

                // failed
                app('response')->error('Could not submit video at this time, please try again.');

            endif;

            // video exists
            app('response')->error('Sorry! This video exists. Please change the caption');

        endif;

        // handle error
        app('filter')->errors($data);
    } 
}