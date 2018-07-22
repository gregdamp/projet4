<?php

namespace App\Entity;

class Article
{
	private $name;

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
	}
}