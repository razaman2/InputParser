<?php

namespace tests\Parsers\Parser;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ArrayParserSpec extends ObjectBehavior
{
	function let($inputData) {

//		$this->beConstructedWith($inputData);
	}

    function it_is_initializable()
    {
        $this->shouldHaveType(\Parser\Parsers\ArrayParser::class);
    }
}
