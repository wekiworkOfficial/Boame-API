<?php
namespace Boame\Messaging;

use Messaging\Mail;
use Lightroom\Queues\QueueHandler;
/**
 * @package Messaging Email
 * @author Amadi Ifeanyi <wekiwork.com> <amadiify.com>
 */
class Emails
{
    /**
     * @method Emails sendResetMail
     * @param promise $account
     * @param int $resetCode
     * @return void
     */
    public static function sendResetMail($account, $resetCode)
    {
        // get user info
        $userInfo = $account->row();
        
        // get mail instance
        $mail = new Mail();

        // set the subject
        $mail->subject('BOAME Password Reset');

        // set from
        $mail->from(fdb()->get('default.email-from'));

        // set to
        $mail->to($userInfo->email);

        // get reset template
        $template = fdb()->get('default.password-reset-template');

        // replace code
        $template = str_replace('{code}', $resetCode, $template);

        // replace name
        $template = str_replace('{name}', ucwords($userInfo->firstname . ' ' . $userInfo->lastname), $template);

        // set the mail body
        $mail->html($template);

        // send now
        $mail->send();
    }

    /**
     * @method Emails sendCaseAssignEmail
     * @param promise $account
     * @return void
     */
    public static function sendCaseAssignEmail($account)
    {
        // get user info
        $userInfo = $account->row();
        
        // get mail instance
        $mail = new Mail();

        // set the subject
        $mail->subject('New Case Assigned');

        // set from
        $mail->from(fdb()->get('default.email-from'));

        // set to
        $mail->to($userInfo->email);

        // get reset template
        $template = fdb()->get('default.case-assigned-template');
        
        // replace name
        $template = str_replace('{name}', ucwords($userInfo->firstname . ' ' . $userInfo->lastname), $template);

        // set the mail body
        $mail->html($template);

        // send now
        $mail->send();
    }


    // use queue
    private static function useQueue($account, $resetCode)
    {
        // get user info
        $userInfo = $account->row();

        // send mail
        QueueHandler::sendTask(substr('send-mail-to-'.$account->email, 0, 250), function() use ($userInfo, $resetCode)
        {
            // get mail instance
            $mail = new Mail();

            // set the subject
            $mail->subject('BOAME Password Reset');

            // set from
            $mail->from(fdb()->get('default.email-from'));

            // set to
            $mail->to($userInfo->email);

            // get reset template
            $template = fdb()->get('default.password-reset-template');

            // replace code
            $template = str_replace('{code}', $resetCode, $template);

            // replace name
            $template = str_replace('{name}', ucwords($userInfo->firstname . ' ' . $userInfo->lastname), $template);

            // set the mail body
            $mail->html($template);

            // send now
            $mail->send();
            
        });
    }
}