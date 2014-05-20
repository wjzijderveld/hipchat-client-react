<?php

namespace MainlyCode\Xmpp;

class Connection
{
    private $jabberId;
    private $password;
    private $host;
    private $port;
    private $nickname;

    /**
     * @param JabberId $jabberId
     * @param string   $nickname
     * @param string   $password
     * @param string   $host
     * @param integer  $port
     */
    public function __construct(JabberId $jabberId, $nickname, $password, $host, $port)
    {
        $this->jabberId = $jabberId;
        $this->nickname = $nickname;
        $this->password = $password;
        $this->host     = $host;
        $this->port     = $port;
    }

    /**
     * @return JabberId
     */
    public function getJabberId()
    {
        return $this->jabberId;
    }

    /**
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @return string
     */
    public function getRemoteSocket()
    {
        return sprintf('tcp://%s:%d', $this->host, $this->port);
    }
}
