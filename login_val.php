<?php
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
    $user = mysqli_real_escape_string($conn,$_POST['username']); 
    $pass = mysqli_real_escape_string($conn,$_POST['password']); 	
    $res ="SELECT * FROM IOT_AUTOMATION where username='$user' and password='$pass'; ";
	$result = $conn->query($res);
    if ($result->num_rows == 1) {
    // output data of each row
    while($row = $result->fetch_assoc())
     session_start();
     $_SESSION["authenticated"] = 'true';
	 $url=$row["s1"]; 
	 //echo $url;
     $_SESSION['chaid']=$url;
	 header("Location: respo.php");
    }
 else {
    
    header("Location: index.html");
    echo "0 results";
}
 
	?>