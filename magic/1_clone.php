<?php
/**
 * 
 */
class A
{
	
	public $a = "harsiddhi";

	// public $b = "1234";

	public function __clone()
	{
		echo "i m in clone method ";
	}
}
$obj = new  A();

$obj2 =  clone $obj ;




$obj2->a = "Tops technology";

print_r($obj);

echo "*******"."<br>";


print_r($obj2);



/*

Why Need clone

*/


// $demo = $obj;

// // print_r($obj);

// echo "<br>";

// // print_r($demo);

// $demo->a = "Tops technology";

// print_r($obj);

// echo "<br>";

// print_r($demo);










// var_dump($demo);








?>

