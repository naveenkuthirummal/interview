<?php

$db = 'country';
$uname = 'root';
$psw = '';

$conn = mysqli_connect('localhost',$uname,$psw,$db);
if(!$conn)
	echo "Error Db not connected yet";
/*else
	echo "Connection Sucess";*/

