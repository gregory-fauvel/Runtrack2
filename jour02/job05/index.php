<?php
 function affichePremiers($n){

        $premier = false;
        if($n<0){
            $premier = true;
            $n = -$n;
        }
        
        for($i=2;$i<=$n;$i++){
            $n2 = 0;

        for($j=1;$j<=$i;$j++){
                if($i%$j==0){
                    $n2++;            
                }
            }
            if($n2 == 2){
    
                if($premier){
                    echo "";
                }
                echo $i;
                echo "<br/>";
            }
        }
    }
     affichePremiers(1000);
?>
    



                               




       
    





