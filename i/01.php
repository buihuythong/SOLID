<?php
interface Person {
	public function setAge($age);
	public function setFullName($fullname);
	public function setAddress($address);
	public function getFullName();
	public function getAge();
	public function getAddress();
}