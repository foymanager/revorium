<?php
$host="localhost";
$user="root";
$pass="maloba";
$db = "evorium";

$con = mysqli_connect($host,$user,$pass);
$db = mysqli_select_db($con, $db);
mysqli_query($con, "SET NAMES'utf8'");
if(!$con){
die("Connection Error".mysql_error());
}

?>

 