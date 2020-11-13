<?php
namespace Chat;

use function Lightroom\Database\Functions\{db};
use Chat\ChatDBQueries as Query;
use Lightroom\Socket\Interfaces\SocketListenerInterface;
/**
 * @package Connections
 * @author Amadi Ifeanyi <amadiify.com>
 */
class Connections implements SocketListenerInterface
{
    /**
     * @var array $connections
     */
    private static $connections = [];

    /**
     * @var mixed $io
     */
    private static $io;

    /**
     * @var array $activities
     */
    private static $activities = [];

    /**
     * @method SocketListenerInterface emit
     * @param string $event
     * @param array $config
     * This would emit an event from the socket server when something happens
     */
    public static function emit(string $event, array $config = [])
    {
        // @var mixed $socket
        $socket = $config['connection'];

        // @var mixed $server 
        self::$io = $config['data'];
        
        // message sent
        $socket->on('message', function($data) use ($socket){

            self::debug('message', $data);

            // read object
            $data = json_decode($data);

            // log message to database
            $message = Query::logMessage($data->accountid, $data->sendTo, $data->message);

            // send a message
            $socket->broadcast->emit('message', json_encode([
                'from'  => $data->accountid,
                'to'    => $data->sendTo,
                'data'  => $message
            ]));

        });

        // when the client emits 'typing', we broadcast it to others
        $socket->on('typing', function ($data) use ($socket) {
            $socket->broadcast->emit('typing', $data);
        });

        // when the client emits 'stop typing', we broadcast it to others
        $socket->on('stop typing', function ($data) use ($socket) {
            $socket->broadcast->emit('stop typing', $data);
        });

        // get chat list
        $socket->on('my-chat-list', function($data) use ($socket){

            self::debug('my-chat-list', $data);

            // read json
            $data = json_decode($data);
 
            // find all
            $chatList = ChatDBQueries::getChatList($data->accountid);

            // check online status
            foreach ($chatList as $accountid => $data) :

                // not online
                $chatList[$accountid]['signal'] = 'offline';

                // is online ?
                if (isset(self::$activities[$accountid])) $chatList[$accountid]['signal'] = 'online';

            endforeach;

            // send list
            self::reply($socket, 'my-chat-list', json_encode(['chats' => $chatList]));
        });

        // get conversations for a chat
        $socket->on('my conversations', function($data) use ($socket){

            self::debug('my conversations', $data);

            // read object
            $data = json_decode($data);

            // load conversations
            $conversations = Query::getConversations($data->sender, $data->receiver);

            // send conversations
            self::reply($socket, 'my conversations', json_encode(['conversations' => $conversations]));
        });

        // get counsellors
        $socket->on('get counsellors', function($accountid) use ($socket){

            self::debug('get counsellors', $accountid);

            // load counselors
            $counselors = Query::getCounsellors($accountid);

            // send conversations
            self::reply($socket, 'get counsellors', json_encode(['counsellors' => $counselors]));
        });

        // add to chat list
        $socket->on('request chat', function($data) use ($socket){

            self::debug('request chat', $data);

            // get object
            $data = json_decode($data);

            // add now
            Query::addToChatList($data->sender, $data->receiver);

            // all good
            self::reply($socket, 'request chat', 'all good!');
        });

        // disconnected
        $socket->on('disconnect', function($e) use ($socket){
            echo 'ID \''.$socket->id.'\' disconnected', "IP: " . $e->getRemoteIp(), "\n";
        });

        // auto start chat
        $socket->on('auto start chat', function($data) use ($socket){

            self::debug('auto start chat', $data);

            // read object
            $data = json_decode($data);

            // get chat 
            $chat = ChatDBQueries::getChat($data->sender, $data->receiver);

            // not online
            $chat['signal'] = 'offline';

            // is online ?
            if (isset(self::$activities[$data->receiver])) $chat['signal'] = 'online';

            // emit
            self::reply($socket, 'auto start chat', json_encode(['chat' => $chat]));

        });

        // online
        $socket->on('now online', function($data) use ($socket){

            self::debug('now online', $data);

            // broadcast
            $socket->broadcast->emit('now online', $data);

            // read data
            $data = json_decode($data);

            // update table
            if (preg_match('/[\D]+/', $data->accountid) == false) db('authentication')->update(['isonline' => 1], 'accountid = ?', $data->accountid)->go();

            // now online
            self::$activities[$data->accountid] = time();

        });

        // check if a user is online
        $socket->on('is online', function($accountid) use ($socket){

            self::debug('is online', $accountid);

            // response
            $response = ['status' => 'offline', 'accountid' => $accountid];

            // check if user exists
            if (isset(self::$activities[$accountid])) $response['status'] = 'online';

            // return 
            self::reply($socket, 'is online', json_encode($response));
        });

        // offline
        $socket->on('now offline', function($data) use ($socket){

            self::debug('now offline', $data);

            // broadcast
            $socket->broadcast->emit('now offline', $data);

            // read data
            $data = json_decode($data);

            // update table
            if (preg_match('/[\D]+/', $data->accountid) == false) db('authentication')->update(['isonline' => 0], 'accountid = ?', $data->accountid)->go();

            // remove data
            unset(self::$activities[$data->accountid]);
            
        });

        // new app usage
        $socket->on('app in use', function() use ($socket){

            // record usuage
            $data = ChatDBQueries::recordAppUsuage();

            // broadcast
            $socket->broadcast->emit('app in use', json_encode($data));
        });

        // service was requested
        $socket->on('service was requested', function($data){

            // read data
            $data = json_decode($data);

            // build insert data
            $rowData = [
                'nav_tag'       => $data->service,
                'accountid'     => $data->accountid,
                'date_created'  => mktime(0,0,0,intval(date('m')),intval(date('d')),intval(date('Y'))),
                'device_hash'   => $data->device_hash
            ];

            // add if not exists
            if (db('services_requested')->get($rowData)->go()->rowCount() == 0) db('services_requested')->insert($rowData)->go();

        });

        // a case has been assigned
        $socket->on('case assigned', function($data) use ($socket){
            // broadcast
            $socket->broadcast->emit('case assigned', $data);
        });

        // a case has been submitted
        $socket->on('case submitted', function($data) use ($socket){
            // broadcast
            $socket->broadcast->emit('case submitted', $data);
        });
    }   

    /**
     * @method Connections reply
     * @param mixed $socket
     * @param string $event
     * @param mixed $data
     */
    private static function reply($socket, string $event, $data)
    {
        // emit reply back to a user
        self::$io->to($socket->id)->emit($event, $data);
    }

    /**
     * @method SocketListenerInterface events
     * This method should register all your events to be listened for by the emit method
     * @return array
     */
    public static function events() : array
    {

    }

    /**
     * @method Connections debug
     * @param string $event 
     * @param mixed $data 
     */
    public static function debug(string $event, $data)
    {
        //fwrite(STDOUT, 'Event Fired: "' . $event . '", data :' . $data . PHP_EOL);
    }
}