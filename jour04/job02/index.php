<form method="get" action="index.php">
	<label>Arguments</label><br>
	<input type="text" name="argument"><br>
	<label>Valeurs</label><br>
	<input type="text" name="valeur"><br>
	<input type="submit" value="ok">
	
</form>


<table>
	<thead>
		<tr>
			<th>Arguments</th>
			<th>Valeurs</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
				<?php
				echo $_GET ["argument"]
				?>
			</td>
			<td>
				<?php
				echo $_GET ["valeur"]
				?>
			</td>
		</tr>
	</tbody>
</table>

