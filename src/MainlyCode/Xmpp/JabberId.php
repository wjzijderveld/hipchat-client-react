<?php

namespace MainlyCode\Xmpp;

class JabberId
{
    private $id;
    private $localPart;
    private $domainPart;
    private $resourcePart;

    /**
     * @param string $id
     */
    public function __construct($id)
    {
        $this->id = $id;

        preg_match('|^(?:(?P<localPart>.*)@)?(?P<domainPart>[\w\.]+)(?:/(?P<resourcePart>.*))?|i', $id, $matches);

        if (isset($matches['localPart'])) {
            $this->localPart  = $matches['localPart'];
        }

        $this->domainPart = $matches['domainPart'];

        if (isset($matches['resourcePart'])) {
            $this->resourcePart = $matches['resourcePart'];
        }
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getLocalPart()
    {
        return $this->localPart;
    }

    /**
     * @return string
     */
    public function getDomainPart()
    {
        return $this->domainPart;
    }

    /**
     * @return string
     */
    public function getResourcePart()
    {
        return $this->resourcePart;
    }
}
