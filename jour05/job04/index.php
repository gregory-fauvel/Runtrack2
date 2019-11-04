<?php
$a=3;
$operation= "-";
$b=4;


function calcule ($a,$operation,$b)
{

	if ($operation=="+")

{
	$calculette=$a+$b;
}
	elseif($operation=="-")

{
	$calculette=$a-$b;
}
	elseif($operation=="*")

{
	$calculette=$a*$b;
}
	elseif($operation=="/")

{
	$calculette=$a/$b;
}

return ($calculette);

}
echo calcule($a,$operation,$b);

?>
