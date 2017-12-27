<?php

	require_once '../../vendor/autoload.php';

	$obj = new stdClass();
	$obj->first_name = 'first';
	$obj->last_name = 'last';
	$obj->age = 29;
	$obj->married = true;
	$obj->test = null;
	$obj->real = false;
	$obj->height = 5.6;

	try {

		$inputData = (new \Parser\Parser())->parse('{"name":"jim brown","location":{"address1":"25 main street","address2":"suite 105","city":"paterson","state":"nj","zip":"07221","county":"passaic","country":"usa"}}');
	} catch(\Parser\Exceptions\InvalidInputDataException $e) {

		echo $e->getMessage();
	}

	print_r($inputData);