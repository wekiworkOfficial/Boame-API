<?php 
namespace Chat;

use function Lightroom\Database\Functions\{db, map};
/**
 * @package ChatDBQueries
 * @author Amadi Ifeanyi <amadiify.com>
 */
class ChatDBQueries
{   
    /**
     * @var string $connection
     */
    private static $connection = 'chatconnection';

    /**
     * @method ChatDBQueries logMessage
     * @param int $sender 
     * @param int $receiver 
     * @param string $message 
     * @return array
     */
    public static function logMessage($sender, $receiver, string $message) : array
    {
        // $message 
        $message = ['message' => $message, 'date' => time(), 'id' => 1];

        // get last id
        $connection2 = db()->pdo()->prepare('select * from chatconnection where accountid = :id and accountid2 = :id2');
        $connection2->execute([
            'id' => $receiver,
            'id2' => $sender
        ]);

        // next id
        $nextid = 1;

        // good ?
        if ($connection2->rowCount() > 0) :
            
            // fetch conversation
            $data = $connection2->fetch();

            // read conversation
            $conversation = unserialize(stripslashes($data['conversation']));

            if (count($conversation) > 0) :
                // get the last id
                $nextid = intval(array_pop($conversation)['id']) + 1;
            endif;

        endif;

        // @var array $record
        $record = [
            'allowed'       => 1,
            'conversation'  => serialize([$message]),
            'lastreplied'   => 0,
            'unread'        => 0
        ];

        // check if connection has been established before
        $connection = db()->pdo()->prepare('select * from chatconnection where accountid = :id and accountid2 = :id2');
        $connection->execute([
            'id'  => $sender,
            'id2' => $receiver
        ]);

        // added previously ?
        if ($connection->rowCount() > 0) :

            // fetch conversation
            $data = $connection->fetch();

            // is chat allowed
            if ($data['allowed'] == 1) :

                // read conversation
                $conversation = unserialize(stripslashes($data['conversation']));

                // update id
                $message['id'] = (count($conversation) > 0) ? intval(array_pop($conversation)['id']) + 1 : $message['id'];
                
                // read conversation
                $conversation = unserialize(stripslashes($data['conversation']));

                if ($nextid > $message['id']) :
                    $message['id'] = $nextid;
                elseif ($nextid == $message['id']) :
                    $message['id'] = ($nextid + 1);
                endif;

                // add new message
                $conversation[] = $message;

                // update record
                $record['conversation'] = serialize($conversation);

                // check next user
                $connection3 = db()->pdo()->prepare('select * from chatconnection where accountid = :id and accountid2 = :id2');
                $connection3->execute([
                    'id'  => $receiver,
                    'id2' => $sender
                ]);

                // run query
                db(self::$connection)->update($record, 'chatlistid = ?', $data['chatlistid'])->go();

                // are we good?
                if ($connection3->rowCount() > 0) :

                    // get record
                    $record = $connection3->fetch(FETCH_OBJ);
                
                    // update record
                    db(self::$connection)->update(['lastreplied' => $sender], 'chatlistid = :id', $record->chatlistid)->go();

                endif;

            endif;

        else:
            
            $record = array_merge($record, [
                'accountid'     => $sender,
                'accountid2'    => $receiver
            ]);

            if ($nextid > $message['id']) :
                $message['id'] = $nextid;
            elseif ($nextid == $message['id']) :
                $message['id'] = ($nextid + 1);
            endif;

            $record['conversation'] = serialize([$message]);
            
            // insert conversation
            db(self::$connection)->insert($record)->go();

        endif;

        // return array
        return Helper::getAccountInfo(Helper::timeAgo($message), $sender);
    }

