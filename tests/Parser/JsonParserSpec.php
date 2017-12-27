<?php

namespace tests\Parsers\Parser;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class JsonParserSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(\Parser\Parsers\JsonParser::class);
    }
}
