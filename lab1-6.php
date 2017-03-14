<?php 

$x =array (1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
	$sum=0;
for ($i = 0; $i<count($x); $i++)
{
	$y[$i]=pow($x[$i],3)/min($x);
}
print_r($y);

for ($i = 0; $i<count($y); $i++)
{
	if ($i%2!==0)
	{
		$sum += $y[$i];
	}
}	
 echo '<br />';
echo "\n Сумма с нечетными индексами= $sum ";

?>
