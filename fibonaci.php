<?php 

$a = 1;
$b = 2;
echo "Fibonaci Series is: "."<br/>";

while($b < 100){
	$c = $a + $b; 
	echo $c."<br/>";
	$a = $b;
	$b = $c;
}