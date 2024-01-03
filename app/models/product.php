<?php
// namespace aodai_store\app\models;

// use Database;

class Product extends Database
{
    public function getAllProducts()
    {
        $sql = 'SELECT * FROM products';
        $result = $this->query($sql);

        return $result;
    }

    public function addProduct($id)
    {
        $sql = 'INSERT INTO product (id) VALUES (?)';
        $params = [$id];
        $this->query($sql, $params);
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
