<?php

namespace tests\Parsers\Parser;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ArrayParserSpec extends ObjectBehavior
{
	public function let($inputData) {

//		$this->beConstructedWith($inputData);
	}

    public function it_is_initializable() {

        $this->shouldHaveType(\Parser\Parsers\ArrayParser::class);
    }
}
