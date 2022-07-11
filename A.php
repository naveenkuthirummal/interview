<?php

	/**
	 * this is created only for testing purpose
	 */
	class A
	{
		
		public $name;
		public $lname;
		public $age;

		public function set($n,$l,int $a)
		{

			$this->name = $n;
			$this->name = $l;
			$this->name = $a;
		}

		public function __sleep()
		{
			return array('name');
		}
	}

	$obj = new A();
	$str = serialize($obj);
	
	$obj->set('nav','ku',28);
	unset($obj);
	echo $str;