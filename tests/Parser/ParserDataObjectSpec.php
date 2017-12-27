<?php

namespace tests\Parser;

use Parser\ParserDataObject;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ParserDataObjectSpec extends ObjectBehavior
{
	public function let($data) {

		$this->beConstructedWith($data);
	}

    function it_is_initializable() {

        $this->shouldHaveType(ParserDataObject::class);
    }
}
