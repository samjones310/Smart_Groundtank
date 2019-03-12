<?php
session_start();
if(empty($_SESSION["authenticated"]) || $_SESSION["authenticated"] != 'true') {
    header('Location: index.html');
}
?>
 <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<?php
session_start();
//if(isset($_POST["submit"])){
   $servername = "localhost";
$username = "id4216850_sam";
$password = "Samjones310@";
$dbname = "id4216850_details";


    // Create connection
    $conn=new mysqli($servername, $username, $password, $dbname);

    //Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
   // $user = mysqli_real_escape_string($conn,$_POST['username']); 
   // $pass = mysqli_real_escape_string($conn,$_POST['password']); 	
    $res ="SELECT * FROM (SELECT * FROM chro_data order by entryid desc limit 200) sub order by entryid asc; ";
	$result = $conn->query($res);
	$a="";
	$b="";
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc())
	{
	 $url=$row["distance"];
	 $a=$a.$url;
	 $a=$a.",";
	 $url1=$row["entryid"];
	 $b=$b.$url1;
	 $b=$b.",";
	 //array_push($cars,$url);
	 //echo $url;
	}
	//echo $a;
    }
 else {
    

    echo "0 results";
}

	?>
			
<!DOCTYPE html>
<html land="en">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<head>
<!--stles-->
 <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<style>
#hideAll
 {
   position: fixed;
   left: 0px; 
   right: 0px; 
   top: 0px; 
   bottom: 0px; 
   background-color: white;
   z-index: 99; /* Higher than anything else in the document */

 }
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
<span class="icon-bar">__</span><br>
</button>
<font color="red" style="veranda"><strong><a href="abt1.html" class="navbar-brand">IOT CONTROLS</a></font></strong>
</div>
<div class="collapse navbar-collapse" id="navbar-collapse">
<ul class="nav navbar-nav">
<li><a href="respo.php">Status</a>
<li><a href="respo2.php">Drinking water</a>
<li><a href="resp3.php">Bank payment</a>
<li><a href="respo4.php">Usage</a>
<li><a href="respo5.php">Feedback</a>
<li><a href="vis1.php">Visualisation</a>
</ul>
<button id="btn1" class="btn btn-danger navbar-btn navbar-right">Logout</button>
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
<br>
  <div class="dropdown">
      <br>
<br>
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Drinking water
	<form action="drp.php" method="php" >
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="vis1.php">Distance</a></li>
      <li><a href="vis2.php">Flow Rate </a></li>
      <li><a href="vis3.php">Drinking Water</a></li>
    </ul>
	
  </div>
</div>
</div>

<div class ="jumbotron" id="test" style="width:100%;height:250px;">
<!--<div id="tester" style="width:100%;height:250px;"></div>-->
<br>
<br>

<script>
TESTER = document.getElementById('test');

Plotly.plot( TESTER, [{
    x: <?php echo "[".$b."]"; ?> ,
    y: <?php echo "[".$a."]"; ?> }], { 
    margin: { t: 0 } } );
var layout = {
  title: 'Plot Title',
  xaxis: {
    title: 'x Axis',
    titlefont: {
      family: 'Courier New, monospace',
      size: 18,
      color: '#7f7f7f'
    }
  },
  yaxis: {
    title: 'y Axis',
    titlefont: {
      family: 'Courier New, monospace',
      size: 18,
      color: '#7f7f7f'
    }
  }
};
/* Current Plotly.js version */
console.log( Plotly.BUILD );
</script>
</div>

<!--source files-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>


