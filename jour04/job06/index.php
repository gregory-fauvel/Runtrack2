<form method="get" action="index.php">
	<label>nombre</label><br>
	<input type="text" name="chiffre"><br>
	<input type="submit" value="ok">	
</form>	

<?php

if($_GET==true&&$_GET["chiffre"]%2==0)

{
echo "Nombre pair";
}

else
{
	echo "Nombre impair";
}
	
?>