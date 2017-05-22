<?php
require_once('collections.php');

$persons = [
	[
		"first_name" => "Seth",
		"last_name" => "Rollins"
	],
	[
		"first_name" => "Becky",
		"last_name" => "Lynch"
	],
	[
		"first_name" => "Bork",
		"last_name" => "Lesnar"
	],
	[
		"first_name" => "Dave",
		"last_name" => "Bautista"
	]
];

$people = new persons($persons);

foreach($people->all() as $peoples){
	echo $peoples['last_name'].', '.$peoples['first_name'].'<br>';
}

$person = $people->where('first_name','Seth');
echo "His name is ". $person['last_name'].', '.$person['first_name'].'<br>';

echo "I update Becky Lynch To <br>";
$updatePerson = $people->update('first_name','Becky');
echo "Say Hello to ".$updatePerson['last_name'].', '.$updatePerson['first_name'];



