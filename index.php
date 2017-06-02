<?php
use Collection\Repositories\UserRepository as UserRepository;
use Collection\Filters\AuthFilter as AuthFilter;
require_once 'app/start.php';
require_once 'sample.php';

$user = new UserRepository($people);
//var_dump($user->all());
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
			<div>
				<input type="text" name="last_id" value="<?= $user->getLastId() ?>" style="display:none"/>
			</div>
			<div>
				<label>First Name: </label>
				<input type="text" name="first_name" />
			</div>
			<div>
				<label>Last Name: </label>
				<input type="text" name="last_name" />
			</div>
			<div>
				<label>Country: </label>
				<input type="text" name="country" />
			</div>
			<div>
				<label>Alias: </label>
				<input type="text" name="alias" />
			</div>
			<div>
				<input type="submit" name="submit" />
			</div>
		</form>
	</div>
</body>
</html>
<?php

$create = [
	'id' => @$_POST['last_id'] + 1,
	'first_name' => @$_POST['first_name'],
	'last_name' => @$_POST['last_name'],
	'country' => @$_POST['country'],
	'alias' => @$_POST['alias']
];

$created = $user->create($create);
$where = $user->where('first_name','Ronwaldo');
var_dump($where);
echo "</br></br></br>";
$all = $user->all();
var_dump($all);