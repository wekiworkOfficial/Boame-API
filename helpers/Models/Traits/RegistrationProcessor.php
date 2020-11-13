<?php
namespace Boame\Models\Traits;

use Boame\Support\UploadToStorage;
use function Lightroom\Database\Functions\{map, db}; 
/**
 * @package RegistrationProcessor
 * @author Amadi Ifeanyi <wekiwork.com> <amadiify.com>
 */
trait RegistrationProcessor
{
    use RegistrationHelper, UploadToStorage;

    /**
     * @var bool $registered
     */
    private $registered = false;

    /**
     * @method RegistrationProcessor reporterProcessor
     * @param mixed $filter 
     * @param int $accounttypeid
     * @return bool
     */
    private function reporterProcessor($filter, $accounttypeid) : bool
    {
        // load basic handler
        $this->processBasics($filter, $accounttypeid, function($status, &$data=[])
        {
            // can we create
            if ($status == 'create') $data['verified'] = 1;
             
            // are we good ?
            if ($status == 'complete') $this->registered = true;
        });

        // return default
        return $this->registered;
    }

    /**
     * @method RegistrationProcessor volunteerProcessor
     * @param mixed $filter 
     * @param int $accounttypeid
     * @return bool
     */
    private function volunteerProcessor($filter, $accounttypeid) : bool
    {
        // load basic handler
        $this->processBasics($filter, $accounttypeid, function($status, &$data=[], $other = []) use (&$filter)
        {    
            if ($status == 'create') :

                // upload display image
                $data['display_image'] = $this->uploadFile($filter->display_image, $data);

            endif;

            // are we good ?
            if ($status == 'complete') :

                // add volunteer
                db('volunteers')->insert([
                    'accountid'             => $other['accountid'],
                    'residential_address'   => $filter->residential_address,
                    'cv_address'            => $this->uploadFile($filter->cv, $data),
                    'biography'             => $filter->bio,
                    'date_created'          => time(),
                    'volunteerpositionid'   => $filter->volunteerpositionid
                ])->go();

                // all good
                $this->registered = true;

            endif;
            
        });

        // return default
        return $this->registered;
    }

    /**
     * @method RegistrationProcessor moderatorProcessor
     * @param mixed $filter 
     * @param int $accounttypeid
     * @return bool
     */
    private function moderatorProcessor($filter, $accounttypeid) : bool
    {
        // load basic handler
        $this->processBasics($filter, $accounttypeid, function($status, &$data=[]) use ($filter)
        {
            // can we create
            if ($status == 'create') : 

                // account verified
                $data['verified'] = 1;

                // added by
                $data['addedby'] = $filter->accountid;

                // upload display image
                $data['display_image'] = $this->uploadFile($filter->display_image, $data);

            endif;
             
            // are we good ?
            if ($status == 'complete') $this->registered = true;
        });

        // return default
        return $this->registered;
    }

    /**
     * @method RegistrationProcessor counsellorProcessor
     * @param mixed $filter 
     * @param int $accounttypeid
     * @return bool
     */
    private function counsellorProcessor($filter, $accounttypeid) : bool
    {
        // load basic handler
        $this->processBasics($filter, $accounttypeid, function($status, &$data=[]) use ($filter)
        {
            // can we create
            if ($status == 'create') : 

                // account verified
                $data['verified'] = 1;

                // added by
                $data['addedby'] = $filter->accountid;

                // upload display image
                $data['display_image'] = $this->uploadFile($filter->display_image, $data);
                
            endif;
             
            // are we good ?
            if ($status == 'complete') $this->registered = true;
        });

        // return default
        return $this->registered;
    }

    /**
     * @method RegistrationProcessor administratorProcessor
     * @param mixed $filter 
     * @param int $accounttypeid
     * @return bool
     */
    private function administratorProcessor($filter, $accounttypeid) : bool
    {
        // load basic handler
        $this->processBasics($filter, $accounttypeid, function($status, &$data=[]) use ($filter)
        {
            // can we create
            if ($status == 'create') : 

                // account verified
                $data['verified'] = 1;

                // added by
                $data['addedby'] = $filter->accountid;

                // upload display image
                $data['display_image'] = $this->uploadFile($filter->display_image, $data);
                
            endif;
             
            // are we good ?
            if ($status == 'complete') $this->registered = true;
        });

        // return default
        return $this->registered;
    }
}