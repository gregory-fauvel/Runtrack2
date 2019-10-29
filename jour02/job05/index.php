<?php
$number = 2 ;

	while ($number < 1000 )
		{
		$div_count=0;
	for ( $i=1;$i<=$number;$i++)
		{
	if (($number%$i)==0)
		{
		$div_count++;
		}
		}
	if ($div_count<3)
		{
	echo $number." <br/> ";
		}
	$number=$number+1;
		}
?>

                               




       
    





