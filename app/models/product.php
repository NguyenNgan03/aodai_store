<?php

// use database;


class Products extends Database
{
    public function getAllProducts()
    {
        $sql = 'SELECT * FROM products';
        $result = $this->query($sql);

        return $result;
    }

}