    /**
     * @method ChatDBQueries getConversations
     * @param int $sender
     * @param int $receiver
     * @return array
     */
    public static function getConversations($sender, $receiver) : array
    {
        // @var array $conversations
        $conversations = [
            'outgoing' => [],
            'incoming' => []
        ];

        // get outgoing 
        $outgoing = db()->pdo()->prepare('select * from chatconnection where accountid = :id and accountid2 = :id2');
        $outgoing->execute([
            'id' => $sender,
            'id2' => $receiver
        ]);


        // so user has sent a message to recipent
        if ($outgoing->rowCount() > 0) :

            // load conversation
            $conversation = unserialize(stripslashes($outgoing->fetch()['conversation']));

            // add to conversations
            foreach ($conversation as $message) $conversations['outgoing'][] = Helper::timeAgo($message);

        endif;

        // get incoming 
        $incoming = db()->pdo()->prepare('select * from chatconnection where accountid = :id and accountid2 = :id2');
        $incoming->execute([
            'id' => $receiver,
            'id2' => $sender
        ]);

        // so user has received a message from a sender
        if ($incoming->rowCount() > 0) :

            // get result
            $result = $incoming->fetch();
            
            // fix result
            $result = is_array($result) ? $result : ['conversation' => serialize([])];

            // load conversation
            $conversation = unserialize(stripslashes($result['conversation']));

            // add to conversations
            foreach ($conversation as $message) $conversations['incoming'][] = Helper::timeAgo($message);
            
        endif;

        // update outgoing
        db(self::$connection)->update(['lastreplied' => 0], 'accountid = :id and accountid2 = :id2', $sender, $receiver)->go();

        // return array
        return $conversations;
    }

    /**
     * @method ChatDBQueries getChatList
     * @param int $accountid
     * @return array
     */
    public static function getChatList($accountid) : array
    {
        // @var mixed $conversations 
        $conversations = db(self::$connection)->get('accountid = ? or accountid2 = ?', $accountid, $accountid)->go();

        // @var array $chatList
        $chatList = [];

        // what do we have
        if ($conversations->rowCount() > 0) :

            // run through
            while ($row = $conversations->fetch(FETCH_OBJ)) :

                // not from me
                if ($row->accountid2 != $accountid) :

                    // check last replied
                    if ($row->lastreplied == $row->accountid2) :

                        // switch conversation
                        $recipent = db(self::$connection)->get('accountid = :id and accountid2 = :id2', $row->accountid2, $accountid)->go();

                        // do we have something??
                        if ($recipent->rowCount() > 0) :

                            // fetch 
                            $row->conversation = $recipent->fetch(FETCH_OBJ)->conversation;

                        endif;

                    endif;

                    self::pushToChatList($row->accountid2, $row, $chatList);

                endif;

                // not to me
                if ($row->accountid2 == $accountid && $row->accountid != $accountid) :

                    // // check last replied
                    // if ($row->lastreplied == $row->accountid) :

                    //     // switch conversation
                    //     $recipent = db(self::$connection)->get('accountid = :id and accountid2 = :id2', $accountid, $row->accountid)->go();

                    //     // do we have something??
                    //     if ($recipent->rowCount() > 0) :

                    //         // fetch 
                    //         $row->conversation = $recipent->fetch(FETCH_OBJ)->conversation;

                    //         self::pushToChatList($row->accountid, $row, $chatList, false);

                    //     endif;
                        

                    // endif;
                        
                    self::pushToChatList($row->accountid, $row, $chatList);

                endif;

                
            endwhile;

        endif;
        

        // return array
        return $chatList;
    }

    /**
     * @method ChatDBQueries addToChatList
     * @param int $sender
     * @param int $receiver
     */
    public static function addToChatList($sender, $receiver)
    {
        if ($sender != $receiver) :

            // @var array $data
            $data = ['accountid' => $sender, 'accountid2' => $receiver];

            // check database
            $table = db(self::$connection)->get($data)->go();

            // add data
            $data['conversation'] = serialize([]);

            // can we add
            if ($table->rowCount() == 0) db(self::$connection)->insert($data)->go();

        endif;
        
    }

