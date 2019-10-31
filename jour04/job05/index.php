<form method="post" action="index.php">
	<label>Name</label><br>
	<input type="text" name="username"><br>
	<label>Mot de passe</label><br>
	<input type="text" name="password"><br>
	<input type="submit" value="ok">	
</form>	

<?php
$i=0;

if ($_POST["Name"]&& $_POST["Mot de passe"]=="Rambo")
{
echo "C est pas ma guerre";
}


else
{
echo"Votre pire cauchemar";
}


	
?>