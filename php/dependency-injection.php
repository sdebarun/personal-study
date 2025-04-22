<?php

// type hinting in php and dependency injection

/**
 * creating a class and type hint it in a function 
 */
class Student
{
	
	public $type = "teneger";
	public $name;
	function __construct($name)
	{
		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}



}


// type hinting the class student in a function

function getStudentName( Student $Student) {
	return $Student->getName();
}

function getStudentType(Student $s){
	return $s->type;
}


$type = getStudentType(new Student('d'));
echo $type;

echo PHP_EOL;

$name = getStudentName(new Student('Debarun'));
echo $name;

