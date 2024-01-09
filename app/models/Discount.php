<?php
class Discount extends Database
{
    public function getAllDiscounts()
    {
        $sql = 'SELECT * FROM discounts';
        $result = $this->query($sql);
        return $result;
    }

    public function getDiscount($id)
    {
        $sql = "SELECT * FROM discounts where id = :id";
        $params = [':id' => (int)$id];
        $result = $this->query($sql, $params);
        return $result;
    }

    public function addDiscount($param = [])
    {
        $sql = 'INSERT INTO discounts (name, discount_rate, start_date, end_date) 
        VALUES (:name, :discount_rate, :start_date, :end_date)';
        $result = $this->query($sql, $param);
        return $result;
    }

    public function updateDiscount($param = [])
    {
        $sql = 'UPDATE discounts SET name = :name, discount_rate = :discount_rate, start_date = :start_date, end_date = :end_date WHERE id = :id';
        $result = $this->query($sql, $param);
        return $result;
    }

    public function deleteDiscount($id)
    {
        $sql = "DELETE FROM discounts WHERE id = :id";
        $params = [':id' => (int)$id];
        $result = $this->query($sql, $params);
        return $result;
    }
}
