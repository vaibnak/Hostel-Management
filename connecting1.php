<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php

$db =   mysqli_connect('localhost','root','EzLkeO76n9syXSzD','registration') or die("This hasnt been connected");

echo "congrats you have been connected to your database";

$sql = "INSERT into login(username,password) values('bancroft', 'raipur')";
$query = mysqli_query($db,$sql);
if($query)
	
?>
</body>
</html>
