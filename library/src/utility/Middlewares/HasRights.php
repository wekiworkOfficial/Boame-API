<?php
namespace Moorexa\Middlewares;

use Closure;
use Lightroom\Router\Interfaces\MiddlewareInterface;
/**
 * @package HasRights Middleware
 * @author  Moorexa inc.
 */

class HasRights implements MiddlewareInterface
{
    /**
     * @method HasRights request 
     * @param Closure $render
     * @return void
     * 
     * This method holds the waiting request, call render to move request to the top of the call stack.
     **/
    function request(Closure $render) : void
    {
        
    }

    /**
     * @method HasRights requestClosed
     * @return void
     * 
     * This method would be called when request has been closed.
     **/
    function requestClosed() : void
    {
        // what would you like to do here?
    }

    // #cool stuffs down here
}