<?php

namespace tests\Parser;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ParserFactorySpec extends ObjectBehavior
{
	public function it_should_return_a_json_parser_that_implements_parsable() {

		$jsonData = '{"first_name":"ainsley","last_name":"clarke"}';
		$this->getParserType($jsonData)->shouldImplement(\Parser\Interfaces\Parsable::class);
		$this->getParserType($jsonData)->shouldHaveType(\Parser\Parsers\JsonParser::class);
    }

    public function it_should_return_an_array_parser_that_implements_parsable() {

		$arrayData = ["first_name"=>"ainsley","last_name"=>"clarke"];
	    $this->getParserType($arrayData)->shouldImplement(\Parser\Interfaces\Parsable::class);
	    $this->getParserType($arrayData)->shouldHaveType(\Parser\Parsers\ArrayParser::class);
    }

    public function it_should_throw_Invalid_input_data_exception() {

		$this->shouldThrow(\Parser\Exceptions\InvalidInputDataException::class)->duringGetParserType('');
		$this->shouldThrow(\Parser\Exceptions\InvalidInputDataException::class)->duringGetParserType(10);
		$this->shouldThrow(\Parser\Exceptions\InvalidInputDataException::class)->duringGetParserType(true);
    }
}
