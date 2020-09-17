<?php
namespace Moorexa\Middlewares;

use Closure;
use Lightroom\Router\Middlewares;
use Lightroom\Packager\Moorexa\Router as Route;
use function Lightroom\Requests\Functions\{headers};
use Lightroom\Router\Interfaces\MiddlewareInterface;
use function Lightroom\Database\Functions\{map, db};
use function Lightroom\Functions\GlobalVariables\{var_set};
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
        $this->checkPermission($render);
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

    /**
     * @method HasRights checkPrivilege
     * @param Closure $callback
     */
    static function checkPrivilege(Closure $callback) : void 
    {
        // check request
        Route::any('*', function(array $requests) use ($callback)
        {
            // load middleware
            $hasPermission = Middlewares::apply(static::class, $requests);

            // are we good ?
            if ($hasPermission) :

                // callback sent
                // load callback
                if ($callback !== null) call_user_func($callback);

                // render
                return Route::next(implode('/', $requests));

            endif;

        });
    }

    /**
     * @method HasRights checkPermission
     * @param Closure $render *ref
     * @return void 
     */
    private function checkPermission(Closure &$callback)
    {
        // check for auth token
        $this->hasAuthToken(function($user) use (&$callback)
        {
            // check for platform
            $this->hasRequestPlatform(function($platformId) use (&$callback, $user)
            {
                // check for request action
                $this->hasRequestAction(function($privilege, $navTagName) use ($user, &$callback, $platformId)
                {
                    // load callback
                    $this->hasEnoughPermissionThenLoadCallback([
                        'privilege'     => $privilege,
                        'navTagName'    => $navTagName,
                        'user'          => $user,
                        'platformId'    => $platformId
                    ], 
                    function($navigation, $permissionId) use (&$callback)
                    {
                        // get record
                        $record = $navigation->fetch(FETCH_OBJ);

                        // split the permissionid
                        $permission = explode(',', $record->permissionid);

                        // does user have such permission
                        if (array_search($permissionId, $permission) > 0) return call_user_func($callback);

                        // no permission
                        app('response')->error('You don\'t have enough permission to continue');
                    });
                });
            });
        });
    }

    /**
     * @method HasRights hasAuthToken
     * @param Closure $callback
     */
    private function hasAuthToken(Closure $callback)
    {
        // check for x-auth-token
        if (headers()->has('x-auth-token')) :

            // get the token 
            $token = headers()->get('x-auth-token');

            // get user
            $user = db('authentication')->get('token = ?', $token)->go();

            // check if token is valid
            if ($user->rowCount() > 0) return call_user_func($callback, $user);

            // not authenticated
            app('response')->error('You are not authenticated to make this request.');
        
        endif;

        // no auth token
        app('response')->error(['message' => 'Missing required Request Header.', 'header' => 'x-auth-token']);
    }

    /**
     * @method HasRights hasRequestAction
     * @param Closure $callback
     */
    private function hasRequestAction(Closure $callback)
    {
        // check for x-request-action
        if (headers()->has('x-request-action')) :

            // get the request action
            $action = headers()->get('x-request-action');

            // get the navigation tag and the action used
            $request = explode('/', $action);

            // has privilege
            if (!isset($request[1])) return app('response')->error(['message' => 'Missing privilege in x-request-action', 'format' => 'tag-name/(create|update|edit|delete|...)']);

            // check for privilege
            $privilege = db('permissions')->get('privilege = ?', $request[1])->go();

            // are we good
            if ($privilege->rowCount() > 0) return call_user_func($callback, $privilege, $request[0]);

            // failed
            app('response')->error('Invalid privilege type "'.$request[1].'"');

        endif;

        // no request action
        app('response')->error(['message' => 'Missing required Request Header.', 'header' => 'x-request-action']);
    }

    /**
     * @method HasRights hasRequestPlatform
     * @param  Closure $callback
     */
    private function hasRequestPlatform(Closure $callback)
    {
        // check for x-request-platform
        if (headers()->has('x-request-platform')) :

            // get the request platform
            $platform = headers()->get('x-request-platform');

            // get the platform id
            $query = db('platforms')->get('platform_name = ?', $platform)->go();

            // are we good ?
            if ($query->rowCount() > 0) :

                // get the platform id
                return call_user_func($callback, $query->fetch(FETCH_OBJ)->platformid);

            endif;

            // failed
            app('response')->error('Unknown platform "'.$platform.'"');

        endif;

        // failed
        app('response')->error(['message' => 'Missing required Request Header.', 'header' => 'x-request-platform']);
    }

    /**
     * @method HasRights hasEnoughPermissionThenLoadCallback
     * @param array $params
     * @param Closure $callback
     * @return mixed
     */
    private function hasEnoughPermissionThenLoadCallback(array $params, Closure $callback) 
    {
        // read params
        $params = (object) $params;

        // get the permission id
        $permissionId = $params->privilege->fetch(FETCH_OBJ)->permissionid;

        // get the account id
        $accountid = $params->user->fetch(FETCH_OBJ)->accountid;

        // get the accountTypeId
        $accountTypeId = db('accounts')
        ->get('accountid = ?', $accountid)
        ->go()->fetch(FETCH_OBJ)->accounttypeid;

        // set the accountid 
        var_set('accountid', $accountid);

        // check if navigation exists
        $navigation = db('navigation')
        ->get('nav_tag = ? and accounttypeid = ? and platformid = ?', $params->navTagName, $accountTypeId, $params->platformId)
        ->go();

        // are we good 
        if ($navigation->rowCount() > 0) return call_user_func($callback, $navigation, $permissionId);

        // failed
        app('response')->error('Invalid navigation tag "'.$navTagName.'" or you don\'t have access to this platform');
        
    }
}