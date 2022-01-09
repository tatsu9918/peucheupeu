<html>
<?php
$con = new PDO("mysql:host=localhost;dbname=cabinet", 'root',);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
<table border="1">
<tr><th>Nom</th><th>Prénom</th><th>Civilité</th><th>Adresse</th><th>Ville</th><th>Date de naissance</th><th>Lieu de naissance</th><th>Numéro de sécu</th><th>Modifier</th><th>Supprimer</th></tr>
<?php
$res= $con->prepare("SELECT * FROM patient");
$res->execute();

while ($data = $res->fetch()) {
	?>
		
			 	<tr>
					<td><input type="text" size="10" name="nom" value="<?php echo $data['Nom']; ?>"/> </td>
					<td><input type="text" size="10" name="prenom" value="<?php echo $data['Prenom']; ?>"/></td>
                    <td><input type="text" size="5" name="civ" value="<?php echo $data['Civilite']; ?>"/></td>
					<td><input type="text" name="adresse" value="<?php echo $data['Adresse']; ?>"/></td>
					<td><input type="text" size="10" name="ville" value="<?php echo $data['Ville']; ?>"/></td>
					<td><input type="text" size="12" name="dt_naissance" value="<?php echo $data['Date_naissance']; ?>"/></td>
                    <td><input type="text" size="12" name="l_naissance" value="<?php echo $data['Lieu_naissance']; ?>"/></td>
                    <td><input type="text" size="12" name="secu" value="<?php echo $data['Num_secu']; ?>"/></td>
					<form action="patient.html" method="post">
					<td><a href="modifPatientValeur.php?id=<?php echo $data['Num_secu'];?>&nom=<?php echo $data['Nom']; ?>&prenom=<?php echo $data['Prenom']; ?>&civ=<?php echo $data['Civilite']; ?>&adresse=<?php echo $data['Adresse']; ?>&ville=<?php echo $data['Ville']; ?>&dt_naissance=<?php echo $data['Date_naissance']; ?>&l_naissance=<?php echo $data['Lieu_naissance']; ?>">oui</a></td> 
					<td><a href="supprePatient.php?id=<?php echo $data['Num_secu'];?>">oui</a></td>
				</tr>
			  
		<?php
			}
			 ///Fermeture du curseur d'analyse des résultats
			 $res->closeCursor();
		 ?>
	
	<p ><input type="button" name="supp" value="retour", onclick="window.location='index.html'"> </p>

</html>