<?php

/**
 * 
 */
class A 
{
	
	function __construct()
	{
		# code...

		echo " hello i min A";

	}

	public function demo()
	{
			echo "i m in demo";

	}

	public function __destruct()
	{
			echo "obj free ";
	}
}

$obj = new A();

$obj->demo();

