<form method="get" action="index.php">
	<label>Nom</label><br>
	<input type="text" name="nom"><br>
	<label>Prénom</label><br>
	<input type="text" name="prenom"><br>
	<label>Age</label><br>
	<input type="text" name="age"><br>
	<label>Email</label><br>
	<input type="text" name="email"><br>
	<input type="submit" value="ok">
	
</form>
<?php
echo var_dump($_GET);

?>