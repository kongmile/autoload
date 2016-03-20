<?php

class Autoload {

	private $class = '';

	public function __construct($class){
		$this->class = $class;
		$this->loadClass();
	}

	public function loadClass () {
		$path = $this->generatePath();
		$this->includeFile($path);
	}

	public function generatePath () {
		return $path = $this->class.'.class.php';
	}

	public function includeFile ($path) {

		if (file_exists($path)) {
			require $path;
		} else {
			throw new Exception("not found ".$path);
		}
		
	}
}