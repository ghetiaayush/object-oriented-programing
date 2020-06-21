<?php
/**
 * 
 */

// "select * from $tbl where id = 1";


class ClassName 
{

	public $sql ;

	public function select($a)
	{

		$this->sql .= "SELECT". $a ;

		//echo $this->sql;

		return $this;

	}

	public function tbl($a)
	{

		$this->sql .= "FROM". " ".$a ;

		//echo $this->sql;

		return $this;

	}

	public function condition($a)
	{

		$this->sql .= "WHERE". " ".'id='.$a  ;

		//echo $this->sql;

		return $this;

	}




	

}

$ob = new ClassName();

$ob->select("*")->tbl("user")->condition("1");

print_r($ob);



?>