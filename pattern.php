<?php

for ($i=0 ; $i < 5 ; $i++ ) { 
	
	for ($j=0; $j < 5 ; $j++) { 
		
		
		if($j<=$i)
		{
			echo "*";
			
		}
		
	}
	for ($j=0; $j < 5 ; $j++) 
		{
			if($j<=$i)
				{
					echo "0";
			
				}
		}
	echo "<br>";
}