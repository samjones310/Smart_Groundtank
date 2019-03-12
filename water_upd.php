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
    $chaid= mysqli_real_escape_string($conn,$_POST['chaid']); 
    $distance = mysqli_real_escape_string($conn,$_POST['distance']); 
	$total= mysqli_real_escape_string($conn,$_POST['total']); 
    $liter= mysqli_real_escape_string($conn,$_POST['liter']); 
	$last= mysqli_real_escape_string($conn,$_POST['last']); 
    $time= mysqli_real_escape_string($conn,$_POST['time']); 
	$flow= mysqli_real_escape_string($conn,$_POST['flow']); 
		$entr= mysqli_real_escape_string($conn,$_POST['ent']); 
	
    $sql= "INSERT INTO chro_data (chaid,distance,total,liter,last,time,flow,entryid) VALUES ('$chaid','$distance','$total','$liter','$last','$time','$flow',$entr);";

    if ($conn->query($sql)==TRUE) {
    // output data of each row
	 header("Location: ind.php");
    }
 else {
     echo "Error updating record: " . $conn->error;
    
    //header("Location: index.html");
    echo "0 results";
}
 
	?>