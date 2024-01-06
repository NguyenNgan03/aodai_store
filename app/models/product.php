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
        return "categories";
    }

    public function getAllProducts()
    {
        $sql = 'SELECT * FROM products';
        $result = $this->query($sql);

        return $result;
    }

    public function getProductById($produc_id){
        $sql = 'SELECT * FROM products WHERE id = :$produc_id';
        

    }

    public function addProduct($data)
    {
        if ($data) {
            $sql = 'INSERT INTO products (name, discount_id, category_id, description, price, color, material, size, image1, image2, image3, image4) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
            $params = [
                $data['name'], $data['discount_id'], $data['category_id'], $data['description'],
                $data['price'], $data['color'], $data['material'], $data['size'],
                $data['image1'], $data['image2'], $data['image3'], $data['image4'],
            ];
            try{
                $this->query($sql,$params);
                return true;
            }
            catch(Exception $e){
                echo'Lỗ thêm sản phẩm '. $e->getMessage();
            }
        }
        return false;
    }

    public function updateProduct($id, $name)
    {
        $sql = 'UPDATE products SET name = ? WHERE id = ?';
        $params = [$name, $id];
        $this->query($sql, $params);
    }



    public function deleteProduct($id)
    {
        $sql = 'DELETE FROM products WHERE id = ?';
        $params = [$id];
        $this->query($sql, $params);
    }
}
