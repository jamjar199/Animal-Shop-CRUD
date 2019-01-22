<?php

namespace controllers;

class BaseController
{

    public function __construct($method)
    {
        if (method_exists($this, $method)){
            $this->$method();
        }else{
            die("No method found in controller");
        }
    }

}