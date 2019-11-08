<?php
$connexion = mysqli_connect("localhost","root","","jour08");
$requete = "Select* from etudiants;";
$query=mysqli_query($connexion,$requete);
$resultat=mysqli_fetch_all($query);

?>	

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>Prenom</th>
			<th>Nom</th>
			<th>Naissance</th>
			<th>Sexe</th>
			<th>Email</th>
		</tr>

		<?php
		foreach ($resultat as $fini):?>

		<tr>
			<td><?php echo $fini[0]?></td>
			<td><?php echo $fini[1]?></td>
			<td><?php echo $fini[2]?></td>
			<td><?php echo $fini[3]?></td>
			<td><?php echo $fini[4]?></td>
			<td><?php echo $fini[5]?></td>
		</tr>

		<?php
	endforeach;
			?>
	</table>
</body>
</html>