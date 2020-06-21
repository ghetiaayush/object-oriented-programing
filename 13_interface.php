<?php

/**
 * 
 */



interface A{

	public function m1();
		public function m2();
		
}



interface B{

	public function m3();
		public function m4();
		
}





class Base implements A,B {     // All Interface method implement


	public function m1() 
	{
		echo "yes i n in m1";
	}

	public function m2()    
	{

	}

	public function m3()
	{

		
	}

	public function m4()
	{

	}



}

$obj = new Base();

$obj->m1();


?>