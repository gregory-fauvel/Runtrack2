<?php
	$str=  array(200,204,173,98,171,404,459 );
	$i=0;

	while ($i<=6) 
	{
	if ($str[$i] %2==0){
		echo  $str[$i]."pair";
		echo "<br>";
	}
	else{
		echo $str[$i]."impair";
		echo "<br>";

	}
		$i=$i+1;
	}

	
?>