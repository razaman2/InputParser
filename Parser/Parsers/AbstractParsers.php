<?php

	namespace Parser\Parsers;

	use Parser\Interfaces\Parsable;

	abstract class AbstractParsers implements Parsable
	{
		protected $inputData;

		public function __construct(array $inputData) {

			$this->inputData = $inputData;
		}

		public function data() {

			return $this->assignDataToObject();
		}

		protected function assignDataToObject() {

			$dataObject = new \Parser\ParserDataObject($this->inputData);

			foreach($this->inputData as $key => $val) {

				$dataObject->$key = $val;
			}

			return $dataObject;
		}
	}