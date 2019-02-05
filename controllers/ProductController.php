<?php

namespace controllers;

use \models\ProductModel;

class ProductController extends BaseController
{
    public function index($responseText = null){

        $product = new ProductModel();

        $data = $product->selectAnimals(15);

        require 'views/index.view.php';

    }

    public function addProductForm(){
        $responseText = "";

        require 'views/insert.view.php';
    }

    public function addProduct(){

        $data['age'] = $_POST['age'];
        $data['species'] = $_POST['species'];
        $data['price'] = $_POST['price'];

        unset($_POST);

        $product = new ProductModel();

        $response = $product->insertAnimal($data);

        if ($response == true){
            $responseText = "Animal was successfully added!";
        }else{
            $responseText = "An error has occurred, the Animal was not added";
        }

        $this->index($responseText);
    }

    public function selectProduct(){

        $id = $_GET['id'];

        $product = new ProductModel();

        $response = $product->selectAnimal($id);

        if ($response == false){
            $data = "An error has occurred, the Animal was not found";
        }

        $animal = $response[0];

        require 'views/get.view.php';

    }

    public function editProductForm(){

        $id = $_GET['id'];

        $product = new ProductModel();

        $response = $product->selectAnimal($id);

        if ($response == false){
            $data = "An error has occurred, the Animal was not found";
        }

        $animal = $response[0];
        $responseText = "";

        require 'views/edit.view.php';

    }

    public function editProductSubmit(){

        $product = new ProductModel();

        $data = $_POST;

        $response = $product->editAnimal($data);

        if ($response == true){
            $responseText = "Animal was successfully updated!";
            $this->index($responseText);
        }else {
            $responseText = "An error has occurred, the Animal was not updated";
            require 'views/edit.view.php';
        }
    }

    public function deleteAnimal(){

        $product = new ProductModel();

        $id = $_POST['id'];

        $response = $product->deleteAnimal($id);

        if ($response == true){
            $responseText = "Animal was successfully deleted!";
        }else{
            $responseText = "An error has occurred, the Animal was not deleted";
        }

        require 'views/index.view.php';
    }

    public function deactivateAnimal(){

        $product = new ProductModel();

        $id = $_POST['id'];

        $response = $product->deactivateAnimal($id);

        if ($response == true){
            $responseText = "Animal was successfully deactivated!";
        }else{
            $responseText = "An error has occurred, the Animal was not deactivated";
        }

       $this->index();
    }

    public function activateAnimal(){

        $product = new ProductModel();

        $id = $_POST['id'];

        $response = $product->activateAnimal($id);

        if ($response == true){
            $responseText = "Animal was successfully activated!";
        }else{
            $responseText = "An error has occurred, the Animal was not activated";
        }

        $this->index();
    }

}