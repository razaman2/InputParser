<?php

namespace Parser;

class Parser
{
	public function parse($data) {

    	return $this->setParser($data)->data();
    }

    public function setParser($data) {

	    return ParserFactory::getParserType($data);
    }
}
