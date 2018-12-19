<?php

namespace Help;

class Help {

	public function checkNumber($num)
	{
		$result = false;

		if(is_numeric($num) == true)
		{
			$result = true;
		}

		return $result;
	}
}
