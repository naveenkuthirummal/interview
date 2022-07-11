<?php 

class electricCar implements modification
{
  public function color()
  {
  	echo 'black';
  }
  public function recharge()
  {
  	echo 'ctype';
  }
}
class fan implements modification
{
	public function color()
  {
  	echo 'yellow';
  }
  public function recharge()
  {
  	echo 'normal';
  }
}
interface modification
{
	public function color();
	public function recharge();
}

$obj = new fan();
$obj -> color();
