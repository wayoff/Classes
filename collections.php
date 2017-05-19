<?php
class Collection
{	
	protected $items = [];

	public function __construct($items) {
		$this->items = $items;	
	}

	public function where($key, $name) {
		foreach ($items as $item) {
			if ($item[$key] == $name ) {
				return $item;
			}
		}

		return null;
	}

	public function all() {
		return $this->items;
	}
}