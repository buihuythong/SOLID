<?php

namespace Student;

class Person 
{

	private $fullname;
	private $age;
	private $address;


	public function setFullName($fullname)
	{
		$this->fullname = $fullname;
	}

	public function setAge($age)
	{
		$this->age = $age;
	}

	public function setAddress($address)
	{
		$this->address = $address;

	}

	public function getFullName()
	{
		return $this->fullname;
	}

	public function getAge()
	{
		return $this->age;
	}

	public function getAddress()
	{
		return $this->address;

	}

}

class Student extends Person {
	public function showInfo()
	{
		echo "Tên của bạn là : " . parent::getFullName();
	}
}


$st1 = new Student;

$st1->setFullName('Bùi Huy Thống');
$st1->showInfo();
