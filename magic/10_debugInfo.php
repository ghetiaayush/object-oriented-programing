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

	public function __debugInfo()
	{
		echo "debuginfo work ";

		return [
            'age' => $this->age * 2,
        ];
	}
}

$obj = new ClassName("Tops Technology","25");

var_dump($obj);



















?>