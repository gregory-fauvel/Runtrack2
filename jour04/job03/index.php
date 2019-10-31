<form method="post" action="index.php">
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

foreach ($_POST as $key => $value) {
	echo  $value."<br>";
}

?>