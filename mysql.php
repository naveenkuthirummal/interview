<?php

$select = 0;
$conn = mysqli_connect('localhost','root','','test');

if(mysqli_connect_errno())
{
	echo "FAILED TO connect ".mysqli_connect_errno();
}
if($select == 1)
{

 	$qry = "insert into marks (name,sub_id,marks) values ('xyz',2,50,5674)";

 	if(!(mysqli_query($conn,$qry)))
 	{
 		echo "FAILED to insert data";
 	}
 	else 
 	{
 		echo 'insert data sucessfully';
 	}
}
$qry  = 'select EXISTS (select name from marks where name = "xyz")';
if($row = mysqli_query($conn,$qry))
	echo $rowcount=mysqli_num_rows($row);
else
	echo "Query is not execuited ";