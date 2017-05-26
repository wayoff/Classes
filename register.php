<!DOCTYPE html>
<html>
<head>
	<title>Register Fictional Character</title>
</head>
<body>

<div style="postion:absolutel;border:1px solid black;width: 70%;margin-left: 180px;max-height: 660px;height: 660px;">

<form action="registersample.php" method="POST">
	<table border="1" cellspacing="5" cellpadding="10">
		<tr>
			<td><label> <center> First Name </center> </label></td>
			<td><input type="text" name="first_name" /></td>
		</tr>
		<tr>
			<td><label><center> Last Name </center></label></td>
			<td><input type="text" name="last_name"  /></td>
		</tr>
		<tr>
			<td><label> <center> Country </center> </label></td>
			<td><input type="text" name="country"  /> </td>
		</tr>
		<tr>
			<td><label><center> Alias  </center></label></td>
			<td><input type="text" name="alias"  /></td>
		</tr>
		<tr>
			<td colspan="2"><center><input type="submit" name="register" /></center></td>
		</tr>
	</table>
</form>

</div>

</body>
</html>