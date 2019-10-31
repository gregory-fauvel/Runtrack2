<form method="post" action="index.php">
	<label>Arguments</label><br>
	<input type="text" name="vide"><br>
	<label>Valeurs</label><br>
	<input type="text" name="plein"><br>
	<input type="submit" value="ok">	
</form>	
<table>
	<tr>
		<th>Arguments</th>
		<th>Valeur</th>
	</tr>

<?php
				echo "<table>";
				foreach ($_POST as $key => $value) {
				echo"<tr>";
				echo"<td>";
				echo $key;
				echo"<td>";
				echo $value;
				echo"</td>";
				echo"</tr>";
			}
				echo "</table>";
			?>
			</table>