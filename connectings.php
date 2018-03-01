<?php


$a = $_GET['nam'];
$b = $_GET['usname'];
$c = $_GET['hstl'];
$d = $_GET['Rn'];
$e = $_GET['Em'];
$f = $_GET['pass'];
$db =   mysqli_connect('localhost','root','EzLkeO76n9syXSzD','hostel_account') or die("This hasnt been connected");


$sql = "INSERT into std_account(name,username,hostel,rn,email,password) values('$a', '$b' , '$c' , '$d' , '$e', '$f')";
$query = mysqli_query($db,$sql);
if ($query) {
	echo '<a href = "webapp.php">Go back to login page</a>';
}else{
	echo "not done";
}


	


?>