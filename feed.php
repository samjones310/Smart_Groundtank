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
    $name= mysqli_real_escape_string($conn,$_POST['name']); 
    $email = mysqli_real_escape_string($conn,$_POST['email']); 
	$phone = mysqli_real_escape_string($conn,$_POST['phone']);
	$feedback= mysqli_real_escape_string($conn,$_POST['text']); 	
	
   $sql= "INSERT INTO  feedback (NAME,EMAIL,PHONE,FEEDBACK) VALUES ('$name','$email','$phone','$feedback');";
 
		if ($conn->query($sql) === TRUE) {
	       header("Location: respo.html");
		}

 else {
    echo "0 results";
}
 
	?>