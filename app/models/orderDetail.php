<?php
class orderDetail extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function model()
    {
        return "oder_detail";
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
        return $this->insertData($tableName, $params);
    }
}

?>