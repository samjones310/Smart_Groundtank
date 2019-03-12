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
    $res ="SELECT * FROM (SELECT * FROM chro_data order by entryid asc limit 10) sub order by entryid asc; ";
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
	echo $a;
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
      height: "50%",
      width: "100%"
    });
  </script>
</body>

</html>