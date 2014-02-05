<?php

class Identity extends CUserIdentity {
	public function getName() {
		return $this->getState('name');
	}
	
	public function getId() {
		return $this->getState('id');
	}
} 