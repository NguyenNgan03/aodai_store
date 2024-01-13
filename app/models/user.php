<?php

// namespace aodai_store\app\models;
// use Database;

class User extends Database
{
    private $user;
    public function __construct()
    {
        parent::__construct();
    }

    public function model()
    {
        return "users";
    }

    public function getUser($username, $password)
    {
        $tableName = $this->model();
        $params = [
            "username" => $username
        ];

        $data = $this->getData($tableName, $params);
        $result = array();
        foreach ($data as $row) {
            $result = $row;
        }
        if ($result && password_verify($password, $result['password'])) {
            return $result;
        } else {
            return null;
        }
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

    
    public function create ($name,$password, $email, $phone, $role)
    {
        $tableName = $this->model();
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $params = [ 
            'username' => $name, 
            'password' => $hashedPassword,
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

    public function getUserByUsername($username)
    {
        $stmt = $this->user->getConnection()->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);

        $stmt->execute();
        $result = $stmt->get_result();

        $user = $result->fetch_assoc();

        return $user;
    }

    public function update($id, $name,$password, $email, $phone, $role)
    {
        $tableName = $this -> model();
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $data = [
            'username' => $name, 
            'password'=>$hashedPassword,
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
