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
					<td><?php echo $data['Nom']; ?></td>
					<td><?php echo $data['Prenom']; ?></td>
                    <td><?php echo $data['Civilite']; ?></td>
					<td><?php echo $data['Adresse']; ?></td>
					<td><?php echo $data['Ville']; ?></td>
					<td><?php echo $data['Date_naissance']; ?></td>
                    <td><?php echo $data['Lieu_naissance']; ?></td>
                    <td><?php echo $data['Num_secu']; ?></td>   
				</tr>
			  
		<?php
			}
			 ///Fermeture du curseur d'analyse des résultats
			 $res->closeCursor();
		 ?>
	
	

</html>