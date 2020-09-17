<?php
namespace Boame\Models;

use Closure;
use Lightroom\Packager\Moorexa\{
    MVC\Model, Interfaces\ModelInterface
};
use Lightroom\Database\LightQuery as Query;
use function Lightroom\Database\Functions\{db, map};
/**
 * Auth model class auto generated.
 *
 *@package Auth Helper Model
 *@author Amadi Ifeanyi <amadiify.com>
 **/

class Auth extends Model
{
    use Query, Traits\RegistrationProcessor;

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
     * @method Auth postRegister
     * @param string $accountType
     */
    public function postRegister($accountType)
    {
        // filter param
        $data = app('filter')->safeParam(['string' => $accountType]);

        // is param safe??
        if ($data->isOk()) :

            // check if account exists
            $account = map(db('account_types')->get('account_type = ?', $accountType));

            // hmmm, not really
            if ($account->rows == 0) return app('response')->error('Invalid account type');

            // check the required fields
            $data = filter('POST', app('filter')->get($accountType . 'Register'));

            // can we continue
            if ($data->isOk()) :

                // load registration processor
                $processor = $accountType . 'Processor';

                // does processor exists
                if (method_exists($this, $processor)) :
                    
                    // are we good ?
                    if ($this->{$processor}($data, $account->accounttypeid)) app('response')->success('Your registration was successful');

                    // failed
                    app('response')->error('Your registration was not successful');

                endif;

                // no processor found
                app('response')->error('We are currently not processing registration for a ' . $accountType);

            endif;
        
        endif;

        // manage filter errors
        app('filter')->errors($data);
    }
}