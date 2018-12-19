<?php

require_once '01.php';

use Help\Help;

class RunNumber {

	private $number1;
	private $number2;

	

	public function setDataForNumber($num1, $num2)
	{
		$this->check = new Help();

		if($this->check->checkNumber($num1))
		{
			$this->number1 = $num1;
		}

		if($this->check->checkNumber($num2))
		{
			$this->number2 = $num2;
		}
	}

	public function showAllNumber()
	{
		echo "Số thứ nhất là : " . $this->number1 . "<br>";
		echo "Số thứ hai là : " . $this->number2 . "</br>";
	}
}

$num = new RunNumber;
$num->setDataForNumber(2, 'ABC');
$num->showAllNumber();