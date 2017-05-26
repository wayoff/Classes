<?php
require_once('collections.php');
require_once('sample.php');

$fiction = 
[
	'id' => 6,
	'first_name' => $_POST['first_name'],
	'last_name' => $_POST['last_name'],
	'country' => $_POST['country'],
	'alias' => $_POST['alias']
];

$person = new Persons($people);
$person->create($fiction);
var_dump($person->all());
