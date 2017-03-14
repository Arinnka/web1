<?php 

	$y = array(1,2,3,4,5,6,7,8,9);
$p=1;
	for ($i=0; $i<sizeof($y); $i++)
{
	$sum += pow($y[$i],2);

}
	for ($i=0; $i<count($y); $i++)
{
	$p *= $y[$i];
}
	echo "\nСCумма = $sum ";
	 echo '<br />';
	echo "\nПроизведение = $p ";
	 echo '<br />';
	
$x= ($sum+$p)/9;
echo "\nX = $x ";
?>
