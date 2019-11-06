<?php

session_start();
if (isset($_SESSION["nbvisites"]))
{
	 $_SESSION["nbvisites"]=$_SESSION["nbvisites"]+1;
	 echo $_SESSION["nbvisites"];
}
else{

	  $_SESSION["nbvisites"]=0;
	  echo $_SESSION["nbvisites"];

}
if (!empty($_GET["visites"]))
{
	unset( $_SESSION["nbvisites"]);
}

?>


<form action="index.php">
	<input type="submit" name="visites"value="Reinitialiser" />
</form>