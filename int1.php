<?php

/*$x = 2;
echo ($x*$x) + 2;

if(($x*$x) == (2+2))
{
	echo "IN";
}
else
{
	echo "out";
}

exit();*/
	for ($i=1; $i < 20 ; $i++) { 
	
		$x = $i*$i;

		for ($j=1; $j < 20 ; $j++) { 
				
				$y = $j*$j;

				for ($k=1; $k < 20; $k++) { 
					
					$z = $k*$k;
					if($x == ($z+$y))
					{
					echo 'x ='.$i.' y ='.$j.' z='.$k.'<br>';

						echo "$x=$y+$z".'<br>';
					}

				}
			}	
	}