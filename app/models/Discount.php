<?php
class Discount extends Database
{
    public function getAllDiscounts()
    {
        $sql = 'SELECT * FROM discounts';
        $result = $this->query($sql);
        return $result;
    }

    public function getDiscount($param = [])
    {
        $sql = "SELECT * FROM discounts where id = :id";
        $result = $this->query($sql, $param);
        return $result;
    }

    public function addDiscount($param = [])
    {
        $sql = 'INSERT INTO discounts (name, discount_rate, start_date, end_date, created_at, updated_at ) 
        VALUES (:name, :discount_rate, :start_date, :end_date ,:created_at, :updated_at)';
        $result = $this->query($sql, $param);
    }

    public function updateDiscount($param = [])
    {
        $sql = 'UPDATE discounts SET name = :name, discount_rate = :discount_rate, start_date = :start_date, end_date = :end_date,  updated_at = :updated_at WHERE id = :id';
        $this->query($sql, $param);
    }

    public function deleteDiscount($param = [])
    {
        $sql = "DELETE FROM discounts WHERE id = :id";
        $result = $this->query($sql, $param);
    }
}