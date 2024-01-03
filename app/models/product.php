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

}
