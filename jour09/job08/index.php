<?php
$connexion = mysqli_connect("localhost","root","","jour08");
$requete = "Select SUM(capacite) from salles;";
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
			<th>Capacité totale</th>
			
		</tr>

		<?php
		foreach ($resultat as $fini):?>

		<tr>
			<td><?php echo $fini[0]?></td>
			
		</tr>
		<?php
	endforeach;
			?>
	</table>
</body>
</html>