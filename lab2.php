<?php
	 $arr = array(
                "tulip" => 150,
                "rose" => 25,
                "aster" => 37,
            ); 
            $arr["aloe"] = 140;
            $arr["iris"] = 89;
			
	echo ('������:<br />');
		
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
	
	
	echo "���������� ������� ".sizeof($arr).'<br />';
	echo "����� ������� ".array_sum($arr).'<br />';
	
	echo('<br />');
	asort($arr);
	echo ('����������<br />');	
	foreach($arr as $key=>$value)
	{
		 echo $key." - ".$value.'<br />';
		echo('<br />');
	}
	echo('<br />');
	
 
?>
