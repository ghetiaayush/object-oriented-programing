<?php

class A
{
	public $name = "abc";


	public function demo(B $obj2)
	{
		echo " i m in demo ";

		print_r($obj2);


	}

}
class B extends A
{

	public $address = "Ahmedabad";

	public $njj = "juik";



	public function ab()
	{
		echo " i m in ab";
	}

}

$obj = new A();

//print_r($obj);



$obj2 = new B();

//print_r($obj2);

$obj->demo($obj2);




?>