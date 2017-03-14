<?php 

	$m1 =(string)$_POST['m1'];
	$m2 =(string)$_POST['m2'];
	$m3 =(string)$_POST['m3'];
	
	$x = false;
	$mass = array($m1,$m2,$m3);
	
for ($i=0; $i<=sizeof($mass); $i++)
{
	if ($mass[$i] == 'UAZ2101')
	{ 		
		$x = true;
	}
}

if ($x == true )
	{
		echo "Марка ВАЗ2101 есть в списке"; 
	}
else 
{
	echo "Марки ВАЗ2101 нет в списке"; 
}
 ?>
