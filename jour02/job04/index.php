<?php
	$debut=0;

	   while ($debut!=101) 
        {
            
            if ($debut %3==0)

            {
                echo "Fizz";
            }
            else
                
            {
                echo $debut;
            }
            if ($debut %5==0)

            {
                echo "Buzz";
            }

            if ($debut %5==0 && $debut %3==0)

            {
            	echo "FizzBuzz";
            }

          
         echo "<br>";
         $debut=$debut+1;
    }

         
    
?>