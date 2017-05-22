<?php
class Persons
{
	protected $person = [];

	function __construct($person)
	{
		$this->persons = $person;
	}

	public function all()
	{
		return $this->persons;
	}

	public function where($key,$value)
	{
		foreach($this->persons as $person)
		{
			if($person[$key] == $value)
			{
				return $person;
			}
		}
		return null;
	}

	public function update($key,$value)
	{
		foreach($this->persons as $person)
		{
			if($person[$key] == $value)
			{
				$updatePerson = $this->persons = [
					'first_name' => 'Charlotte',
					'last_name' => 'fheir'
				];
				return $updatePerson;
			}
		}
		return null;
	}

}