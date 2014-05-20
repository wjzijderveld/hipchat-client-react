<?php

namespace MainlyCode\Stream;

use MainlyCode\TestCase;

class WriteStreamTest extends TestCase
{
    private $writeStream;

    public function setUp()
    {
        $this->writeStream = new WriteStream();
    }

    /**
     * @test
     * @dataProvider provideUnencodedAndExpectedEncodedTests
     */
    public function it_encodes_to_xml($test, $expected)
    {
        $this->assertEquals($expected, $this->writeStream->xmlEncode($test));
    }

    public function provideUnencodedAndExpectedEncodedTests()
    {
        return array(
            array('Joe\'s Café & Bar ♫', 'Joe\'s Café &amp; Bar ♫'),
            array('Biermischgetränk', 'Biermischgetränk'),
            array('&euro of EUR of €', '&amp;euro of EUR of €'),
            array('Arie "Rocky" de Beuker', 'Arie &quot;Rocky&quot; de Beuker'),
        );
    }
}
