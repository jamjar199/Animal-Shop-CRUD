<?php

return [
	'database' => [
		'dbname' => 'animal',
		'user' => 'animal',
		'password' => 'password',
		'host' => '192.168.0.12',
		'connection' => 'mysql',
		'options' => [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]
	]
];