<?php
/**
 * 
 */
class A 
{

	public $name = "Tops technology";
	
	// function __construct(argument)
	// {
	// 	# code...
	// }
}

/**
 * 
 */
class B extends A
{


	public function demo()
	{

		$dataname =$this->name;

		//echo $dataname;
		return $dataname;

	}

	// public function ABC()
	// {
	// 	echo "i m in abc";
	// }
	
	// function __construct(argument)
	// {
	// 	# code...
	// }
}


/**
 * 
 */
class C extends B
{
	
	public function foo()
	{
		echo $this->demo();


		
	}
}

$obj = new  C();
$obj->foo();
?>