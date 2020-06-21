<?php
/**
 * 
 */
class A 
{
	
	public static function __callstatic($method,$args)
	{


		echo $method;

		
	}

	
}

$obj = new A();
A::demo("Tops");    //static method



// $a = 3;
// $b = 4;

// $c = 7;


// $result = $obj->sum_data($a,$b);

// echo $result;


// $result = $obj->sum_data($a,$b,$c);

// echo $result;




?>