<?php

namespace tests\Parser;

use Parser\Parser;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ParserSpec extends ObjectBehavior
{
    public function it_is_initializable() {

        $this->shouldHaveType(Parser::class);
    }

    public function it_can_parse_json_input_and_return_a_parser_data_object() {

    	$this->parse('{"first_name":"ainsley","last_name":"clarke"}')->shouldHaveType(\Parser\ParserDataObject::class);
    }

    public function it_can_parse_array_input_and_return_a_parser_data_object() {

    	$this->parse(["first_name"=>"ainsley","last_name"=>"clarke"])->shouldHaveType(\Parser\ParserDataObject::class);
    }
}
