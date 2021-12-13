
<?php


$mysqli = mysqli_connect('localhost', 'root', '','cabinet');
if (! $mysqli)
	{
	die("ne pourrait pas se relier : ". mysqli_error ());
	}
    



$resultat = mysqli_query($mysqli,"SELECT COUNT(Num_secu) FROM patient WHERE Num_secu = '$_POST[secu]'");
$rox=mysqli_fetch_row($resultat);
if($rox[0] ==0 ){
    $resultat = mysqli_query($mysqli,"SELECT Id_medecin FROM medecin WHERE medecin.Nom = '$_POST[n_medecin]' and medecin.Prenom= '$_POST[p_medecin]' ");
    $val=mysqli_fetch_row($resultat);
    
    $sql=" INSERT INTO patient (Num_secu,Civilite,Nom,Prenom,Adresse,Date_naissance,Lieu_naissance,Id_medecin) VALUES ('$_POST[secu]','$_POST[civPa]','$_POST[nomPa]','$_POST[prenomPa]','$_POST[adressePa]','$_POST[dt_naissance]','$_POST[l_naissance]','$val[0]'";
    
    $test=$mysqli->query($sql);
    if (!$test) 
    {
    die("ne pourrait pas se relier : ". $mysqli->error    );
    }
   

  
}






	

?>  