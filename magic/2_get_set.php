<?php
/**
 * 
 */
class A
{


	public $name = "Harsiddhi";
	
	public function __get($val)
	{
			echo "In get method:".$val."<br>";
	}


	public function __set($name,$val)
	{
			echo "In set method:".$name."<br>";

			echo "value is :".$val;
	}


}

$obj = new  A();


// $obj->demo('6')


$obj->a;  // get method


// $obj->b = "kkkkkk"; 


 $obj->demo = "tops technology"; //set method 




 // $obj->c = "Address";

// echo $obj->c;





?>