<?php
namespace Moorexa\Framework\Auth\Models;

use Closure;
use Lightroom\Packager\Moorexa\{
    MVC\Model, Interfaces\ModelInterface
};
/**
 * Account model class auto generated.
 *
 *@package Auth Account Model
 *@author Amadi Ifeanyi <amadiify.com>
 **/

class Account extends Model
{
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
     * @method Account postResetPassword
     * 
     */
    public function postResetPassword()
    {
        var_dump(40);
    }
}