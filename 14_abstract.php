<?php
/**
 * 
 */
abstract class A  
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }

public $name = "Tops ";


abstract function calculation();

public  function demo()
{

	echo "hello";

}




}

/**
 * 
 */
class B extends A
{
	public function calculation()
	{
		echo "in calculation function";
	}
	
	
}

$obj = new B();
$obj->calculation();




?>