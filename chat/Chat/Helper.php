<?php 
namespace Chat;

use function Lightroom\Database\Functions\{db};
/**
 * @package Helper
 */
class Helper
{
    /**
     * @method Helper timeAgo
     * @param array $data 
     * @return array
     */
    public static function timeAgo(array $data) : array 
    {
        if (isset($data['date'])) :

            // adjust time
            $data['date'] = func()->timeAgo($data['date']);

        endif;

        // return array
        return $data;
    }

    /**
     * @method Helper getAccountInfo
     * @param array $data 
     * @param int $accountid
     * @return array
     */
    public static function getAccountInfo(array $data, $accountid) : array
    {
        if (preg_match('/[\D]+/', $accountid) == false) :

            // get account info
            $account = db('accounts')->get('accountid = ?', $accountid)->go();

            // are we good 
            if ($account->rowCount() > 0) :

                // fetch info
                $account = $account->fetch(FETCH_ASSOC);

                // push to array
                $data['firstname'] = $account['firstname'];
                $data['lastname'] = $account['lastname'];

            endif;

        else:

            $data['firstname'] = 'Annonymus';
            $data['lastname'] = substr($accountid, 0, 5);

        endif;

        // return data
        return $data;
    }
}