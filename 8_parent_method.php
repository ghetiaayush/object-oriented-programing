<?php
/**
 * 
 */
class A 
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }

	public function demo()
	{
		echo "i min demo";
	}
}

/**
 * 
 */
class B extends A
{
	public function foo()
	{
		parent::demo();
	}
	
}
$obj = new B();
$obj->foo();

?>