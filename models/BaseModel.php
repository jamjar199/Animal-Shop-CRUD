<?php

namespace models;

class BaseModel
{

    protected $table; //The table associated with the model.
    protected $db;

    public function __construct(){
        $this->table = get_class($this);
        $this->db = new \QueryBuilder(\Database::connect());
    }

    public function getTable(){
        $table = explode('\\', $this->table);
        return preg_replace('/Model$/', '',  $table[1]);
    }

}