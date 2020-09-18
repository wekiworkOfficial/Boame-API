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
     * @method VideoProcessor getReactions
     * @param string $type
     * @param int $videoAttachedId
     */
    public function getReactions($type, $videoAttachedId)
    {
        // validate param
        $data = app('filter')->safeParam(['number' => $videoAttachedId, 'string' => $type]);

        // are we good ?
        if ($data->isOk()) :

            // check if video exists
            $video = map(db('video_attached')->get('videoattachedid = ?', $videoAttachedId));

            // are we good ?
            if ($video->rows == 0) return app('response')->error([
                'message' => 'Could not find published video.', 
                'hint' => 'Ensure you are /{id} is a primary key of video_attached'
            ]);

            // get record
            $record = $video->row();

            // @var string $message
            $message = '';

            // type of reaction
            switch ($type) :

                // like
                case 'like':
                    // increment likes
                    $record->total_likes = (intval($record->total_likes) + 1);

                    // update table
                    $video->update(['total_likes' => $record->total_likes]);

                    // set message
                    $message = 'Your like has been recorded.';
                break;

                // dislike
                case 'dislike':
                    // increment dislikes
                    $record->total_dislikes = (intval($record->total_dislikes) + 1);

                    // update table
                    $video->update(['total_dislikes' => $record->total_dislikes]);
                    
                    // set message
                    $message = 'Your dislike has been recorded.';
                break;

            endswitch;

            // all good 
            app('response')->success(['message' => $message, 'video' => $record]);

        endif;

        // handle error
        app('filter')->errors($data);
    }

    /**
     * @method VideoProcessor getAll
     * @return void
     * 
     * Get all videos
     */
    public function getAll() : void
    {
        // make query
        $videos = db('videos_published')->if(true, function($query)
        {
            // check for accountid
            if (headers()->has('x-account-id')) return $query->get('accountid = ?', headers()->get('x-account-id'));

            // just fetch
            $query->get();

            // add order
            $query->orderBy('videospublishedid', 'desc');

        })->if(true, function($query){ $this->addFetchQueryLimits($query); })->go();

        // fetch results
        if ($videos->rowCount() > 0) app('response')->success(['videos' => array_map(function($video)
        {
            // return object
            return $this->getVideoAttachmentsAndFullname($video);

        }, $videos->fetchAll(FETCH_OBJ))]);

        // no result found
        app('response')->error('No video published.');
    }

    /**
     * @method VideoProcessor getView
     * @param int $videoId
     * @return void 
     * 
     * Fetch video by its ID
     */
    public function getView($videoId)
    {
        // filter param
        $param = app('filter')->safeParam(['number' => $videoId]);

        // are we good ?
        if ($param->isOk()) :

            // check if video exists
            $video = map(db('videos_published')->get('videospublishedid = ?', $videoId));

            // get record
            if ($video->rows > 0) :
            
                // get the result
                $result = $video->row();

                // check video_attached table
                $record = map(db('video_attached')->get('videoattachedid = ?', $result->videoattachedid));

                // Update view count
                $views = intval($record->total_views) + 1;

                // update article
                $record->update(['total_views' => $views]);

                // show result
                app('response')->success(array_merge(['videos' => $this->getVideoAttachmentsAndFullname($result)], $this->defaultResponse));

            endif;

            // no video
            app('response')->error('No published video with this ID');

        endif;

        // has error
        app('filter')->errors($param);
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
                function(string $videoName, string $videoFrame, string $videoDuration) use ($data)
                {
                    // attach video
                    $attachment = [
                        'video_address'         => $videoName,
                        'total_views'           => 0,
                        'total_likes'           => 0,
                        'total_dislikes'        => 0,
                        'video_caption'         => base64_encode($data->video_caption),
                        'date_created'          => time(),
                        'video_frame_address'   => $videoFrame
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

    /**
     * @method VideoProcessor postEdit
     * @param int $videoId
     * @return void
     */
    public function postEdit($videoId) : void 
    {
        // validate id
        $data = app('filter')->safeParam(['number' => $videoId]);

        // are we good
        if ($data->isOk()) :

            // check if video exists
            $video = map(db('videos_published')->get('videospublishedid = ?', $videoId));

            // are we good ?
            if ($video->rows > 0) :

                // allow html
                env_set('bootstrap/filter-input', false);

                // get the video address
                $videoAttached = $video->from('video_attached', 'videoattachedid')->get();

                // apply filter
                $data = filter('POST', app('filter')->get('videoEdit', $videoAttached->video_address));

                // we good ?
                if ($data->isOk()) :

                    // load handler
                    $videoHandler = new VideoHandler();

                    // update with default
                    if (!isset($data->video['tmp_name'])) :

                        // update video published
                        db('videos_published')->update(['video_title' => $data->video_title], 'videospublishedid = ?', $videoId)->go();

                        // update video attached
                        db('video_attached')->update([
                            'video_caption' => base64_encode($data->video_caption)], 
                            'videoattachedid = ?', $videoAttached->videoattachedid
                        )->go();

                    else:

                        // upload video and delete old video
                        $videoHandler->uploadAndCompress($data->video, 

                        // get the video name, duration and insert to db
                        function(string $videoName, string $videoFrame, string $videoDuration) use ($data, $videoAttached, $video, $videoHandler)
                        {
                            // delete the old video
                            $videoHandler->deleteVideo($videoAttached);

                            // update video published
                            db('videos_published')->update([
                                'video_title'  => $data->video_title, 
                                'video_length' => $videoDuration],
                            'videospublishedid = ?', $video->videospublishedid);

                            // update video attached
                            db('video_attached')->update([
                                'video_caption'         => base64_encode($data->video_caption),
                                'video_address'         => $videoName,
                                'video_frame_address'   => $videoFrame
                            ], 'videoattachedid = ?', $videoAttached->videoattachedid);

                            // all good
                            app('response')->success('Your published video has been updated successfully.');
                        });

                    endif;

                    // all good
                    app('response')->success('Your published video has been updated successfully.');

                endif;

            else:

                // not found
                app('response')->error('Article requested for, does not exists.');

            endif;

        endif;

        // handle error
        app('filter')->errors($data);
    }

    /**
     * @method VideoProcessor deleteVideo
     * @param int $videoId
     * @return void
     */
    public function deleteVideo($videoId) : void 
    {
        // validate id
        $data = app('filter')->safeParam(['number' => $videoId]);

        // are we good
        if ($data->isOk()) :

            // check if video exists
            $video = map(db('videos_published')->get('videospublishedid = ?', $videoId));

            // are we good ?
            if ($video->rows > 0) :

                // get attachment
                $attachment = map(db('video_attached')->get('videoattachedid = ?', $video->videoattachedid));

                // has attachment
                if ($attachment->rows > 0) :

                    // try to remove from storage
                    $uploads = [
                        HOME . '../uploads/' . $attachment->video_frame_address,
                        HOME . '../uploads/' . $attachment->video_address
                    ];

                    // if it exists then delete
                    foreach($uploads as $path) if (file_exists($path)) unlink($path);

                    // remove attachment
                    $attachment->pop();

                endif;

                // run delete
                if ($video->pop()) app('response')->success('Video has been unpublished successfully.');

            endif;
            
            // not found
            app('response')->error('The video you are trying to delete does not exists');

        endif;

        // handle error
        app('filter')->errors($data);
    }

    /**
     * @method VideoProcessor getVideoAttachmentsAndFullname
     * @param object $video
     * @return object
     */
    private function getVideoAttachmentsAndFullname(object $video) : object
    {
        // check video_attached table
        $record = db('video_attached')->get('videoattachedid = ?', $video->videoattachedid)->go();

        // set the attachment
        $video->attachment = [];

        // do we have something
        if ($record->rowCount() > 0) :

            // get record
            $record = $record->fetch(FETCH_OBJ);

            // decode caption
            $record->video_caption = base64_decode($record->video_caption);

            // fetch row
            $video->attachment = $record;

            // who published it
            $account = db('accounts')->get('accountid = ?', $video->accountid)->go();

            // add
            $video->submittedby = '';

            // load from account
            if ($account->rowCount() > 0) :

                // get the first and last name
                $account = $account->fetch(FETCH_OBJ);
                
                // update
                $video->submittedby = ucfirst($account->firstname) . ' ' . ucfirst($account->lastname);

            endif;

        endif;

        // return video
        return $video;
    }
}