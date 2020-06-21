<?php

/**
 * 
 */
class User
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }

	public function demo()
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