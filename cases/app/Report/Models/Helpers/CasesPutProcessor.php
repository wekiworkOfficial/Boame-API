<?php
namespace Moorexa\Framework\Report\Models\Helpers;

use Boame\Support\UploadToStorage;
use Boame\Support\VideoProcessor as VideoHandler;
use function Lightroom\Database\Functions\{map, db};

/**
 * @package Helpers CasesPutProcessor
 * @author Amadi Ifeanyi <wekiwork.com> <amadiify.com>
 */
trait CasesPutProcessor
{
    use UploadToStorage;

    /**
     * @var bool $processed
     */
    private $processed = false;

    /**
     * @method CasesProcessor textCaseProcessor
     * @param mixed $filter
     * @param int $caseTypeId
     * @return bool
     */
    public function textCaseProcessor($filter, int $caseTypeId) : bool 
    {
        // @var array $data
        $data = [
            'casetypeid'    => $caseTypeId,
            'accountid'     => $filter->accountid,
            'devicehash'    => $filter->devicehash,
            'case_text'     => $filter->report,
            'date_created'  => time()
        ];

        // submit case
        $case = map(db('cases_reported')->insert($data));

        // are we good ?
        $this->processed = ($case->ok == true) ? true : false;

        // attach images
        $files = $this->uploadMultipleFiles($filter->case_images, $data);

        // add now
        if ($case->id !== null) :

            // add images
            foreach($files as $file) db('images_attached')->insert([
                'casesreportedid'   => $case->id,
                'image_address'     => $file,
                'date_created'      => time()
            ])->go(); 

        endif;

        // return (true|false)
        return $this->processed;
    }

    /**
     * @method CasesProcessor audioCaseProcessor
     * @param mixed $filter
     * @param int $caseTypeId
     * @return bool
     */
    public function audioCaseProcessor($filter, int $caseTypeId) : bool 
    {
        // @var array $data
        $data = [
            'casetypeid'    => $caseTypeId,
            'accountid'     => $filter->accountid,
            'devicehash'    => $filter->devicehash,
            'case_text'     => $filter->report,
            'date_created'  => time(),
        ];

        // submit case
        $case = map(db('cases_reported')->insert($data));

        // add now
        if ($case->id !== null) :

            // are we good ?
            $this->processed = ($case->ok == true) ? true : false;

            // attach audio
            db('audio_attached')->insert([
                'casesreportedid'   => $case->id,
                'audio_address'     => $this->uploadFile($filter->audio, $data),
                'date_created'      => time(),
                'total_listen'      => 0
            ])->go();

        endif;

        // return (true|false)
        return $this->processed;
    }

    /**
     * @method CasesProcessor videoCaseProcessor
     * @param mixed $filter
     * @param int $caseTypeId
     * @return bool
     */
    public function videoCaseProcessor($filter, int $caseTypeId) : bool 
    {
        // @var array $data
        $data = [
            'casetypeid'    => $caseTypeId,
            'accountid'     => $filter->accountid,
            'devicehash'    => $filter->devicehash,
            'case_text'     => $filter->report,
            'date_created'  => time(),
        ];

        // submit case
        $case = map(db('cases_reported')->insert($data));

        // add now
        if ($case->id !== null) :

            // are we good ?
            $this->processed = ($case->ok == true) ? true : false;

            // load handler
            $videoHandler = new VideoHandler();

            // attach video
            $videoHandler->uploadAndCompress($filter->video, 

            // get the video name, duration and insert to db
            function(string $videoName, string $videoFrame, int $videoDuration) use ($case)
            {
                // attach video
                db('video_attached')->insert([
                    'casesreportedid'       => $case->id,
                    'video_address'         => $videoName,
                    'date_created'          => time(),
                    'total_views'           => 0,
                    'total_likes'           => 0,
                    'total_dislikes'        => 0,
                    'video_frame_address'   => $videoFrame
                ])->go();

            });

        endif;

        // return (true|false)
        return $this->processed;
    }
}
