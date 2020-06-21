<?php

interface a 
{
	function demo();

}

/**
 * 
 */
class ClassName implements a
{
	
	// function demo()
	// {
	// 	# code...
	// }

	function A()
	{
		echo "hello";
	}
}

$obj = new ClassName()
;

$obj->A();
?>