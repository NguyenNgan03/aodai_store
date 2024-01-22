<?php
class orderDetail extends Database
{

    public function __construct()
    {
        parent::__construct();
    }

    public function model()
    {
        return "order_detail";
    }

    public function createOrderDetail($order_id, $product_id, $quantity, $price)
    {
        $tableName = $this->model();
        $params = [
            'order_id' => $order_id,
            'product_id' => $product_id,
            'quantity' => $quantity,
            'price' => $price
        ];
        $this->insertData($tableName, $params);
    } 

    public function getOrderInfo($order_id)
    {
        $tableName = $this->model();
        $sql = "SELECT * FROM $tableName WHERE id = :order_id";
        $params = [':order_id' => $order_id];
        $data = $this->getDataByQuery($sql, $params);
        return $data;
    }
}

?>