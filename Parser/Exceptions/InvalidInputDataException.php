<?php

	namespace Parser\Exceptions;

	class InvalidInputDataException extends \Exception
	{
		protected $parsers = [
			'array', 'json', 'object'
		];
	}