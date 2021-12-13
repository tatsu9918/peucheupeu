<?php
$mysqli = mysqli_connect('localhost', 'root', '','cabinet');
if (! $mysqli)
	{
	die("ne pourrait pas se relier : ". mysqli_error ());
	}
?>

<html>
	<head>
		<title>Test</title>
</head>
<body>
<?php
$all="SELECT * FROM patient";

$req = mysqli_query($mysqli,$all);

while ($data = mysqli_fetch_array($req)) {
	$array= array(
	 'Nom : ' => array_push($data['Nom']),
	 'Prenom : ' => array_push( $data['Prenom']),
	 'Numero de secu : ' =>array_push( $data['Num_secu']),
	 'Civilite : ' =>array_push( $data['Civilite']),
	 'Adresse : ' => array_push($data['Adresse']),
	 'Date de naissance	 : ' => array_push($data['Date_naissance']),
	 'Lieu de naissance : ' => array_push($data['Lieu_naissance']),
	 'Numero du medecin : ' => array_push($data['Id_medecin'])
	);
	
}

?>
<table>
	<tr> 
		<th> Nom </th>
		<th> Prenom </th>
		<th> Numero de secu </th>
		<th> Civilite </th>
		<th> Adresse </th>
		<th> Date de naissanc </th>
		<th> Lieu de naissance </th>
		<th> Numero du medecin </th>

	</tr>
	<tr>
		<?php
		foreach($array as $value){
			echo "<th> $value </th>";
		}
		?>
	</tr>
	

