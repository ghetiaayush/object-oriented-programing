<?php

/**
 * 
 */
class A 
{
	
	function __construct($a,$b)
	{
		# code...

		

	}

	public function demo($a,$b)
	{
		//echo " hello i min A";
 
		$ans =$a + $b;

 

		// echo $ans;

		//$d='8';

		$arrv = array("a","b","c");

		 return $arrv;



	}
}



$a=3;

$b=4;
$obj = new A($a,$b);
 $ans = $obj->demo($a,$b);

 print_r($ans);

