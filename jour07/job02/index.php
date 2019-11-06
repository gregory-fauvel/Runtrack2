<?php
setcookie("nbvisite",0);

if (isset($_COOKIE["nbvisite"])&&(empty($_GET["suppr"])))
{
	setcookie("nbvisite",$_COOKIE["nbvisite"]+1,0);
	echo($_COOKIE["nbvisite"]);
}
else
{
	setcookie("nbvisite",$_COOKIE["nbvisite"]=0,0);
	echo $_COOKIE["nbvisite"];
}
if (!empty($_GET["suppr"]))
{
	unset($_COOKIE["nbvisite"]);
}

?>


<form method="get">
	<input type="submit" name="suppr"value="Reinitialiser" />
</form>