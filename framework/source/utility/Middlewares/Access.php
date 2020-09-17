<?php
namespace Moorexa\Middlewares;

use Closure;
use Lightroom\Router\Middlewares;
use Lightroom\Packager\Moorexa\Router as Route;
use Lightroom\Router\Interfaces\MiddlewareInterface;
use function Lightroom\Requests\Functions\{headers};
/**
 * @package Access Middleware
 * @author  Moorexa inc.
 * 
 * This class would check for authorization header only
 */

class Access implements MiddlewareInterface
{
    /**
     * @method Access request 
     * @param Closure $render
     * @return void
     * 
     * This method holds the waiting request, call render to move request to the top of the call stack.
     **/
    function request(Closure $render) : void
    {
        if ($this->hasPermission()) $render();
    }

    /**
     * @method Access requestClosed
     * @return void
     * 
     * This method would be called when request has been closed.
     **/
    function requestClosed() : void
    {
        // what would you like to do here?
    }

    /**
     * @method Access hasPermission
     * @return bool
     */
    function hasPermission() : bool 
    {
        if (headers()->has('x-authorization-token')) :
            
            // check for token validity
            if (headers()->get('x-authorization-token') == fdb()->get('default.authorization')) return true;

            //invalid token
            app('response')->error('Invalid authorization token.');
            
        endif;

        // no authorization header sent
        app('response')->error(['message' => 'No authorization header sent.', 'header' => 'x-authorization-token']);

        // return false
        return false;
    }

    /**
     * @method Access lockPermission
     * @return void
     */
    static function lockPermission(Closure $callback = null) : void 
    {
        Route::any('*', function(array $request) use (&$callback)
        {
            // apply middleware
            $ready = func()->trueOnly([
                // check for authorization token before allowing access to 
                // our application
                Middlewares::apply(static::class, $request)
            ]);

            // are we good ?
            if ($ready) :
                
                // callback sent
                // load callback
                if ($callback !== null) call_user_func($callback);

                // render
                return Route::next(implode('/', $request));

            endif;
        
        });
    }
}