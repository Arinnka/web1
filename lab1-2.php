<?php 
	$l1 = (double)$_POST['l1'];	
	$l2 = (double)$_POST['l2'];
	$l3 = (double)$_POST['l3'];

if ($l1 > $l2)
	{
		$A = $l1*$l2-($l3/2.5);
	}
	else 
	{	
		$A = 2; 
	}

if ($l1 == $l3) 
	{
		$B = 15-(sqrt(abs($l1)));
	}
	else 
	{ 
		$B = ($l1+2*$l2);
	}
	
	
echo "\nA = $A";
 echo '<br />';
echo "\nB = $B";
?>
