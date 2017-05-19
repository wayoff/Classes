<?php

class phones
{
	protected $phones = [];

	function __construct($phones)
	{
		$this->phones = $phones;
	}

	public function all(){
		return $this->phones;
	}

	public function avg($key)
	{
		$total = count($this->phones);
		$sum = 0;

		foreach ($this->phones as $phone) {
			$sum += $phone[$key];
		}

		return $sum / $total;
	}

	public function findByModel($key,$name)
	{
		foreach ($this->phones as $value)
		{
			if($value['model'] == $name)
			{
				return $value;
			}
		}
	}

	public function findByManufacturer($key, $name)
	{
		foreach($this->phones as $value)
		{
			if($value['manufacturer'] == $name)
			{
				return $value;
			}
		}

	}

	

}