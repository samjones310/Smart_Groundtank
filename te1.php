

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
$name=mysqli_real_escape_string($conn,$_POST['name']);
$flow=mysqli_real_escape_string($conn,$_POST['flow']);
$dist=mysqli_real_escape_string($conn,$_POST['dist']);
$tota=mysqli_real_escape_string($conn,$_POST['tota']);
$time=mysqli_real_escape_string($conn,$_POST['time']);
$entr=mysqli_real_escape_string($conn,$_POST['entr']);
$last=mysqli_real_escape_string($conn,$_POST['last']);;
$date=date('Y-m-d');		
 $sql= "INSERT INTO valtot (name1,flow1,distance1,total1,timeto,entryid,lastup,date) VALUES ('$name','$flow','$dist','$tota','$time','$entr','$last','$date');";
 $sql1="DELETE FROM cur_val where name1='$name';";
  $sql2= "INSERT INTO cur_val (name1,flow1,distance1,total1,timeto,entryid,lastup,date) VALUES ('$name','$flow','$dist','$tota','$time','$entr','$last','$date');";
		if ($conn->query($sql2) === TRUE) {
			if ($conn->query($sql) === TRUE)
			{
				if ($conn->query($sql1) === TRUE)
				{
				    ?>
	        <script>
	        window.location = "auto.html";
	        </script>
	        <?php
		}
			}
		}
			
 else {
    echo "0 results";
}	
?>
