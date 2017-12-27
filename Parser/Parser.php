<?php

namespace Parser;

class Parser
{
	public function parse($data) {

    	return $this->setParser($data)->data();
    }

    protected function setParser($data) {

	    return ParserFactory::getParserType($data);
    }
}
