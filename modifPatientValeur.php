<?php
$con = new PDO("mysql:host=localhost;dbname=cabinet", 'root',);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



$civ=$_GET['civ'];
$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$adresse=$_GET['adresse'];
$dt_naissance=$_GET['dt_naissance'];
$l_naissance=$_GET['l_naissance'];
$ville=$_GET['ville'];





$res= "UPDATE patient SET Civilite='$civ',Nom='$nom',Prenom='$prenom',Adresse='$adresse',Date_naissance='$dt_naissance',Lieu_naissance='$l_naissance', Ville='$ville' WHERE patient.Num_secu='$_GET[id]'";
$con ->prepare($res)->execute();




if ($res){
    header('Location: http://localhost/m%c3%a9decin/projet-medecin/modifPat.php');
}



?>