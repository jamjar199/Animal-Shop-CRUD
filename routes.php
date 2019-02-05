<?php


$router->get('', 'ProductController@index');

$router->get('insert', 'ProductController@addProductForm');
$router->post('insert', 'ProductController@addProduct');

$router->get('get', 'ProductController@selectProduct');

$router->get('edit', 'ProductController@editProductForm');
$router->post('edit', 'ProductController@editProductSubmit');

$router->post('delete', 'ProductController@deleteAnimal');
$router->post('deactivate', 'ProductController@deactivateAnimal');
$router->post('activate', 'ProductController@activateAnimal');