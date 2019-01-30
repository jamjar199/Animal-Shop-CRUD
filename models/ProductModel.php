<?php

namespace models;

class ProductModel extends BaseModel
{
    public function insertAnimal($data){
        return $this->db->insert('product', ['age', 'price', 'species', 'status'], [$data['age'], $data['price'], $data['species'], true ]);
    }

    public function selectAnimals($limit = 10){
        return $this->db->select('product', ['id', 'age', 'price', 'species'], 'status = 1', $limit);
    }

    public function selectAnimal($id){

        if ($id == null){
            return false;
        }

        return $this->db->select('product', ['id', 'age', 'price', 'species', 'status'], "id = {$id}", '1');
    }

    public function editAnimal($data){

        if (empty($data)){
            return false;
        }

        return $this->db->update('product', ['age', 'price', 'species'], [$data['age'], $data['price'], $data['species']], "id = {$data['id']}", '1');

    }

    public function deleteAnimal($id){

        if ($id == null){
            return false;
        }

        return $this->db->delete('product', "id = {$id}", '1');
    }

    public function deactivateAnimal($id){

        return $this->db->update('product', ['status'], ['0'], "id = {$id}", '1');

    }

    public function activateAnimal($id){

        return $this->db->update('product', ['status'], ['1'], "id = {$id}", '1');

    }

}