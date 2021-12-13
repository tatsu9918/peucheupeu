
<?php
$con = mysqli_connect('localhost', 'root', '','cabinet');
if (! $con)
	{
	die("ne pourrait pas se relier : ". mysql_error ());
	}


$sql="INSERT INTO medecin (Civilite,Nom,Prenom) VALUES ('$_POST[c_medecin]','$_POST[n_medecin]','$_POST[p_medecin]')";
mysqli_query($con, $sql);

header('Location: http://localhost/m%c3%a9decin/projet-medecin/patient.html');







	

?>  