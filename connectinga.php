<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php

$a = $_GET['nam'];
$b = $_GET['usname'];
$c = $_GET['dsg'];
$d = $_GET['Em'];
$e = $_GET['pass'];
$db =   mysqli_connect('localhost','root','EzLkeO76n9syXSzD','hostel_account') or die("This hasnt been connected");


$sql = "INSERT into adm_account(name,username,designation,email,password) values('$a', '$b' , '$c' , '$d' , '$e')";
$query = mysqli_query($db,$sql);
if($query)
	echo '<a href = "webapp.php">Go back to login page</a>';


?>

