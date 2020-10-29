<?php 
namespace Chat;

use function Lightroom\Database\Functions\{db,map};
/**
 * @package ChatImages
 * @author Amadi Ifeanyi <amadiify.com>
 */
class ChatImages
{
    /**
     * @method ChatImages getPhoto
     * @param int $accountid
     */
    public static function getPhoto($accountid)
    {
        // @var array $data
        $data['display_image'] = 'generic_avatar.png';

        if (preg_match('/[0-9]+/', $accountid)) :

            // check accounts
            $account = map(db('accounts')->get('accountid=?', $accountid));

            // manage photo
            if ($account->rows > 0) $data['display_image'] = $account->display_image == null ? $data['display_image'] : $account->display_image;

        endif;

        // return array
        return $data;
    }
}