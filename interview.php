<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	
	<img draggable = "true" src="pic.jpg">
	<input type="Time" name="naveen">
</body>
</html>










<?php
$n=5;
for ($i=1; $i <=$n ; $i++) { 
	
	for ($j=0;$j <$n ; $j++) { 
		$l=$n-$i;
		//echo $l;
		if($j>=$l)
		{
			echo"*";
		}
		else
		{
			echo "&nbsp"."&nbsp";
		}
	}echo "<br>";
}

?>