<?php
session_start();
if(empty($_SESSION["authenticated"]) || $_SESSION["authenticated"] != 'true') {
    header('Location: index.html');
}
?>
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
    $res ="SELECT * FROM chro_data limit 1 ; ";
	$result = $conn->query($res);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc())
    {
	 $flow=$row["flow"]; 
	 $time=$row["time"]; 
	 $distance=$row["distance"]; 
	 $liter=$row["liter"];
	 $total=$row["total"]; 
    }
    }
 else {
    
    //header("Location: index.html");
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
<li><a href="vis1.php">Visualistaion</a>
<li><a href="respo5.php">Feedback</a>

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
<font face="verdana" color="red"><h2 ><b><strong>Status Of Your Tank</strong></b></h2></font>
<br>
    	<h4 class="cha" id="cha">
			</h4>
			<font face="verdana" color="#0a3d62" align="center"><h4> Channel  Id:
			    </h4></font>
			<font face="verdana" color="#0a3d62" align="center"><h4>Height to Fill:
			<?php echo $distance; ?>
			    </h4></font>
			<font face="verdana" color="#0a3d62" align="center"><h4>Filling Rate: <?php echo $flow; ?>L/M</h4></font>
			<font face="verdana" color="#0a3d62" align="center"><h4>Time to Fill: <?php echo $time; ?> </font>
			</h4>
			<br>
				  <button id="myBtn" class="btn  btn-primary" type="submit">Need Help</Button>
</div>
</div>
<div class="container">
    <font face="verdana" color="#182C61"><h4><b><strong>Last Update:</strong></b></h4></font>
  <h3 class="bil" id="las"></h3>
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
	<div id="container">
	 
  
   <!--<script type="text/javascript">
			document.getElementById("fed").onclick = function () {
        location.href = "feedback.html";
			};
				</script>-->
</div>
</div>
</div>
</div>
<div id="container">
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
    $res ="SELECT * FROM (SELECT * FROM chro_data order by entryid desc limit 20) sub order by entryid asc; ";
	$result = $conn->query($res);
	$a="";
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc())
	{
	 $url=$row["distance"];
	 $a=$a.$url;
	 $a=$a.",";
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
<html>

<head>
  <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
  <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
  </script>
  <style>
    html,
    body,
    #myChart {
      height: 50%;
      width: 100%;
    }
  </style>
</head>

<body>
    
</html>
</div>
<DIV ID="CONTAINER">
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
	<?php
	
	?>
    <font face="verdana" color="red" align="center"><strong><p>Will be Contacted</p></strong></font>
  </div>
  </DIV>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<!--source files-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>


