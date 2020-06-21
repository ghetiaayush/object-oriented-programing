<?php

/**
 * 
 */
class ClassName
{

public $name ;
public $age;
public $address;	
	function __construct($name,$age,$address="ahmedabad")
	{

		$this->name = $name ;
		$this->age =$age;
		$this->address = $address;


		
	}

	public function __sleep()
	{
		$this->name  = md5("Tops");

		return array('name');
	}


	public function __wakeup()
	{
		echo "tops technology";

		
	}
}

$obj = new ClassName("Tops Technology","25");

$data = serialize($obj);

//print_r($data);


$demo = unserialize($data);

print_r($demo)
;



















?>