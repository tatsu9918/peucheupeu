<?php
$mysqli = new mysqli('localhost', 'root', '','cabinet');
if (! $mysqli)
	{
	die("ne pourrait pas se relier : ". mysql_error ());
	}

	
$sql="INSERT INTO medecin (Civilite,Nom,Prenom) VALUES ('$_POST[c_medecin]','$_POST[n_medecin]','$_POST[p_medecin]')";
$test=$mysqli->query($sql);
if (!$test)
	{
	die("ne pourrait pas se relier : ". $mysqli->error	);
	}
// header('Location: http://localhost/m%c3%a9decin/projet-medecin/patient.html');	







	

?>  