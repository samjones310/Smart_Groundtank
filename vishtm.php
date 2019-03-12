<?php
session_start();
?>
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
<li><a href="respo5.ph">Feedback</a>
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
      height: 100%;
      width: 100%;
    }
  </style>
</head>

<body>
  <div id='myChart'></div>
  <script>
    var myData = [<?php echo $a;?>];
	console.log(myData);

    var myConfig = {
      "graphset": [{
        "type": "line",
        "title": {
          "text": "Distance"
        },
        //"scale-x": {
         // "labels": ["Webster", "Parnel", "Dena", "Tyrell", "Martha", "Summer", "Linton"]
        //},
        "series": [{
          "values": myData
        }]
      }]
    };

    zingchart.render({
      id: 'myChart',
      data: myConfig,
      height: "100%",
      width: "100%"
    });
  </script>
</body>

</html>
	
</div>
<div class="jumbotron">
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
    #myChart1 {
      height: 100%;
      width: 100%;
    }
  </style>
</head>

<body>
  <div id='myChart'></div>
  <script>
    var myData = [<?php echo $a;?>];
	console.log(myData);

    var myConfig = {
      "graphset": [{
        "type": "line",
        "title": {
          "text": "Distance"
        },
        //"scale-x": {
         // "labels": ["Webster", "Parnel", "Dena", "Tyrell", "Martha", "Summer", "Linton"]
        //},
        "series": [{
          "values": myData
        }]
      }]
    };

    zingchart.render({
      id: 'myChart1',
      data: myConfig,
      height: "50%",
      width: "100%"
    });
  </script>
</body>

</html>
</div>
<!--source files-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
