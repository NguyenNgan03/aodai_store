<?php

// namespace aodai_store\app\models;
// use Database;

class Order extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function model()
    {
        return "orders";
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

    public function create($user_id, $order_date, $shipping_address, $shipping_date, $notes, $payment_status, $shipping_status, $created_at, $updated_at)
    {
        $tableName = $this->model();
        $params = [
            
            'user_id' => $user_id,
            'order_date' => $order_date,
            'shipping_address' => $shipping_address,
            'shipping_date' => $shipping_date,
            'notes' => $notes,
            'payment_status' => $payment_status,
            'shipping_status' => $shipping_status,
            'created_at' => $created_at,
            'updated_at' => $updated_at,
        ];
        return $this->insertData($tableName, $params);
    }

    public function getOrderById($order_id)
    {
        $tableName = $this->model();
        $sql = "SELECT * FROM $tableName WHERE id = :order_id";
        $params = [':order_id' => $order_id];
        $data = $this->getDataByQuery($sql, $params);
        return $data;
    }

    public function update($id, $user_id, $order_date, $shipping_address, $shipping_date, $notes, $payment_status, $shipping_status, $created_at, $updated_at)
    {
        $tableName = $this->model();
        $data = [
            'user_id' => $user_id,  
            'order_date' => $order_date,
            'shipping_address' => $shipping_address,
            'shipping_date' => $shipping_date,
            'notes' => $notes,
            'payment_status' => $payment_status,
            'shipping_status' => $shipping_status,
            'created_at' => $created_at,
            'updated_at' => $updated_at,
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