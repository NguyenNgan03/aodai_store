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

    public function getCategoryById($category_id)
    {
        $tableName = 'categories';
        $sql = "SELECT * FROM $tableName WHERE id = :category_id";
        $params = [':category_id' => (int)$category_id];
        $data = $this->getDataByQuery($sql, $params);

        foreach ($data as $value) {
            return $value;
        }

        return null;
    }

    public function addCategory($param = [])
    {
        $sql = "INSERT INTO categories (name) VALUES (:name)";
        $result = $this->query($sql, $param);
        return $result;
    }

    public function updateCategory($param = [])
    {

        $sql = "UPDATE categories SET 
        name = :name
         WHERE id    = :id";
        $result = $this->query($sql, $param);
        return $result;
    }

    public function delete($id)
    {
        $tableName = 'categories';
        $condition = "id = :id";
        $params = [':id' => (int)$id];

        return $this->deleteData($tableName, $condition, $params);
    }
}
