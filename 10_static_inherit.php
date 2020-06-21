<?php
class A
{
	public static $name = "Tops";
}

// $obj = new A();

// $obj->$name;


//echo A::$name;


/**
 * 
 */
class B extends A
{


public static $address = "Ahmedabad";


	public  function  demo()
	{
		echo self::$address;   // self data
		//echo $this->address;   
		echo parent::$name;   //parent class data
	}
	
	// function __construct(argument)
	// {
	// 	# code...
	// }
}

$obj = new B();

$obj->demo();

?>