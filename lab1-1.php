<?php 
	$k =$_POST['k'];
	$l =$_POST['l'];
	$T = ((pow($k,2)-pow($l,2))/(15*$k*$l))+pow(1.5*$k,3);
	echo "\nT = $T ";

?>
