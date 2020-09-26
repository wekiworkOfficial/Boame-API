<?php
namespace Boame\Events;

use Closure;
use Lightroom\Queues\Interfaces\CallbackInterface;
use function Lightroom\Database\Functions\{map, db};
/**
 * @package Events QueueListener
 * @author Amadi Ifeanyi <amadiify.com> <wekiwork.com>
 */
class QueueListener implements CallbackInterface
{
    /**
     * @method CallbackInterface taskSent
     * @param string $taskName 
     * @param string $taskBody
     * @return void
     */
    public function taskSent(string $taskName, string $taskBody) : void
    {
        // add to database
        db('jobs')->insert([
            'job_name'      => $taskName,
            'job_body'      => $taskBody,
            'job_status'    => 'pending',
            'time_queued'   => time()
        ])->go();
    }

    /**
     * @method CallbackInterface taskReceived
     * @param string $taskName 
     * @param Closure $closureFunction
     * @return void
     */
    public function taskReceived(string $taskName, Closure $closureFunction) : void
    {
        // on process
        $job = map(db('jobs')->get('job_name = ? and job_status = ?', $taskName, 'pending'));

        // check if job exists
        if ($job->rows > 0) $job->update(['job_status' => 'processing']);
    }

    /**
     * @method CallbackInterface taskComplete
     * @param string $taskName 
     * @param mixed $returnVal
     * @return void
     */
    public function taskComplete(string $taskName, $returnVal) : void
    {
        // on process
        $job = map(db('jobs')->get('job_name = ? and job_status = ? or job_status = ?', $taskName, 'pending', 'processing')->limit(0,1));

        // check if job exists
        if ($job->rows > 0) $job->update(['job_status' => 'complete', 'time_completed' => time()]);
    }
}