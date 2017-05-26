<?php
require_once('collections.php');
require_once('sample.php');
$person = new Persons($people);
var_dump($person->all());
?>
<!DOCTYPE html>
<html>
<head>
	<title>Fictional Characters</title>
</head>
<body>

<table border="1px" cellpadding="10" cellspacing="5">
	<thead>
		<tr>
			<th>Name</th>
			<th>Country</th>
			<th>Role</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($people as $person): ?>
		<tr>
			<td><?= $person['last_name'].', '.$person['first_name']; ?></td>
			<td><?= $person['country'] ?></td>
			<td><?= $person['alias']?></td>
			<td>
				<a href="register.php">Add</a>
				<a href="update.php?id=<?= $person['id']; ?>">Update</a>
			</td>
		</tr>
	<?php endforeach ?>
	</tbody>
</table>

</body>
</html>
<?php