<?php
$con = new PDO("mysql:host=localhost;dbname=cabinet", 'root',);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$res= $con->prepare("UPDATE patient SET Civilite='$_POST[civ]',Nom='$_GET[nom]',Prenom='$_GET[prenom],'Civilite='$_GET[civ],'Adresse='$_GET[adresse],'Date_naissance='$_GET[dt_naissance],'Lieu_naissance='$_GET[l_naissance]', Ville='$_GET[ville]' WHERE Num_secu='$_GET[id]'");
$res->execute();

if ($res){
    header('Location: http://localhost/m%c3%a9decin/projet-medecin/modifPat.php');
}



?>