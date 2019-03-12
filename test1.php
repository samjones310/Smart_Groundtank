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
	$first_names = array_column($result, 'flow');
	echo "che";
	echo $first_names;
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc())
    {
	 $flow=123; 
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
	<script>
	<?php
	 $data ="SELECT * FROM chro_data ; ";
	 ?>
var myData=[<?php 
while($info=mysqli_fetch_array($data))
    echo $info['flow'].','; /* We use the concatenation operator '.' to add comma delimiters after each data value. */
?>];
console.log(myData);
<?php
echo "ppp";
?>
<?php
$data=mysqli_query($mysqli,"SELECT * FROM  chro_data");
?>
var myLabels=[<?php 
while($info=mysqli_fetch_array($data))
    echo '"'.$info['flow'].'",'; /* The concatenation operator '.' is used here to create string values from our database names. */
?>];
</script>
		<html>
		    <body>
		        daasdasdasd
		        <?php
		        echo $time;
		        ?>
		        </body>
		        </html>
		    </body>
		</html>	