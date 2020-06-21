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

	public function __unset($content)
	{

		echo "<br>"."im in unset magic method and content is $content"."<br>";

		echo isset($this->$content);

		echo "<br>";
                
	}


}

$obj = new ClassName("Tops Technology","25");

// echo isset($obj->name);                                                                                  

// echo isset($obj->age);
                                                          
// echo isset($obj->address);


//isset check 


unset($obj->name);
unset($obj->age);

 unset($obj->address);


 //unset









?>