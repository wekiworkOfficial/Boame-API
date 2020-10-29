<?php
namespace Boame\Input;

use function Lightroom\Functions\GlobalVariables\{var_get};
/**
 * @package Boame Input Filters
 * @author Amadi Ifeanyi <wekiwork.com> <amadiify.com>
 */
class Filters implements Interfaces\FiltersInterface
{
    /**
     * @var string $filterCaller
     */
    private $filterCaller = 'input';

    // load traits
    use FiltersTrait, ParamFilter;

    /**
     * @method Filters counsellorRegisterRule
     * @return array 
     */
    private function counsellorRegisterRule() : array
    {
        return [
            'firstname'         => 'required|string|min:2|notag',
            'lastname'          => 'required|string|min:2|notag',
            'email'             => 'required|email|min:10|notag',
            'telephone'         => 'required|number|min:7|notag',
            'password'          => 'required|min:4|notag',
            'password_again'    => 'required|min:4|notag',
            'accountid'         => 'required|number|min:1',
            'gender'            => 'required|string|min:2',
            'display_image'     => 'required|file|filetype:png,jpg,jpeg',
        ];
    }

    /**
     * @method Filters moderatorRegisterRule
     * @return array 
     */
    private function moderatorRegisterRule() : array
    {
        return [
            'firstname'         => 'required|string|min:2|notag',
            'lastname'          => 'required|string|min:2|notag',
            'email'             => 'required|email|min:10|notag',
            'telephone'         => 'required|number|min:7|notag',
            'password'          => 'required|min:4|notag',
            'password_again'    => 'required|min:4|notag',
            'accountid'         => 'required|number|min:1',
        ];
    }

    /**
     * @method Filters administratorRegisterRule
     * @return array 
     */
    private function administratorRegisterRule() : array
    {
        return [
            'firstname'         => 'required|string|min:2|notag',
            'lastname'          => 'required|string|min:2|notag',
            'email'             => 'required|email|min:10|notag',
            'telephone'         => 'required|number|min:7|notag',
            'password'          => 'required|min:4|notag',
            'password_again'    => 'required|min:4|notag',
            'accountid'         => 'required|number|min:1',
        ];
    }

    /**
     * @method Filters reporterRegisterRule
     * @return array 
     */
    private function reporterRegisterRule() : array
    {
        return [
            'firstname'         => 'required|string|min:2|notag',
            'lastname'          => 'required|string|min:2|notag',
            'email'             => 'required|email|min:10|notag',
            'telephone'         => 'required|number|min:7|notag',
            'password'          => 'required|min:4|notag',
            'password_again'    => 'required|min:4|notag',
            'gender'            => 'required|min:2|notag|string',
        ];
    }

    /**
     * @method Filters volunteerRegisterRule
     * @return array 
     */
    private function volunteerRegisterRule() : array
    {
        return [
            'firstname'             => 'required|string|min:2|notag',
            'lastname'              => 'required|string|min:2|notag',
            'email'                 => 'required|email|min:10|notag',
            'telephone'             => 'required|number|min:7|notag',
            'password'              => 'required|min:4|notag',
            'password_again'        => 'required|min:4|notag',
            'gender'                => 'required|min:2|notag|string',
            'volunteerpositionid'   => 'required|number|min:1',
            'residential_address'   => 'required|notag|min:3',
            'bio'                   => 'required|notag|min:1',
            'cv'                    => 'required|file|filetype:doc,docx,pdf,png,jpg,jpeg',
            'display_image'         => 'required|file|filetype:png,jpg,jpeg',
        ];
    }

    /**
     * @method Filters reportCaseTextRule
     * @return array 
     */
    private function reportCaseTextRule() : array
    {
        return [
            'accountid'     => ['required|number|min:1|notag', 0],
            'devicehash'    => 'required|string|min:2|notag',
            'report'        => 'required|min:10|notag',
            'case_images'   => 'required|file|file_multiple|filetype:jpg,jpeg,png,gif'
        ];
    }

    /**
     * @method Filters reportCaseAudioRule
     * @return array 
     */
    private function reportCaseAudioRule() : array
    {
        return [
            'accountid'     => ['required|number|min:1|notag', 0],
            'devicehash'    => 'required|string|min:2|notag',
            'report'        => 'notag',
            'audio'         => 'required|file|filetype:aiff,mp3,wav,aac,ogg,wma,flac,alac,wma,m4a,audio/mp4'
        ];
    }

