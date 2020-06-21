<?php
class operation{
	
	 
	function add($a,$b){
		$c=$a+$b;
		return $c;

	}
	function sub($a,$b){
				$c=$a-$b;
			return $c;

	}
	function mul($a,$b){		
		$c=$a*$b;
		return $c;
		
	}
	function div($a, $b){
				$c=$a/$b;
		return $c;
	}
}

$obj = new operation();
$a=3;
$b=5;
 echo $obj->add($a,$b);
 echo "<br>". $obj->sub($a,$b);
echo "<br>". $obj->mul($a,$b);
echo "<br>". $obj->div($a,$b);
?>