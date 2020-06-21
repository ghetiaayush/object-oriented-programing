<?php

function __autoload($a)
{
	include $a.'.php';
}

$obj = new A();





$obj->demo();
?>