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
        foreach ($data as $row) {
            $result[] = $row;
        }
        return $result;
    }

    public function create(
        $name,
        $discount_id,
        $category_id,
        $description,
        $price,
        $color,
        $material,
        $size,
        $image1,
        $image2,
        $image3,
        $image4
    ) {
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
        return $this->insertData($tableName, $params);
    }

    public function getProductById($product_id)
    {
        $tableName = $this->model();
        $sql = "SELECT * FROM $tableName WHERE id = :product_id";
        $params = [':product_id' => $product_id];
        $data = $this->getDataByQuery($sql, $params);
        return $data;
    }

    public function getProductByCategoryId($categoryId)
    {
        $tableName = $this->model();
        $sql = "SELECT * FROM $tableName WHERE category_id = :categoryId";
        $params = [':categoryId' => $categoryId];
        $data = $this->getDataByQuery($sql, $params);
        return $data;
    }

    public function getProductDetail($product_id)
    {
        $sql = "SELECT  products.id,
                        products.discount_id,
                        products.name,
                        products.category_id,
                        products.description,
                        products. price,
                        products.color, 
                        products.material,
                        products.size,
                        products.image1,
                        products.image2,
                        products.image3,
                        products.image4,
                        categories.name as category_name,
                        discounts.name as discount_name
                        FROM products
                INNER JOIN categories ON products.category_id = categories.id
                INNER JOIN discounts ON products.discount_id = discounts.id
                WHERE products.id = :product_id
                GROUP BY products.id";
        $params = [':product_id' => $product_id];
        $data = $this->getDataByQuery($sql, $params);
        foreach ($data as $row) {
            return $row;
        }
    }

    public function getProductByPrice($price)
    {
        $tableName = $this->model();
        $sql = "SELECT * FROM $tableName WHERE price >= :price Order by price";
        $params = [':price' => $price];
        $data = $this->getDataByQuery($sql, $params);
        return $data;
    }

    public function update($id, $name, $discount_id, $category_id, $description, $price, $color, $material, $size, $image1, $image2, $image3, $image4)
    {
        $tableName = $this->model();
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
}
