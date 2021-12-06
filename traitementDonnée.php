<?php
$con = mysqli_connect('localhost', 'root', '','medecin');
if (! $con)
	{
	die("ne pourrait pas se relier : ". mysql_error ());
	}



$resultat = mysqli_query($con,"SELECT COUNT(Num_secu) FROM patient_ WHERE Num_secu = '$_POST[secu]'");
$rox=mysqli_fetch_row($resultat);

if($rox[0] ==0 ){
	$sql=" INSERT INTO patient_ (Num_secu,Civilite,nom,prenom,code_postal,adresse,numero_telephone,ville) VALUES ('$_POST[nom]','$_POST[prenom]','$_POST[cp]','$_POST[adresse]','$_POST[telephone]','$_POST[ville]')";
	mysqli_query($con, $sql);
	header('Location: http://localhost/M3104/saisie.html');
}
header('Location: http://localhost/M3104/saisie.html');	



	

?>  