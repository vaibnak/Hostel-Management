<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width =device-width initial-scale:1">
	<link rel="stylesheet" type="text/css" href="try.css"/>
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	body{
		 background-image: url(14.jpg);
          background-size: cover;
	}
	.panel-body input[type = "textarea"]{
		height: 300px;
		width: 1050px;
	}
	
</style>
	<title>complain</title>
</head>
	
<body>
<div class="container">
<div class="page-header">
<?php	
echo "Hello"."  " .$_SESSION['name'];
?>
	<h1 class="text-center">Hostel Portal of NIT Raipur</h1>
</div>
<nav class="navbar navbar-inverse" role="navigation">
<div class="navbar-header">
<a class="navbar-brand" href="shome.php">HOME</a>
</div>
<div>
<ul class="nav navbar-nav">
<li ><a href="#">Pay Fees</a></li>
<li class="active"><a href="#">Complain</a></li>
<li><a href="sfeedback.html">Feedback</a></li>
<li><a href="sinform.html">Inform Warden</a></li>
</ul>
</div>
</nav>

<div class="panel panel-primary">
<div class="panel-heading">
Hostels@ NIT Raipur
</div>
<
<form role ="form" action = "getcomplaint.php" method = "get"> 
<div class="panel-body">
<input type="textarea" name="text">
</div>

<button class="btn btn-primary btn-block">Submit</button>

</form>

</div>
</body>
</html>