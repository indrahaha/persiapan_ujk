<?php
            $n=5;
            for($i=1; $i<=$n; $i++)
            {
            for($j=1; $j<=$i; $j++) 
            { 
                if ($j==5){
                    echo $i.'*';
                }
                else{
                    echo $i;
                }
                
                
            } 
            
            echo "\r\n <br/>"; 
            }
            
?>