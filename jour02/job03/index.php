<?php
    $debut=0;



    while ($debut!=101) 
        {
            
            if ($debut<=21)

            {
                echo "<i>$debut</i>";
            }
            elseif ($debut>=25&&$debut<=50&&$debut!=42) 

            {
                echo "<u>$debut</u>";
            }
            elseif ($debut==42)

            {
                echo "LaPlateforme_";
            }
            else
                
            {
                echo $debut;
            }

           
         echo "<br>";
         $debut=$debut+1;
    }
?>
      