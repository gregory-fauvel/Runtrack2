<?php
$str="La vie n est que plaisir";
$char="e";

function occurences($str,$char)
{
$i=0;
$j=0;
	while ( $i<strlen($str)) {
		if($str[$i]==$char)
		{
			$j=$j+1;
		}
			$i=$i+1;
	}

	return($j);
}

	echo occurences($str,$char);
?>