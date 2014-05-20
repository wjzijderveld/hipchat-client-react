<?php

namespace MainlyCode\HipChat;

use MainlyCode\Xmpp\Connection as BaseConnection;
use MainlyCode\Xmpp\JabberId;

class Connection extends BaseConnection
{
    /**
     * @param JabberId $jabberId
     * @param string   $nickname
     * @param string   $password
     * @param string   $host
     * @param integer  $port
     */
    public function __construct(JabberId $jabberId, $nickname, $password, $host = 'chat.hipchat.com', $port = 5222)
    {
        parent::__construct($jabberId, $nickname, $password, $host, $port);
    }
}
