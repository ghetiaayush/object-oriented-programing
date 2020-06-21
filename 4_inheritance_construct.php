<?php


class A 
{
	
	function __construct()
	{
		# code...

		echo " hello i min A";

	}

	public function demo($a,$b)
	{


	}
}

/**
 * 
 */
class B extends A
{
	
	public function __construct()
	{
		echo "I m in B class";

		parent::__construct();


	}
}

// $a=3;

// $b=4;
$obj = new B();
// $obj->demo($a,$b);

