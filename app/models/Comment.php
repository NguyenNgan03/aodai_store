<?php

class Comment extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function model()
    {
        return "comments";
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

    public function create($content)
    {
        $tableName = $this->model();
        $params = [
            'content' => $content,
        ];
        return $this->insertData($tableName, $params);
    }

    public function getCommentById($comment_id)
    {
        $tableName = $this->model();
        $sql = "SELECT * FROM $tableName WHERE id = :comment_id";
        $params = [':comment_id' => $comment_id];
        $data = $this->getDataByQuery($sql, $params);
        return $data;
    }

    public function update($id, $product_id, $user_id, $content)
    {
        $tableName = $this->model();
        $data = [
            'product_id' => $product_id,
            'user_id' => $user_id,
            'content' => $content,
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
