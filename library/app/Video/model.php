<?php
use Lightroom\Packager\Moorexa\MVC\Model;

/**
 * @package Model Http Request Manager
 * @author Amadi Ifeanyi <amadiify.com>
 * 
 * A simple request manager for our model or api endpoints.
 * In this file, you can listen for incoming http request on an endpoint, channel to a specific model for processing,
 * or switch model method on the fly for a particular reason.
 */

// example one
Model::http_request('delete', 'remove', function(string $method, string $view)
{
    // load model with this method
    $this->setMethod('deleteVideo'); 

}); 