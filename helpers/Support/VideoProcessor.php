<?php 
namespace Boame\Support;

use Closure;
use Boame\Security\Salts;
use Lightroom\Queues\QueueHandler;
/**
 * @package Support VideoProcessor
 * @author Amadi Ifeanyi <amadiify.com> <wekiwork.com>
 */
class VideoProcessor
{
    use UploadToStorage;

    /**
     * @method VideoProcessor uploadAndCompress
     * @param array $video
     * @param Closure $callback
     * @return void
     */
    public function uploadAndCompress(array $video, Closure $callback) 
    {
        // load FFProbe
        $ffprobe = \FFMpeg\FFProbe::create();

        // upload file
        $fullPath = $this->uploadDir . '/' . $video['name'];

        // get video frame name
        $frameName = Salts::generate($fullPath . (time() * mt_rand(1,20))) . '.jpg';

        // get the video name
        $videoName = Salts::generate($fullPath . (time() * mt_rand(1,20))) . '.mp4';

        // set base duration
        $duration = 1;

        // try upload file
        if (move_uploaded_file($video['tmp_name'], $fullPath) == true) :

            try
            {
                // get the duration
                $duration = $ffprobe->format($fullPath)->get('duration');

                // start FFMpeg
                $ffmpeg = \FFMpeg\FFMpeg::create();

                // open video
                $clip = $ffmpeg->open($fullPath);

                file_put_contents(__DIR__ . '/log.txt', 'file uploaded');

                // generate frame
                $clip->frame(\FFMpeg\Coordinate\TimeCode::fromSeconds(10))
                ->save($this->uploadDir . '/' . $frameName);

                // get dimension
                $dimensions = $ffprobe->streams($fullPath)->videos()->first()->getDimensions();

                // @var int $width
                $width = $dimensions->getWidth();

                // @var int $height
                $height = $dimensions->getHeight();

                // set new name
                $dir = $this->uploadDir . '/' . $videoName;

                // run queue
                QueueHandler::sendTask('process-video-' . $videoName, function() use ($width, $dir, $height, $fullPath)
                {
                    // run compression
                    if ($width > 854 || $height > 480) :
                        // reduce resolution
                        system("ffmpeg -i {$fullPath} -s 854x480 {$dir}; rm -rf {$fullPath};");
                    else:
                        // convert to mp4
                        system("ffmpeg -i {$fullPath} {$dir}; rm -rf {$fullPath};");
                    endif;

                });

            }
            catch(\Throwable $exception)
            {
                $videoName = $video['name'];
            }

        endif;

        // load callback function
        call_user_func($callback, $videoName, $frameName, $duration);
        
    }

    /**
     * @method VideoProcessor deleteUpload
     * @param DBPromise $videoAttached
     * @return void
     */
    public function deleteUpload($videoAttached) : void 
    {
        // get the frame image
        $frameImage = $this->uploadDir . '/' . $videoAttached->video_frame_address;

        // get the video
        $videoAddress = $this->uploadDir . '/' . $videoAttached->video_address;

        // try delete frame
        if (file_exists($frameImage)) unlink($frameImage);

        // try delete video
        if (file_exists($videoAddress)) unlink($videoAddress);
    }
}