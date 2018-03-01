<?php

session_start();

$a = $_GET['text'];
echo "$a";
$b = $_SESSION['name'];
$db =   mysqli_connect('localhost','root','EzLkeO76n9syXSzD','complaint') or die("This hasnt been connected");


$sql = "INSERT into ccc(name, problem) values( '$b', '$a' )";
$query = mysqli_query($db,$sql);
if($query)
	echo "This is done";
else{
	echo "not done";
}
?>