<?php

class Vourcher extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function model()
    {
        return "vourchers";
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

    public function create($user_id, $code, $discount_amount, $status, $description, $expiration_date)
    {
        $tableName = $this->model();
        $params = [
            'user_id' => $user_id,
            'vourcher_code' => $code,
            'discount_amount' => $discount_amount,
            'status' => $status,
            'description' => $description,
            'expiration_date' => $expiration_date,
        ];
        return $this->insertData($tableName, $params);
    }

    public function getVourcherById($vourcher_id)
    {
        $tableName = $this->model();
        $sql = "SELECT * FROM $tableName WHERE id = :vourcher_id";
        $params = [':vourcher_id' => $vourcher_id];
        $data = $this->getDataByQuery($sql, $params);
        return $data;
    }

    public function update($id, $user_id, $code, $discount_amount, $status, $description, $expiration_date)
    {
        $tableName = $this->model();
        $data = [
            'user_id' => $user_id,
            'vourcher_code' => $code,
            'discount_amount' => $discount_amount,
            'status' => $status,
            'description' => $description,
            'expiration_date' => $expiration_date,
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
