<?php
$bool=true;
$int="grégory";
$chaine=30;
$float=3.2;
?>
<table>
	<tr>
		<th>type</th>
		<th>nom</th>
		<th>valeur</th>
	</tr>
	<tr>
		<td>booleen</td>
		<td>true</td>
		<td><?php
			echo $bool;
			?></td>
	</tr>
	<tr>
		<td>integer</td>
		<td>int</td>
		<td>
			<?php
			echo $int;
			?>
		</td>
	</tr>
	<tr>
		<td>nbr virgule</td>
		<td>float</td>
		<td>
			<?php
			echo $float;
			?>
		</td>
		<td></td>
	</tr>
	<tr>
		<td>string</td>
		<td>caractere</td>
		<td>
			<?php
			echo $chaine;
			?>
		</td>
	</tr>
</table>