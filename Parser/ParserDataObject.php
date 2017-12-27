<?php

namespace Parser;

class ParserDataObject
{
	private $data;

	public function __construct($inputData) {

		$this->data = $inputData;
	}

	public function toArray() {

		return $this->data;
	}

	public function toJson() {

		return json_encode($this->data);
	}
}
