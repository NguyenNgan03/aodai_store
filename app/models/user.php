<?php

// namespace aodai_store\app\models;
// use Database;

class User extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function model()
    {
        return "users";
    }

    public function index()
    {
        $tableName = $this->model();
        $data = $this->getAll($tableName);
        $result = [];
        foreach($data as $row){
            $result[] = $row;
        }
        return $result;
    }

    // public function getAllProducts()
    // {
    //     $sql = 'SELECT * FROM products';
    //     $result = $this->query($sql);
    //     return $result;
    // }

    
    public function create ($name, $email, $phone, $role)
    {
        $tableName = $this->model();
        $params = [ 
            'username' => $name, 
            'email' => $email,
            'phone' => $phone,
            'role' => $role,
        ];
        return $this->insertData($tableName,$params);
    }

    ///

    public function getUserById($user_id){
        $tableName = $this->model();
        $sql = "SELECT * FROM $tableName WHERE id = :user_id";
        $params = [':user_id' => $user_id];
        $data = $this->getDataByQuery($sql, $params);
        return $data;
       
    }

    public function update($id, $name, $email, $phone, $role)
    {
        $tableName = $this -> model();
        $data = [
            'username' => $name, 
            'email' => $email,
            'phone' => $phone,
            'role' => $role,
        ];
        $condition = "id = :id";
        $params = [':id' => (int)$id];

        return $this->updateData($tableName, $data, $condition, $params);

    }
    
    public function delete($id)
    {
        $tableName = $this->model();
        $condition = "id = :id";
        $params = [':id' => (int)$id];

        return $this->deleteData($tableName, $condition, $params);
    }
}
