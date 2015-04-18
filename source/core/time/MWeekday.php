<?php

namespace simpleserv\webfilesframework\core\time;

use simpleserv\webfilesframework\core\datasystem\file\format\MWebfile;


class MWeekday extends MWebfile {
	
	private $name;
	
	public function __construct($id,$name) {
		$this->m_iId = $id;
		$this->name = $name;
	}
	
	public function getName() {
	  return $this->name;
	}
	
	public function setName($name) {
	  $this->name = $name;
	}
	
	public function __toString() {
		return $this->name;
	}
	
}