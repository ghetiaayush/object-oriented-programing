<?php
trait ab
{
	function demo()
	{
		echo "hello";
	}
}
trait abc
{
	function demo2()
	{
		echo "i m in abc ";
	}
}
class A
{
	use ab,abc;

	public function demo1()
	{
		echo "hello demo1";
	}
}

$obj = new A();
$obj->demo2();
?>