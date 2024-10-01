 <?php
     
include "connection.php";
$niveau 	= $_POST['niveau'];


if( !$niveau ){
$error="Please fill empty fields";
include('Professionel.html');
exit();
}

?>


<?php

$sql = 'INSERT INTO paiementt(niveau,date_enreg)
         VALUES("'.$_POST['niveau'].'", NOW())';
          

$result = mysqli_query($con, $sql);


	if(!$result){
	die("Error on mysql query".mysqli_error($con));
	}
	else{
	$nam="vous etes enrestrer.";
	unset($id);
	header('location: fin_paiment.html');
	exit();
	}
                
 ?>

