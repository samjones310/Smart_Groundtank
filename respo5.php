<?php
session_start();
if(empty($_SESSION["authenticated"]) || $_SESSION["authenticated"] != 'true') {
    header('Location: index.html');
}
?>
<!DOCTYPE html>
<html land="en">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<head>
<!--stles-->
<style>
.navbar{
margin-bottom:0;
border-radius:0;
background-color:#c7ecee;
color:#ffffff;
padding:1% 0;
font-size: 1.2em;
border:0px;
}
.navbar-brand{
float:left;
min-height:55px;
padding:0 15px 5px;
}
.navbar .navbar-nav .active a,.navbar ,navbar-nav a:focus,.navbar ,navbar-nav a:hover
{
color:#32222d;
}
.navbar .navbar-nav li a{
color:#223232;
}
</style>
<!--bootsstrap cdn-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<nav class="navbar  navbar-fixed-top" id="my-navbar">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
<span class="icon-bar">__</span>
<span class="icon-bar">__</span>
<span class="icon-bar">__</span>
<span class="icon-bar">__</span>
</button>
<strong><font color="red" font="veranda"><a href="abt1.html" class="navbar-brand">IOT CONTROLS</a></strong>
</div>
<div class="collapse navbar-collapse" id="navbar-collapse">
<ul class="nav navbar-nav">
<li><a href="respo.php">Status</a>
<li><a href="respo2.php">Drinking water</a>
<li><a href="resp3.php">Bank payment</a>
<li><a href="respo4.php">Usage</a>
<li><a href="vis1.php">Visulisationk</a>
<li><a href="respo5.php">Feedback</a>
</ul>
<button  id="btn1" class="btn btn-danger navbar-btn navbar-right" >Logout</button>
</div>
</div>
</nav>
 <script type="text/javascript">
			document.getElementById("btn1").onclick = function () {
			  
        location.href = "index.html";
			};
		
				</script>
<br><br><br>
<div class="jumbotron">
    <div class="container text-center">
	<div class="col-lg-7">
	<font face="veranda" color="red" align="center"><h2><strong>Feedback</strong></h2>
	<font face="Comic Sans MS" color="#2C3A47" align="center"><small>We Improve by fulfiiling you</small><br><br></font>
	</div>
	<!--<div class="row">
	<div class="col-lg-4">
	<address>
	<strong>IOT controls Ltd..</strong><br>
	31/35a Bharathi puram<br>
	Sowripalayam<br>
	Coimbatore -28<br>
	P:9042449660<BR>
	<a href="mailto:samjones31098@gal.com">MAIL TO</a>
	</address>
	</div>
	<div class="col-lg-8">
	<form action="" class="form-horizontal">
	<div class="form-group">
	
	<label for="user-name" class="col-lg-2 control-label">Name  :</label>
	<div class="col-lg-10">
	<input type="text" class="form-control" id="username" placeholder="Name"><BR>
  </div>
  <div class="form-group">
	<label for="email" class="col-lg-2 control-label">Email   :</label>
	<div class="col-lg-10">
	<input type="text" class="form-control" id="email" placeholder="Email"><BR>
  </div>
  </div>
  <div class="form-group">
	<label for="phone" class="col-lg-2 control-label">Number  :</label>
	<div class="col-lg-10">
	<input type="number" class="form-control" id="phone" placeholder="Number"><BR>
  </div>
  </div>
  <div class="form-group">
	<label for="feedback" class="col-lg-2 control-label">Feedback:</label>
	<div class="col-lg-10">
	<textarea rows="4" cols="50" class="form-control" id="username" placeholder="Feedback...."></textarea><br>
  </div>
  </div>
  <div class="form-group">
  <div class="col-lg-10 col-lg-offset-2">
  <input type="submit" class="btn btn-primary" value="Submit">
  </div>
  </div>
  </div></div>
  </div>
  </section>
  
   <!--<script type="text/javascript">
			document.getElementById("fed").onclick = function () {
        location.href = "feedback.html";
			};
				</script>-->
	
	<div class="col-lg-7">
	<form method="post" action="feed.php">
	<input type="text" class="form-control" id="username" name="name" placeholder="Name"><BR>
  </div>
  <div class="form-group">
	
	<div class="col-lg-7">
	<input type="text" class="form-control" id="email" name="email" placeholder="Email"><BR>
  </div>
  </div>
  <div class="form-group">
	
	<div class="col-lg-7">
	<input type="number" class="form-control" id="phone" name="phone" placeholder="Number"><BR>
  </div>
  </div>
  <div class="form-group">
	<div class="col-lg-7">
	<textarea rows="4" cols="50" class="form-control" id="username" name="text" placeholder="Feedback...."></textarea><br>
  </div>
  </div>
  <div class="form-group">
  <div class="col-lg-7 ">
  <input type="submit" class="btn btn-primary" value="Submit">
  </form>
  </div>
  </div>
  </div>
</div>

<!--source files-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
