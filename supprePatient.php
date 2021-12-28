<?php
$con = new PDO("mysql:host=localhost;dbname=cabinet", 'root',);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



$res= $con->prepare("DELETE FROM patient WHERE Num_secu='$_GET[id]'");
$res->execute();

if ($res){
    header('Location: http://localhost/m%c3%a9decin/projet-medecin/modifPat.php');
}

?>