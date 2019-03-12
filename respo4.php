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
.modal-content {
    background-color: #fefefe;
	color:#d63031;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
	width:80%;
}
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
</style>
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
.bil
{
color:#980122;
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
<strong><font color="red" font="veranda"><a href="abt1.html" class="navbar-brand">IOT CONTROLS </a></strong></font>
</div>
<div class="collapse navbar-collapse" id="navbar-collapse">
<ul class="nav navbar-nav">
<li><a href="respo.php">Status</a>
<li><a href="respo2.php">Drinking water</a>
<li><a href="resp3.php">Bank payment</a>
<li><a href="respo4.php">Usage</a>
<li><a href="vis1.php">Visualistaion</a>
<li><a href="respo5.php">Feedback</a>
</ul>
<button id="btn1" class="btn btn-danger navbar-btn navbar-right" >Logout</a>
</div>
</div>
</nav>
<br>
<script type="text/javascript">
			document.getElementById("btn1").onclick = function () {
			  
        location.href = "index.html";
			};
		
				</script>
<div class="jumbotron">
<div class="container text-center" >
<br>
<font face="veranda" color="red" align="center"><strong><h2>Usage</h2></strong></font><br>
<form method="post" action="usage.php">
    <font face="Comic Sans MS" color="#2C3A47" align="center">
<h4>Starting date:<input type="date" id="st" name="st_date"  value="05/1/18" >
<br><br>Ending date:<input type="date" id="en" name="en_date" value="05/1/18"><br><br>
<h4>Average usage per day:<br><br>Average Bill Per day:<br><br>
</font>
<input type="submit" class="btn btn-mg btn-primary" id="calc" value="Calculate">
</form>
 <script type="text/javascript">
			document.getElementById("calc").onclick = function () {
        location.href = "calc.php";
			};
				</script>
<script>
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("st").setAttribute("max", today);
document.getElementById("en").setAttribute("max", today);
document.getElementById("st").setAttribute("value", today);
document.getElementById("en").setAttribute("value", today);
</script>
</div>
</div>
<div class="container">
  <button  class="btn btn-info" data-toggle="collapse" data-target="#contact">Contact</button>
  </DIV>
  <div id="contact" class="collapse">
    <div class="container">
	<div class="row">
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
	
  
   <!--<script type="text/javascript">
			document.getElementById("fed").onclick = function () {
        location.href = "feedback.html";
			};
				</script>-->
</div>
</div>
<br><br>



<!--source files-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
