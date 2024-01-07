<?php

// namespace aodai_store\app\models;
// use Database;

class Product extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function model()
    {
        return "products";
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

    
    public function create ($name, $discount_id, $category_id, $description, $price, $color, $material, $size, $image1, $image2, $image3, $image4)
    {
        $tableName = $this->model();
        $params = [
            'name' => $name, 
            'discount_id' => $discount_id, 
            'category_id' => $category_id, 
            'description' => $description, 
            'price' => $price, 
            'color' => $color, 
            'material' => $material, 
            'size' => $size, 
            'image1' => $image1, 
            'image2' => $image2, 
            'image3' => $image3, 
            'image4' => $image4,
        ];
        return $this->insertData($tableName,$params);
    }

    ///

    public function getProductById($product_id){
        $tableName = $this->model();
        $sql = "SELECT * FROM $tableName WHERE id = :product_id";
        $params = [':product_id' => $product_id];
        $data = $this->getDataByQuery($sql, $params);
        return $data;
       
    }

    public function update($id, $name, $discount_id, $category_id, $description, $price, $color, $material, $size, $image1, $image2, $image3, $image4)
    {
        $tableName = $this -> model();
        $data = [
            'name' => $name, 
            'discount_id' => $discount_id, 
            'category_id' => $category_id, 
            'description' => $description, 
            'price' => $price, 
            'color' => $color, 
            'material' => $material, 
            'size' => $size, 
            'image1' => $image1, 
            'image2' => $image2, 
            'image3' => $image3, 
            'image4' => $image4,
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
    

    ///

    // public function deleteProduct($id)
    // {
    //     $sql = 'DELETE FROM products WHERE id = ?';
    //     $params = [$id];
    //     $this->query($sql, $params);
    // }
}
