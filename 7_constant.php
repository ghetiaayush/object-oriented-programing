<?php

/**
 * 
 */
class A 
{

public const NAME = "Tops Technology";

//$address = "Ahmedabad";
	
	

	public function demo()
	{
		//echo " hello i min A";
 
		//	echo $this->address;
//echo $this->NAME;


	}
}

/**
 * 
 */
class B extends A
{
	
	const ADDRESS = "Ahmedabad";

	public function foo()
	{
			echo self::ADDRESS ."<br>";
			echo parent::NAME;

	}
}


//echo A::NAME;
$obj = new B();

$obj->foo();





