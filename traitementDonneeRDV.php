<?php
$con = mysqli_connect('localhost', 'root', '','cabinet');
if (! $con)
	{
	die("ne pourrait pas se relier : ". mysql_error ());
	}







$resultat = mysqli_query($con,"SELECT Id_medecin FROM medecin WHERE medecin.Nom = '$_POST[nMed]' and medecin.Prenom= '$_POST[pMed]' ");
$val=mysqli_fetch_row($resultat);
$date_naissance=strtotime($_POST['dRdv']);
$date = date('Y-m-d', $date_naissance);
$sql=" INSERT INTO rendez_vous (Num_secu,Id_medecin,Date_rdv,Heure_rdv,Duree_rdv) VALUES ('$_POST[secu]','$val[0]  ','$date','$_POST[prenomPa]','$_POST[hRdv]','30')";
mysqli_query($con, $sql);
header('Location: http://localhost/m%c3%a9decin/projet-medecin/patient.html');







	

?>  