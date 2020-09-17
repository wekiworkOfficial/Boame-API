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

        // get the duration
        $duration = $ffprobe->format($video['tmp_name'])->get('duration');

        // start FFMpeg
        $ffmpeg = \FFMpeg\FFMpeg::create();

        // open video
        $clip = $ffmpeg->open($video['tmp_name']);

        // get video frame name
        $frameName = Salts::generate($video['tmp_name'] . $video['name'] . (time() * mt_rand(1,20))) . '.jpg';

        // get the video name
        $videoName = Salts::generate($video['tmp_name'] . $video['name'] . (time() * mt_rand(1,20))) . '.mp4';

        // generate frame
        $clip->frame(\FFMpeg\Coordinate\TimeCode::fromSeconds(10))
        ->save($this->uploadDir . '/' . $frameName);

        // get dimension
        $dimensions = $ffprobe->streams($video['tmp_name'])->videos()->first()->getDimensions();

        // @var int $width
        $width = $dimensions->getWidth();

        // @var int $height
        $height = $dimensions->getHeight();

        // save to
        $dir = $this->uploadDir . '/' . $videoName;

        // @var array $data 
        $data = ['dir' => $dir];

        // upload video
        $videUploaded = $this->uploadFile($video, $data);

        // get fullpath
        $videUploaded = $this->uploadDir . '/' . $videUploaded;

        // run queue
        QueueHandler::sendTask('process-video', function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system("ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}");
            else:
                // convert to mp4
                system("ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}");
            endif;

        });
        
    }
}