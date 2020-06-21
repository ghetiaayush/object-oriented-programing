<?php

/**
 * 
 */

// final class User    // can't inherit
 class User
{

	// public final $name = "Tops Technology";


	
	// function __construct(argument)
	// {
	// 	# code...
	// }

	public  final function demo()
	{
		echo "in demo ";
	}

		

}

/**
 * 
 */
class Child extends User
{

	public function demo()
		{
			//echo $this

			echo "in 123";
		}
	
	// function __construct(argument)
	// {
	// 	# code...
	// }
}
$obj = new Child();

$obj->demo();

?>