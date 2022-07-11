<?php

	$x=array(1,2,5,7,8,44,32,9); 
	for($i=0;$i<count($x);$i++)
	{
		if($x[$i]%2 == 0)
		{
			echo $x[$i]." Is even Number<br>";
		}
		else
		{
			echo $x[$i]."Is odd Numebr<br>";
		}
	}