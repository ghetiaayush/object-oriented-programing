<?php
trait ab
{
	function demo()
	{
		echo "hello";
	}
}
class A
{
	use ab;

	public function demo1()
	{
		echo "hello demo1";
	}
}

$obj = new A();
$obj->demo();
?>