<?php
$a = $_GET['butten']; 
$b = $_GET['rrr'];
if ($a == 'ca' ){ 
	if ($b == 'student') {
		require "createaccounts.php";
	}elseif ($b == 'admin') {
		require "createaccounta.php";
	}
	}

else if($a == 'li' ){
	
	if($b == 'student'){
		;
		require "checks.php";
	}elseif($b == 'admin'){
		require "checka.php";
	}
}
?>