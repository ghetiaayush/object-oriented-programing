<?php
/**
 * 
 */
class A
{
	//ptatic $x = 0;
	
	public function demo()
	{
		static $x = 0;

      echo "value is " . $x;

      $x++;
      

	}

	

	// function __construct(argument)
	// {
	// 	# code...
	// }
}

$obj = new  A();

$obj->demo();
$obj->demo();

$obj->demo();




?>)