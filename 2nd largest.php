<?php 

$x=array(1,2,5,7,8,44,32,9);  
sort($x);
print_r($x);
echo "<br>2nd largest = ".$x[count($x)-2];
echo "<br> 2nd smallesr =".$x[1];