<?php
/**
 * 
 */
class ClassName
{
	
	public $name;

	public $addres;


	function __construct($name,$addres="aaa")	
		# code...
	
	{

		echo "i m in cons";
		//$this->name = "Tops";

		echo $name;

		echo $addres;
	}




	// public function __sleep($content)
	// {

	// 		$this->name="Tops technology";

	// 	return array('name');
	// }
}

/**
 * 
 */


$obj = new ClassName("Tops","hhhh");

$obj = new ClassName("Tops");


// $name = serialize($obj);


//print_r($obj);
// print_r($obj);




?>