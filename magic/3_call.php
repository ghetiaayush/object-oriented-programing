<?php
/**
 * 
 */
class A 
{
	
	public function __call($method,$args)
	{


		echo $method;

		if($method == "sum_data")
		{
			$count = count($args);

			if($count == 2)
			{
				$result = $args[0] +  $args[1];

				return $result;
			}

			if($count == 3)
			{
				$result = $args[0] +  $args[1] + $args[2];

				return $result;
			}
		}
	}

	
}

$obj = new A();

$a = 3;
$b = 4;

$c = 7;


$result = $obj->sum_data($a,$b);

echo $result;


$result = $obj->sum_data($a,$b,$c);

echo $result;




?>