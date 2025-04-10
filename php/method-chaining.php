<?php
// method chaining - custom method chaining 

/**
 * 
 */
class Student 
{
	
	function __construct()
	{
		// code...
	}

	public function makeName() {
		echo 'Debarun Saha ';
		return $this;
	}

	public function makeWork() {
		echo 'works in IT';
		return $this;
	}

	public function retNull(){
		return null;
	}
}


$student = new Student();

$student->makeName()->makeWork();
// $student->makeName()->retNull()->makeWork(); //~ will throw a calling on null fatal error 
