<?php

// use Database;

class Category extends Database
{

    public function getAllCategories()
    {
        $sql = "SELECT * FROM categories ORDER BY created_at DESC ";
        $result = $this->query($sql);
        return $result;
    }

    public function getCategory($param = [])
    {
        $sql = "SELECT * FROM categories where id = :id";
        $result = $this->query($sql, $param);
        return $result;
    }

    public function addCategory($param = [])
    {
        $sql = "INSERT INTO categories 
        (name, created_at, updated_at)
         VALUES (:name, :created_at, :updated_at)";
        $result = $this->query($sql, $param);
        return $result;
    }

    public function updateCategory($param = [])
    {
        $sql = "UPDATE categories SET 
        name = :name,
        updated_at = :updated_at
         WHERE id    = :id";
        $result = $this->query($sql, $param);
        return $result;
    }

    public function deleteCategory($param = [])
    {
        $sql = "DELETE FROM categories WHERE id = :id";
        $result = $this->query($sql, $param);
        return $result;
    }
}
