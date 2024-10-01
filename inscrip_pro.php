 <?php
     
include "connection.php";
$nom 	= $_POST['nom'];
$postnom		= $_POST['postnom'];
$prenom 	= $_POST['prenom'];
$phone 	= $_POST['phone'];
$email			= $_POST['email'];
$adresse		= $_POST['adresse'];
$entreprise 	= $_POST['entreprise'];
$niveau 	= $_POST['niveau'];
$profession 	= $_POST['profession'];


if( !$nom || !$postnom || !$prenom || !$phone || !$email || !$adresse || !$entreprise || !$niveau ){
$error="Please fill empty fields";
include('Professionel.html');
exit();
}

?>


<?php

$sql = 'INSERT INTO pros(nom,postnom,prenom,phone,email,adresse,entreprise,niveau,profession,date_enreg)
         VALUES("'.$_POST['nom'].'","'.$_POST['postnom'].'","'.$_POST['prenom'].'","'.$_POST['phone'].'","'.$_POST['email'].'","'.$_POST['adresse'].'","'.$_POST['entreprise'].'","'.$_POST['niveau'].'","'.$_POST['profession'].'", NOW())';
          

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

