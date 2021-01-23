<?php

namespace Classes;

class LandCMS
{
	public $conn;

	function __construct(){
		$this->conn = new \PDO('sqlite:' . DB_NAME);
	}

	function load(){
		$data = file_get_contents('admin/modules.config.dat');
		return unserialize($data);
	}

}
