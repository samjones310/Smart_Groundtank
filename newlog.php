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
    $address = mysqli_real_escape_string($conn,$_POST['adr']); 
	$phone = mysqli_real_escape_string($conn,$_POST['phn']);
	$email= mysqli_real_escape_string($conn,$_POST['email']);
	$ref= mysqli_real_escape_string($conn,$_POST['ref']); 	
	
   $sql= "INSERT INTO newcust (NAME,EMAIL,PHONE,ADDRESS,REFERENCE) VALUES ('$name','$email','$phone','$address','$ref');";
 
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
			?>
		
	      <script>
    window.location = "index.html";
</script>
    <?php
		}

 else {
    echo "0 results";
}
 
	?>