    /**
     * @method ChatDBQueries getChat
     * @param int $sender
     * @param int $receiver
     * @return array
     */
    public static function getChat($sender, $receiver) : array
    {
        // @var mixed $conversations 
        $conversations = db(self::$connection)->get('accountid = ? and accountid2 = ?', $sender, $receiver)->go();

        // @var array $chat
        $chat = [];

        // what do we have
        if ($conversations->rowCount() > 0) :

            $record = $conversations->fetch(FETCH_ASSOC);

            // append dta
            $chat['accountid'] = $receiver;
            $chat['id'] = $record['chatlistid'];
            $chat['row'] = $record;

            // get image and merge data
            $chat = array_merge($chat, ChatImages::getPhoto($receiver));
            
            // add data 
            $chat = Helper::getAccountInfo($chat, $receiver);

        endif;

        // return array
        return $chat;
    }

    /**
     * @method ChatDBQueries
     * @param mixed $accountid
     * 
     * Fetch all counsellors except with id passed
     */
    public static function getCounsellors($accountid)
    {
        // @var object $counsellorType
        $counsellorType = map(db('account_types')->get('account_type = ?', 'Counsellor'));

        // get the counselor id
        if ($counsellorType->rows > 0) :

            // load counselors
            $counsellors = db('accounts')->get('accounttypeid = ?', $counsellorType->accounttypeid)->go();

            // are we good ??
            if ($counsellors->rowCount() > 0) return array_map(function($account){

                // is user online
                $auth = db('authentication')->get('accountid = ?', $account['accountid'])->go()->fetch(FETCH_OBJ);

                // isonline ??
                $account['isonline'] = $auth->isonline;

                // reeturn account
                return $account;

            }, $counsellors->fetchAll(FETCH_ASSOC));

        endif;

        // return empty array
        return [];
    }

    /**
     * @method ChatDBQueries recordAppUsuage
     * @return string
     */
    public static function recordAppUsuage()
    {
        // @var string $currentDay
        $currentDay = date('d');

        // get current week
        $currentWeek = ceil(intval($currentDay) / 7);

        // get the current year
        $year = date('Y');

        // get the month
        $month = date('m');

        // get the day of the week
        $dayOfTheWeek = strtolower(date('l'));

        // do we have something previously??
        $records = db('app_usage')->get('year = ? and month = ? and weekid = ?', $year, $month, $currentWeek)->go();

        // check now
        if ($records->rowCount() > 0) :

            // get row
            $row = $records->fetch(FETCH_ASSOC);

            // get current week count
            $row[$dayOfTheWeek] += 1;

            // update table
            db('app_usage')->update($row, 'app_usageid = ?', $row['app_usageid'])->go();

            // return row
            return $row;

        endif;

        // add new app usage
        $record = [
            'year'      => $year,
            'month'     => $month,
            'weekid'    => $currentWeek,
            'monday'    => 0,
            'tuesday'   => 0,
            'wednesday' => 0,
            'thursday'  => 0,
            'friday'    => 0,
            'saturday'  => 0,
            'sunday'    => 0
        ];

        // update count for week day
        $record[$dayOfTheWeek] += 1;

        // insert now
        db('app_usage')->insert($record)->go();

        // return array
        return $record;
    }

    /**
     * @method ChatDBQueries pushToChatList
     * @param int $accountid
     * @param object $row 
     * @param array $chatList
     * @return void 
     */
    private static function pushToChatList($accountid, $row, array &$chatList, bool $updateAgain = true)
    {
        // get the last chat
        $chat = unserialize(stripslashes($row->conversation));

        // add to chat list
        $chat = array_pop($chat);

        // manage chat
        $chat = is_array($chat) ? $chat : [];

        // get image and merge data
        $chat = array_merge($chat, ChatImages::getPhoto($accountid));

        if ($updateAgain) :
            // read and unread, last replied
            $chat['lastreplied'] = $row->lastreplied;
            $chat['unread'] = $row->unread;
        else:
            $chat['lastreplied'] = isset($chatList[$accountid]) && isset($chatList[$accountid]['lastreplied']) ? $chatList[$accountid]['lastreplied'] : $row->lastreplied;
            $chat['unread'] = $row->unread;
        endif;
        
        // add data 
        $chatList[$accountid] = Helper::getAccountInfo(Helper::timeAgo($chat), $accountid);
    }
}