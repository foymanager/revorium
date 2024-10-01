 <?php
     
include "connection.php";
$nom 	= $_POST['nom'];
$postnom		= $_POST['postnom'];
$prenom 	= $_POST['prenom'];
$phone 	= $_POST['phone'];
$email			= $_POST['email'];
$adresse		= $_POST['adresse'];
$institution 	= $_POST['institution'];
$niveau 	= $_POST['niveau'];


if( !$nom || !$postnom || !$prenom || !$phone || !$email || !$adresse || !$institution || !$niveau ){
$error="Please fill empty fields";
include('eleve.html');
exit();
}

?>


<?php

$sql = 'INSERT INTO eleve(nom,postnom,prenom,phone,email,adresse,institution,niveau,date_enreg)
         VALUES("'.$_POST['nom'].'","'.$_POST['postnom'].'","'.$_POST['prenom'].'","'.$_POST['phone'].'","'.$_POST['email'].'","'.$_POST['adresse'].'","'.$_POST['institution'].'","'.$_POST['niveau'].'", NOW())';
          

$result = mysqli_query($con, $sql);


	if(!$result){
	die("Error on mysql query".mysqli_error($con));
	}
	else{
	$nam="vous etes enrestrer.";
	unset($id);
	header('location: enregistrement.html');
	exit();
	}
                
 ?>

