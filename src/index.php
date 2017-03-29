<?php

namespace Apitool;

class Test
{
	protect $username;
	public function __construct(){
		$this->username = 'yhb';
	}
	public function say(){
		echo $this->username;
	}
}
