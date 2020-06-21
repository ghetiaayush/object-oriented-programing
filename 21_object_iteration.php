<?php
class A
{
	public $name = "Tops";
	private $address = "Address";
	protected $city ="Baroda";
	public function demo()
	{

		foreach ($this as $key => $value) {
		# code...

			
		print_r($key);

		print_r($value);


	}

	} // function 
	



}

$obj = new A();
print_r($obj);


$obj->demo();

echo "<br>"."******* Class Object  *******"."<br>";

foreach ($obj as $key => $value) {
	# code...
print_r($key);

}





?>