<?php
namespace Moorexa\Framework\Feedback\Models;

use Closure;
use Lightroom\Packager\Moorexa\{
    MVC\Model, Interfaces\ModelInterface
};
use Boame\Support\QueryHelper;
use function Lightroom\Database\Functions\{map, db};
/**
 * FeedbackProcessor model class auto generated.
 *
 *@package Feedback FeedbackProcessor Model
 *@author Amadi Ifeanyi <amadiify.com>
 **/

class FeedbackProcessor extends Model
{
    use QueryHelper;

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
     * @method FeedbackProcessor postFeedback
     * @return mixed
     */
    public function postFeedback()
    {
        // apply filter
        $data = filter('POST', app('filter')->get('feedback'));

        // are we good ?
        if ($data->isOk()) :

            // check if feedback has been added previously
            $feedback = map(db('feedbacks')->get('feedback = ? and fullname = ?', $data->feedback, $data->fullname));

            // created previously ?
            if ($feedback->rows > 0) return app('response')->error('Feedback previously submitted. Cannot repeat action.');

            // submit now
            if (map(db('feedbacks')->insert([
                'accountid'     => $data->accountid,
                'devicehash'    => $data->devicehash,
                'fullname'      => $data->fullname,
                'email'         => $data->email,
                'feedback'      => $data->feedback,
                'date_created'  => time()
            ]))->ok) app('response')->success('Feedback submitted successfully');

        endif;

        // handle error
        app('filter')->errors($data);
    }

    /**
     * @method FeedbackProcessor getFeedback
     * @param int $feedbackId
     * @return mixed
     */
    public function getFeedback($feedbackId=0)
    {
        // get all feedbacks
        if ($feedbackId == 0) return $this->getAllFeedbacks();

        // validate id
        $data = app("filter")->safeParam(['number' => $feedbackId]);

        // are we good ?
        if ($data->isOk()) :

            // check if feeedback exists
            $feedback = map(db('feedbacks')->get('feedbackid = ?', $feedbackId));

            // are we good ?
            if ($feedback->rows == 0) return app('response')->error('The feedback you are requesting for does not exists.');
 
            // return feedback 
            app('response')->success(['feedbacks' => $feedback->row()]);

        endif;

        // handle error
        app('filter')->errors($data);
    }

    /**
     * @method FeedbackProcessor getAllFeedbacks
     * @return mixed
     */
    public function getAllFeedbacks()
    {
        // get all
        $feedbacks = map(db('feedbacks')
        ->get()->orderBy('feedbackid', 'desc')->if(true, function($query) { $this->addFetchQueryLimits($query); }));

        // @var array $allFeedbacks
        $allFeedbacks = [];

        // fetch all
        $feedbacks->obj(function($feedback) use (&$allFeedbacks)
        {
            // get feedback 
            $feedback = $feedback->row();

            // get the account information
            $feedback->account = '';

            // check now
            if ($feedback->accountid != 0) :

                // get account
                $account = map(db('accounts')->get('accountid = ?', $feedback->accountid));

                // set
                $feedback->account = ucwords($account->firstname . ' ' . $account->lastname);
                
            endif;

            // send outside
            $allFeedbacks[] = $feedback;

        });

        // share 
        app('response')->success(['feedbacks' => $allFeedbacks]);
    }
}