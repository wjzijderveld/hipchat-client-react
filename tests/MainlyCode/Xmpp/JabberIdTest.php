<?php

namespace MainlyCode\Xmpp;

use MainlyCode\TestCase;

class JabberIdTest extends TestCase
{
    /**
     * @test
     * @dataProvider provideJabberIds
     */
    public function it_parses_the_jabber_id($id, $localPart, $domainPart, $resourcePart)
    {
        $jabberId = new JabberId($id);

        $this->assertEquals($id, $jabberId->getId());
        $this->assertEquals($localPart, $jabberId->getLocalPart());
        $this->assertEquals($domainPart, $jabberId->getDomainPart());
        $this->assertEquals($resourcePart, $jabberId->getResourcePart());
    }

    public function provideJabberIds()
    {
        return array(
            array('42_1337@chat.hipchat.com/bot', '42_1337', 'chat.hipchat.com', 'bot'),
            array('chat.hipchat.com', '', 'chat.hipchat.com', ''),
            array('42_1337@chat.hipchat.com', '42_1337', 'chat.hipchat.com', ''),
        );
    }
}
