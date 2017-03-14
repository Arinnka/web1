<?php
	 $arr = array(
                "tulip" => 150,
                "rose" => 25,
                "aster" => 37,
            ); 
            $arr["aloe"] = 140;
            $arr["iris"] = 89;
			
	echo ('Товары:<br />');
		
	$flower = (string)$_POST['flower'];
	$price = (double)$_POST['price'];
	
	if ($flower!=='' and $price!='')
	{
	$arr = $arr+array("$flower"=>$price);
	}
	
	
	foreach($arr as $key=>$value)
	{
		 echo $key." - ".$value.'<br />';
		echo('<br />');
	}
	echo('<br />');
	
	
	echo "Количество товаров ".sizeof($arr).'<br />';
	echo "Сумма товаров ".array_sum($arr).'<br />';
	
	echo('<br />');
	asort($arr);
	echo ('Сортировка<br />');	
	foreach($arr as $key=>$value)
	{
		 echo $key." - ".$value.'<br />';
		echo('<br />');
	}
	echo('<br />');
	
 
?>
