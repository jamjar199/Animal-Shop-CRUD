<?php

/**
 * 
 */
class Router
{
	
	public $routes = [
		'GET' => [],
		'POST' => []
	];

	public $method;

	public static function load($file){
		$router = new static;
		require $file;
		return $router;
	}

	function direct($uri, $requestType)
	{
		if (array_key_exists($uri, $this->routes[$requestType])) {
			return $this->routes[$requestType][$uri];
		}

		die("No route defined for this uri");
	}

	function get($uri, $controller)
	{
		$this->routes['GET'][$uri] = $controller;
	}

	function post($uri, $controller)
	{
	    $this->routes['POST'][$uri] = $controller;
    }

    function getMethod(){
	    return $this->method;
    }
}