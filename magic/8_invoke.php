<?php

/**
 * 
 */
class ClassName
{

public $name ;
private $age;
private $address;	
	function __construct($name,$age,$address="ahmedabad")
	{

		$this->name = $name ;
		$this->age =$age;
		$this->address = $address;


		
	}


	public function __invoke()
	{
		echo "i m in invoke";
	}



	


}

$obj = new ClassName("Tops Technology","25");


$obj();

// echo isset($obj->name);                                                                                  

// echo isset($obj->age);
                                                          
// echo isset($obj->address);


//isset check 




 //unset









?>