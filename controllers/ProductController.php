<?php

namespace controllers;

use \models\ProductModel;

class ProductController extends BaseController
{
    public function index(){

        $task = new ProductModel();

        $data = $task->getTable();

        require 'views/index.view.php';

    }
}