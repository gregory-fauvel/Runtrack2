<?php
$connexion = mysqli_connect("localhost","root","","jour08");
$requete = "Select prenom,nom,naissance from etudiants where YEAR(naissance) BETWEEN 1998 AND 2018;";
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
			<th>Prenom</th>
			<th>Nom</th>
			<th>Naissance</th>
		</tr>

		<?php
		foreach ($resultat as $fini):?>

		<tr>
			<td><?php echo $fini[0]?></td>
			<td><?php echo $fini[1]?></td>
			<td><?php echo $fini[2]?></td>
		</tr>
		<?php
	endforeach;
			?>
	</table>
</body>
</html>