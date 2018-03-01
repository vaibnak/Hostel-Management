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
  .panel-body input{
    height: 300px;
    width: 1050px;
  }
  
</style>
  <title>ahome</title>
</head>
<body>
  
<div class="container">
<div class="page-header">
  <h1 class="text-center">Hostel Portal of NIT Raipur</h1>
</div>
<nav class="navbar navbar-inverse" role="navigation">
<div class="navbar-header">
<a class="navbar-brand active"" href="#">HOME</a>
</div>
<div>
<ul class="nav navbar-nav">
<li ><a href="#">Student detail</a></li>
<li ><a href="seecomplaint.php">See Complain</a></li>
<li><a href="#">See feedback</a></li>
<li ><a href="#">Student notices</a></li>
<li ><a href="#">Make announcement</a></li>
</ul>
</div>
</nav>

<div class="panel panel-primary">
<div class="panel-heading">
Hostels@ NIT Raipur
</div>

<div class="panel-body">


<?php
$a = $_SESSION['name'];
$b = $_SESSION['e-mail'];
$db =   mysqli_connect('localhost','root','EzLkeO76n9syXSzD','complaint') or die("This hasnt been connected");
$sql = "INSERT into ccc(name, username) values('$a', '$b')";

$c = "SELECT * FROM ccc ";
$result = mysqli_query( $db, $c);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["name"]." :- ". $row["problem"]. "<br>";
    }
} else {
    echo "0 results";
}

/*
$db =   mysqli_connect('localhost','root','EzLkeO76n9syXSzD','complaint') or die("This hasnt been connected");

$sql = 'SELECT problem FROM ccc' ;
$query = mysqli_query($sql, $db);
 
$rch = mysqli_num_rows($query);
 
$row = mysqli_fetch_array($query);

if ($rch > 0) {
  echo $row['problem'];	
}


*/
?>

</div>
</div>
<button class="btn btn-primary btn-block">Submit</button>
</div>
</body>
</html>






 









