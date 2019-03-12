<?php
session_start();
//if(isset($_POST["submit"])){
 $servername = "localhost";
$username = "id4216850_sam";
$password = "Samjones310@";
$dbname = "id4216850_details";


//$arr    = array();
$sql    = "select flow from chro_data ";
$result = mysql_query($sql) or die(mysql_error());  
//while( $row = mysql_fetch_assoc( $result ) ) {
 //arr[] = $row[ 'flow' ];
//}
echo $result;
?>