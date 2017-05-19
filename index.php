<?php
require_once('collections.php');
require_once('phones.php');

$phone =[
	[
		'manufacturer' => 'Nokia',
		'model' => 'Lumia 1020',
		'salary' => 100
	],
	[
		'manufacturer' => 'Samsung',
		'model' => 'S8' ,
		'salary' => 100
	],
	[
		'manufacture' => 'Apple',
		'model' => 'Iphone 8',
		'salary' => 100
	]
];

$items = [
	[
		'name' => 'ducon',
		'age' => 30
	],
	[
		'name' => 'jess',
		'age' => 5
	],
	[
		'name' => 'silva',
		'age' => 10
	],
];

$equipments = [
	[
		'name' => 'pako',
		'age' => 30
	],
	[
		'name' => 'martilyo',
		'age' => 5
	],
	[
		'name' => 'pako',
		'age' => 10
	],
];



$handheld = new Phones($phone);
// var_dump($handheld->Sort($phone));

var_dump($handheld->avg('salary'));
var_dump($handheld->findByModel('model','Lumia 1020'));
var_dump($handheld->findByManufacturer('manufacturer','Samsung'));

//var_dump($handheld->where('manufacturer','Apple'));

