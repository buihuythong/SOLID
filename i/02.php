<?php
require_once '01.php';
require_once '03.php';

class Student implements Person,Helper
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

	public function checkAge($age)
	{
		$flag = ($age >= 18) ? true : false;
		return $flag;
	}

}