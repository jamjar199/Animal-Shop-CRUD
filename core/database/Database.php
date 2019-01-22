<?php

class Database{
	
	public static function connect(){

	    $config = require 'config.php';
	    $config = $config['database'];

		try {
			return new PDO(
				$config['connection'].':host='.$config['host'].';dbname='.$config['dbname'],
				$config['user'], 
				$config['password'],
				$config['options']
			);
		} catch (PDOException $e) {
		    throw new PDOException($e);
		}

	}

}