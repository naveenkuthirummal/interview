<?php 


abstract class test 
{
	public function set()
	{
		echo '<br>inside set method not absract methode<br>';
	}
	abstract public function get();
	abstract public function sis();
	public function tt()
	{
		echo 'hii';
	}
}
class child extends test
{
	/*protect function sis();
	private function sis();*/
	public function __construct()
	{
		echo "INSIDE CHILD CLASS";
	}
	public function get()
	{
		echo '\n inside abstract method public';
	}
	public function sis()
	{
		echo '\n inside abstract method protect';
	}
	public function tt()
	{
		echo "<BR>inside chiled class";
		parent::tt();
	}

}

$obj = new child();
$obj->set();
$obj->get();

$obj->tt();

class tfvs
{
	abstract public function acd();
	public function hh()
	{
		echo '<br>NON ABSTRACT CLASS';
	}
}
$obj = new tfvs();
$obj->hh();