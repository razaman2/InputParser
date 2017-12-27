<?php

	require_once '../../vendor/autoload.php';

	$obj = new stdClass();
	$obj->first_name = 'Miyosha';
	$obj->last_name = 'Sparkes';
	$obj->age = 29;
	$obj->married = true;
	$obj->test = null;
	$obj->pregnant = false;
	$obj->height = 5.6;

	try {

		$inputData = (new \Parser\Parser())->parse('');
	} catch(\Parser\Exceptions\InvalidInputDataException $e) {

		echo $e->getMessage();
	}

	print_r($inputData);
//	echo "hello, my name is {$inputData->first_name} {$inputData->last_name}. i am {$inputData->age} years old
//and currently married {$inputData->married}. my height is $inputData->height";