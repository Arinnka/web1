<?php
	
	
   $word = "abcdefghi";
        for($i = 0;  $i < 9; $i++){           
            echo $word.'<br />';
            //Убираем первый символ
            $word = substr($word,1,-1);//
          
        }

?>
