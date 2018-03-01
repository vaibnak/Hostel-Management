
<?php
$usrn = $_GET['Username'];
$pass = $_GET['password'];

	

$db =   mysqli_connect('localhost','root','EzLkeO76n9syXSzD','registration') or die("This hasnt been connected");

	$sql = "insert into login(username,password) values('$usrn', '$pass')";
$query = mysqli_query($db,$sql);

include "shome.html"

?>
