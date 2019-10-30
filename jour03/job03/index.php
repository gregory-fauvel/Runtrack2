<?php

		$str="I'm sorry Dave I'm afraid I can't do that.";
		$i=0;

		
   		while ($i<=40) 
   		{
   			if ($str[$i]=="a"||$str[$i]=="e"||$str[$i]=="i"||$str[$i]=="o"||$str[$i]=="u"||$str[$i]=="y"||$str[$i]=="I")

   		{
   			echo $str[$i];
   		}
   			$i=$i+1;
   		}

  

	
?>