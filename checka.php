<?php
session_start();
$a  = $_GET['Username'];
$b = $_GET['password'];
$db =   mysqli_connect('localhost','root','EzLkeO76n9syXSzD','hostel_account') or die("This hasnt been connected");



$sql = "SELECT * from adm_account WHERE username = '$a' AND password = '$b'";

$query = mysqli_query($db,$sql);

$rch = mysqli_num_rows($query);
 
$row = mysqli_fetch_assoc($query);
if($rch >= 1){
	$_SESSION['name'] =  $row['username'];
	$_SESSION['e-mail'] = $row['email'];
	include "ahome.php";
}else{
	echo "THE USERNAME OR PASSWORD YOU TYPED IS INCORRECT";
}

?>