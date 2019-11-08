<?php
$connexion = mysqli_connect("localhost","root","","jour08");
$requete = "select nom,prenom,naissance from etudiants where sexe='femme'";
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
			<th>Nom</th>
			<th>Prenom</th>
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