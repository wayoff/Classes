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
			if($value[$key] == $name)
			{
				return $value;
			}
		}
		return null;
	}

	public function findByManufacturer($key, $name)
	{
		foreach($this->phones as $value)
		{
			if($value[$key] == $name)
			{
				return $value;
			}
		}
		return null;
	}

	public function sortByManufacturerAsc()
	{
		$sortAsc = array();
		asort($this->phones);
		foreach($this->phones as $value)
		{
			$sortAsc += $value;
		}
	}

	public function update($key,$name)
	{
		foreach($this->phones as $value)
		{
			if($value[$key] == $name)
			{
				$updateArray = [
					'manufacturer' => 'Lenovo',
					'model' => 'Kobe Phones',
					'salary' => 300
				];
				return $updateArray;
			}
		}
	}

	public function delete($key,$name)
	{
		foreach($this->phones as $value)
		{
			if($value[$key] == $name)
			{
				unset($value['manufacturer']);
				unset($value['model']);
				unset($value['salary']);
				return $value;
			}
		}
	}

}