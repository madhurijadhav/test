<?php
$arr = array(1,9,3,5,12,7);

function Customer_sort($arr)
 {
				$array_size = count($arr);
				
				for ( $i = 0; $i < $array_size; $i++ )
				{
					 for ($j = 0; $j < $array_size; $j++ )
					 {
							if ($arr[$i] < $arr[$j])
							{
								 $temp = $arr[$i];
								 $arr[$i] = $arr[$j];
								 $arr[$j] = $temp;
							}
					 } 
				}
				return $arr;
	}
print_r(Customer_sort($arr));
?>