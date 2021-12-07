<?php
$con = mysqli_connect('localhost', 'root', '','cabinet');
if (! $con)
	{
	die("ne pourrait pas se relier : ". mysql_error ());
	}




$resultat = mysqli_query($con,"SELECT COUNT(Num_secu) FROM patient WHERE Num_secu = '$_POST[secu]'");
$rox=mysqli_fetch_row($resultat);
if($rox[0] ==0 ){
    $resultat = mysqli_query($con,"SELECT Id_medecin FROM medecin,patient WHERE medecin.Nom = '$_POST[n_medecin]' and medecin.Prenom= '$_POST[p_medecin]' ");
    $val=mysqli_fetch_row($resultat);
    $sql=" INSERT INTO patient (Num_secu,Civilite,Nom,Prenom,Adresse,Date_naissance,Lieu_naissance,Id_medecin) VALUES ('$_POST[secu]','$_POST[civPa]','$_POST[nomPa]','$_POST[prenomPa]','$_POST[adressePa]','$_POST[dt_naissance]','$_POST[l_naissance]','$val[0]')";
    mysqli_query($con, $sql);
    header('Location: http://localhost/m%c3%a9decin/projet-medecin/patient.html');
}






	

?>  