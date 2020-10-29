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

            // get the last replied feedback
            $replies = db('feedback_replies')
            ->get('feedbackid = ?', $feedbackId)
            ->orderBy('feedbackreplyid', 'desc')
            ->limit(0,1)->go();

            // get row
            $row = $feedback->row();

            // create dummy
            $row->last_reply = '';

            // check from replies
            if ($replies->rowCount() > 0) :

                // get reply
                $reply = $replies->fetch(FETCH_OBJ); 

                // update replies
                $row->last_reply = 'Anonnymus';

                // check accountid
                if ($reply->accountid != 0) :

                    // get account
                    $account = map(db('accounts')->get('accountid = ?', $reply->accountid));

                    // update last reply
                    $row->last_reply = ucwords($account->lastname . ' ' . $account->firstname);
                    
                endif;

            endif;
 
            // return feedback 
            app('response')->success(['feedbacks' => $row]);

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

            // get the last replied feedback
            $replies = db('feedback_replies')
            ->get('feedbackid = ?', $feedback->feedbackid)
            ->orderBy('feedbackreplyid', 'desc')
            ->limit(0,1)->go();

            // create dummy
            $feedback->last_reply = '';

            // check from replies
            if ($replies->rowCount() > 0) :

                // get reply
                $reply = $replies->fetch(FETCH_OBJ); 

                // update replies
                $feedback->last_reply = 'Anonnymus';

                // check accountid
                if ($reply->accountid != 0) :

                    // get account
                    $account = map(db('accounts')->get('accountid = ?', $reply->accountid));

                    // update last reply
                    $feedback->last_reply = ucwords($account->lastname . ' ' . $account->firstname);

                endif;

            endif;

            // send outside
            $allFeedbacks[] = $feedback;

        });

        // share 
        app('response')->success(['feedbacks' => $allFeedbacks]);
    }

    /**
     * @method FeedbackProcessor postReply
     * @param int $feedbackId
     * @return mixed
     */
    public function postReply($feedbackId = 0)
    {
        if ($feedbackId == 0) return app('response')->error('Invalid FeedbackID passed.');

        // check if feedback exists
        $feedback = map(db('feedbacks')->get('feedbackid = ?', $feedbackId));

        // are we good ??
        if ($feedback->rows == 0) return app('response')->error('Invalid FeedbackID. Couldn\'t find record.');

        // get required
        $input = filter('POST', [
            'feedback'      => 'required|notag|min:2',
            'accountid'     => ['required|number', 0],
            'device_hash'   => ['required|notag', 'NONE']
        ]);

        // are we good ??
        if ($input->isOk()) :

            // add now
            if (db('feedback_replies')->insert(array_merge($input->data(), ['date_created' => time(), 'feedbackid' => $feedbackId]))->go()) app('response')->success('Feedback Reply submitted successfully.');

            // not good ??
            app('response')->error('Could not submit feedback reply. Please try again later or contact support');

        endif;

        // handle error
        app('filter')->errors($input);
    }

    /**
     * @method FeedbackProcessor getReply
     * @param int $feedbackId
     * @return mixed
     */ 
    public function getReply($feedbackId = 0)
    {
        if ($feedbackId == 0) return app('response')->error('Invalid FeedbackID passed.');

        // check if feedback exists
        $feedback = map(db('feedback_replies')->get('feedbackid = ?', $feedbackId)->orderBy('feedbackreplyid', 'desc'));

        // are we good ??
        if ($feedback->rows == 0) return app('response')->error('No Feedbacks for this FeedbackID.');

        // get feedbacks
        $feedbacks = [];

        // run through
        $feedback->obj(function($row) use (&$feedbacks){

            // get row
            $feedback = $row->row();

            // add account
            $feedback->account = null;

            // make request
            if ($feedback->accountid != 0) $feedback->account = $row->from('accounts', 'accountid')->get()->row();

            // push now
            $feedbacks[] = $feedback;

        });

        // print result
        app('response')->success(['replies' => $feedbacks]);
    }
}