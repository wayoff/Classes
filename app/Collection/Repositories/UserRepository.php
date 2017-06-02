<?php namespace Collection\Repositories; 

class UserRepository
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

	public function getLastId()
	{

		$lastId;

		if(!empty($this->persons))
		{

			foreach($this->persons as $person)
			{
				$lastId = $person['id'];
			}
			return $lastId;
			
		}
		$lastId = 0;
		return $lastId;
	}

	public function update($key,$value)
	{
		foreach($this->persons as $person)
		{
			if($person[$key] == $value)
			{
				$person['first_name'] = 'Charlotte';
				$person['last_name'] = 'Fheir';
				
				return $this->persons;
			}
		}
		return null;
	}

	public function delete($key,$value)
	{

		foreach($this->persons as $person)
		{

			if($person[$key] == $value)
			{

				$deleted = array_splice($person, 0,0);
				return $this->persons;
			}

		}
		return null;
	}

	public function create($creation)
	{
		$add = array_push($this->persons,$creation);
		return $this->persons;
	}

	public function sortAscending($key)
	{
		$sortAsc = [];

		if($key == 'first_name')
		{

			sort($this->persons);
			foreach($this->persons as $sort)
			{	
				return $this->persons;

			}
			return null;

		}

		krsort($this->persons);
		foreach($this->persons as $rsort)
		{
			return $this->persons;
		}
	
	}

}