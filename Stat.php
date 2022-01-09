<html>
<?php
$con = new PDO("mysql:host=localhost;dbname=cabinet", 'root',);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
<table border="1">
<tr><th>Tranche d'age</th><th>nb Hommes</th><th>Nb Femmes</th></tr>

<?php
$hm25= $con->prepare("SELECT COUNT(*) as compteur_homme_moins_25 FROM `patient` WHERE patient.Civilite ='M' AND DATEDIFF(CURRENT_DATE,patient.Date_naissance )/365<25");
$hm25->execute();
$data_25_h=$hm25->fetch();

$fm25= $con->prepare("SELECT COUNT(*) as compteur_femme_moins_25 FROM `patient` WHERE patient.Civilite ='F' AND DATEDIFF(CURRENT_DATE,patient.Date_naissance )/365<25");
$fm25->execute();
$data_25_f=$fm25->fetch();

$h2550= $con->prepare("SELECT COUNT(*) as compteur_homme_entre_25_et_50 FROM `patient` WHERE patient.Civilite ='M' AND DATEDIFF(CURRENT_DATE,patient.Date_naissance )/365 BETWEEN 25 AND 50");
$h2550->execute();
$data_25_50_h=$h2550->fetch();

$f2550= $con->prepare("SELECT COUNT(*) as compteur_femme_entre_25_et_50 FROM `patient` WHERE patient.Civilite ='F' AND DATEDIFF(CURRENT_DATE,patient.Date_naissance )/365 BETWEEN 25 AND 50");
$f2550->execute();
$data_25_50_f=$f2550->fetch();

$hp50= $con->prepare("SELECT COUNT(*) as compteur_homme_plus_50 FROM `patient` WHERE patient.Civilite ='M' AND DATEDIFF(CURRENT_DATE,patient.Date_naissance )/365<50");
$hp50->execute();
$data_50_h=$hp50->fetch();

$fp50= $con->prepare("SELECT COUNT(*) as compteur_femme_plus_50 FROM `patient` WHERE patient.Civilite ='F' AND DATEDIFF(CURRENT_DATE,patient.Date_naissance )/365<50");
$fp50->execute();
$data_50_f=$fp50->fetch();



	?>

			 	<tr>
                    <td>Moins de 25 ans </td>
					<td><input  size="10" name="h" value="<?php echo $data_25_h[0]; ?>"/> </td>
                   
					<td><input  size="10" name="f" value="<?php echo $data_25_f[0]; ?>"/></td>
				</tr>
                <tr>
                <td>Entre 25 et 50 ans</td>
					<td><input  size="10" name="h" value="<?php echo $data_25_50_h[0]; ?>"/> </td>
                   
					<td><input  size="10" name="f" value="<?php echo $data_25_50_f[0]; ?>"/></td>
				</tr>
                <tr>
                <td>Plus de 50ans</td>
					<td><input  size="10" name="h" value="<?php echo $data_50_h[0]; ?>"/> </td>
                   
					<td><input  size="10" name="f" value="<?php echo $data_50_f[0]; ?>"/></td>
				</tr>

			    
		
	
	<p ><input type="button" name="supp" value="retour", onclick="window.location='index.html'"> </p>

</html>