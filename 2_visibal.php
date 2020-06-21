<?php
/**
 * 
 */
class Ac
{
	public $address = "Ahmedabad";
	protected $name="Tops";
	private $state = "gujarat";

}

 
class Base extends Ac
{
	//

	function demo()
	{
		echo $this->name;   //protected 

		// echo $this->state ; // private => error
	}
}

$obj = new Base();



echo $obj->address."<br>";   //public ->get value 


// echo $obj->name."<br>";  //protected 

// echo $obj->state."<br>"; //private -> error


echo "******get protected********"."<br>";

echo $obj->demo();





?>