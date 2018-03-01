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
   
.jumbotron {
   background-color: #E3E33D;
   padding: 20px;
}
    
	#container {
  background-color: #daea92;
  color: #fe0202;
  height: 180px;
  overflow: hidden;
  padding: 5px 20px;
  width: 700px;
  position: center;
  box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444; 
   margin-left: 5px
}
</style>
	
	<title>webapp</title>
</head>
<body class="bg-success">

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
<div class="jumbotron">				
<h1 class="text-center " style=" color: blue;">NIT Raipur</h1>
<h4 class="text-center">Hostel portal</h4>
</div>
</div>
</div> 
<div class="row">
	
	<div class="col-md-5 " style=" background-color: #50f098; box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;  margin="4"; ">
		<h4 class="text-center">LOGIN</h4>
		<form class="form-horizontal" role = "form" action = "decision.php" method="get">
		<div class="form-group">
			<label for="name" class="col-md-2" >Username</label>
			<div class="col-md-10">
			<input type="text" class="form-control" placeholder="Enter your Username" name="Username" id="Username" >
		</div>
	</div>
	<div class="form-group">
			<label for="password" class=" col-md-2">Password</label>
			<div class="col-md-10">
			<input type="password" class="form-control" placeholder="Enter your password" name="password">
		</div>
		</div>
		<div class="col-md-offset-2">
		<div>
		<label class="checkbox-inline btn ">
			<input type="radio" name="rrr" value = "student" checked="true">
			student
		</label>
		<label class="checkbox-inline btn">
			<input type="radio" name="rrr" value = "admin">
			Administrator
		</label>	
		</div>
		
		<button class="btn btn-success" name="butten" value="ca">Create acoount</button>
		<button class="btn btn-primary" name="butten" value="li"> Log in</button>
		<br> 
		</div>
	</div>
</form>
<h4 class="text-center">Hostel News</h4>
<div class="clearfix visible-md"></div>
	<div class="col-md-7" style="">
		
	<div id="container">
  <p>1. Admission for hostel A has started , click on this link to fill this form</p>
  <p>2. 5 Students found doing ragging in college campus , 4 suspended</p>
  <p>3. The result of supplementary examination will be declared at the end of this month</p>
  <p>4. Free laptops to be distributed to all the students near central garden today evening</p>
  <p>5. Tree plantation drive to be conducted this octobe in the college campus</p>
  <p>1. Admission for hostel A has started , click on this link to fill this form</p>
  <p>2. 5 Students found doing ragging in college campus , 4 suspended</p>
  <p>3. The result of supplementary examination will be declared at the end of this month</p>
  <p>4. Free laptops to be distributed to all the students near central garden today evening</p>
  <p>5. Tree plantation drive to be conducted this octobe in the college campus</p>
</div>
</div>
</div>
<br>
<br>
<div class="row ">
	<div class="col-md-6 col-md-offset-3 ">
		<h3 class="text-center">Hostel Gallery</h3>
<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">


<!-- Carousel items -->
<div class="carousel-inner">
<div class="item active">
<img src="h1.jpg" class="imd img-responsive" alt="First slide" >
<div class="carousel-caption">Hostel A</div>
</div>
<div class="item">
<img src="h2.jpg" class="mid img-responsive" alt="Second slide">
<div class="carousel-caption">Hostel B</div>
</div>

<div class="item">
<img src="h3.jpg" class="mid img-responsive" alt="Third slide">
<div class="carousel-caption">Hostel C</div>
</div>
</div>
<!-- Carousel nav -->
<a class="carousel-control left" href="#myCarousel"
data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
<a class="carousel-control right" href="#myCarousel"
data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
</div>

</div>
</div>
<script type="text/javascript">
var i = 0;

$(document).ready(function(){
  var interval = setInterval(function () {
    i += 1; // speed
    $('#container').animate({ scrollTop: i }, 1);
    if (i >= $('#container').prop('scrollHeight') - $('#container').height()) {
      i = 0;
    }
  }, 100);
});
</script>
<script>
    function submitForm(action)
    {
        document.getElementById('columnarForm').action = action;
        document.getElementById('columnarForm').submit();
    }
</script>
</body>


</html>