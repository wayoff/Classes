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
	echo $peoples['last_name'].', '.$peoples['first_name'].'<br><br>';
}

$person = $people->where('first_name','Seth');
echo "His name is ". $person['last_name'].', '.$person['first_name'].'<br><br>';

echo "I update Becky Lynch To <br><br>";
$updatePerson = $people->update('first_name','Becky');
echo "Say Hello to ".$updatePerson['last_name'].', '.$updatePerson['first_name'].'<br><br>';

$deletePerson = $people->delete('first_name','Dave');
echo "Guess who's Out ".$deletePerson['last_name'].', '.$deletePerson['first_name'].'<br><br>'; 

$addPerson = $people->create(array('first_name' => 'Sasha', 'last_name' => 'Banks'));
foreach($addPerson as $add)
{
	echo $add['last_name'].', '.$add['first_name'].'<br><br>';
}
echo "Sasha Banks Added<br><br>";

$sortAscending = $people->sortAscending('first_name');

echo "Sorted Ascending by First Name Nevermind the Last Name dep <br><br>";
foreach($sortAscending as $sort)
{
	echo $sort['last_name'].', '.$sort['first_name'].'<br><br>';
}




