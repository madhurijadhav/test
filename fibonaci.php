<?php 

echo "Fibonaci Series is: "."<br/>";

function getFabonaci($number1,$number2,$limit){

	while($number2 < $limit){
			$number3 = $number1 + $number2; 
			echo $number3."<br/>";
			$number1 = $number2;
			$number2 = $number3; 
	}
}
getFabonaci(1,2,100);
?>