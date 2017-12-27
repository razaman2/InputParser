<?php

namespace Parser;

use Parser\Exceptions\InvalidInputDataException;
use Parser\Parsers\ArrayParser;
use Parser\Parsers\JsonParser;
use Parser\Parsers\ObjectParser;

class ParserFactory
{
	static function getParserType($inputData) {

		if(is_array($inputData)) {

			return new  ArrayParser($inputData);
		} elseif(is_string($inputData) && $inputData = json_decode($inputData, true)) {

			return new JsonParser((array) $inputData);
		} elseif($inputData = $inputData instanceof \stdClass ? json_encode($inputData) : false) {

			return new ObjectParser(json_decode($inputData,true));
		} else {

			throw new InvalidInputDataException();
		}
    }
}