    /**
     * @method Filters reportCaseVideoRule
     * @return array 
     */
    private function reportCaseVideoRule() : array
    {
        return [
            'accountid'     => ['required|number|min:1|notag', 0],
            'devicehash'    => 'required|string|min:2|notag',
            'report'        => 'notag',
            'video'         => 'required|file|filetype:3gp,ogg,mp4,m4v,f4v,f4a,m4b,m4r,f4b,mov,video/mp4,wmv,webm,flv,avi'
        ];
    }

    /**
     * @method Filters articleRule
     * @return array 
     */
    private function articleRule() : array
    {
        return [
            'accountid'     => ['required|number|min:1|notag', var_get('accountid', 0)],
            'article_title' => 'required|string|min:5|notag',
            'article_text'  => 'required|min:10',
            'article_image' => 'required|file|filetype:png,jpg,jpeg'
        ];
    }

    /**
     * @method Filters articleEditRule
     * @return array 
     */
    private function articleEditRule(string $image) : array
    {
        // create file
        if (!isset($_FILES['article_image'])) $_FILES['article_image'] = [
            'name' => $image,
            'type' => 'image/png'
        ];

        // return rules
        return [
            'articleid'     => 'required|number|min:1|notag',
            'article_title' => 'required|string|min:5|notag',
            'article_text'  => 'required|min:10',
            'article_image' => 'required|file|filetype:png,jpg,jpeg'
        ];
    }

    /**
     * @method Filters videoRule
     * @return array 
     */
    private function videoRule() : array
    {
        return [
            'accountid'     => ['required|number|min:1|notag', var_get('accountid', 0)],
            'video_title'   => 'required|string|min:5|notag',
            'video_caption' => 'required|min:10',
            'video'         => 'required|file|filetype:3gp,ogg,mp4,m4v,f4v,f4a,m4b,m4r,f4b,mov,video/mp4,wmv,webm,flv,avi'
        ];
    }

    /**
     * @method Filters videoEditRule
     * @return array 
     */
    private function videoEditRule(string $video_address) : array
    {
        // create file
        if (!isset($_FILES['video'])) $_FILES['video'] = [
            'name' => $video_address,
            'type' => 'video/mp4'
        ];

        return [
            'accountid'     => ['required|number|min:1|notag', var_get('accountid', 0)],
            'video_title'   => 'required|string|min:5|notag',
            'video_caption' => 'required|min:10',
            'video'         => 'required|file|filetype:3gp,ogg,mp4,m4v,f4v,f4a,m4b,m4r,f4b,mov,video/mp4,wmv,webm,flv,avi'
        ];
    }

    /**
     * @method Filters feedbackRule
     * @return array 
     */
    private function feedbackRule() : array
    {
        return [
            'accountid'     => ['required|number|min:1|notag', 0],
            'devicehash'    => 'required|string|min:2|notag',
            'fullname'      => 'required|string|min:5|notag',
            'email'         => 'required|email|min:10|notag',
            'feedback'      => 'required|notag'
        ];
    }

    /**
     * @method Filters loginRule
     * @return array 
     */
    private function loginRule() : array
    {
        return [
            'platformid'    => 'required|number|min:1',
            'username'      => 'required|min:5|notag',
            'password'      => 'required|min:4',
        ];
    }

    /**
     * @method Filters passwordResetRule
     * @return array 
     */
    private function passwordResetRule() : array
    {
        return [
            'username'          => 'required|min:5|notag',
            'password'          => 'required|min:4',
            'password_again'    => 'required|min:4',
        ];
    }

    /**
     * @method Filters completePasswordResetRule
     * @return array 
     */
    private function completePasswordResetRule() : array
    {
        return [
            'username'          => 'required|min:5|notag',
            'reset_code'        => 'required|min:4|number',
        ];
    }

    /**
     * @method Filters approveVolunteerRule
     * @return array 
     */
    private function approveVolunteerRule() : array
    {
        return [
            'comment'      => 'required|min:5|notag',
        ];
    }
}