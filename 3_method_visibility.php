<?php

class Ac
{
	public $name="Tops";
	


	public function details()
	{
		echo "You are in public method"."<br>";
	}

	private function demo()
	{
		echo "i am private"."<br>";
	}

	protected function demo1()
	{
		echo "i am in demo1"."<br>";
	}




}


class Base extends Ac
{
	


	function childemo2()
	{
		//echo $this->name;

		// $this->details();   //public

		$this->demo1();


	}
}

$obj = new Base();
// echo $obj->demo();  //  Call to private method =>error


$obj->details(); //public method


$obj->childemo2();

?>