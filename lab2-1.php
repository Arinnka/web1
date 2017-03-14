<?php
	
	
   $word = "abcdefghi";
        for($i = 0;  $i < 9; $i++){           
            echo $word.'<br />';
            $word = substr($word,1,-1);
          
        }

?>
