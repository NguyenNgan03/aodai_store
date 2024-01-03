<?php

class Database
{
    private $host = "localhost";
    private $dbname = "aodaistore_sql";
    private $user = "root";
    private $password = "";
    private $connection;

    public function __construct()
    {
        $this->connection = $this->connect();
    }

    private function connect()
    {
        try {
            // $connect = new PDO("mysql:host=$host;dbname=$$dbname", $user, $password);
            $connection = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->user, $this->password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch (PDOException $e) {
            throw new Exception("Lỗi kết nối cơ sở dữ liệu: " . $e->getMessage());
        }
    }

    public function query($sql, $params = [])
    {
        try {
            $statement = $this->connection->prepare($sql);
            $statement->execute($params);
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception("Lỗi truy vấn cơ sở dữ liệu: " . $e->getMessage());
        }
    }
}

// Ví dụ sử dụng:
// $db = new Database();

// Lấy tất cả dữ liệu từ bảng users
// $users = $db->query('SELECT * FROM users');
// print_r($users);

// Lấy tất cả dữ liệu từ bảng categories
// $categories = $db->query('SELECT * FROM categories');
// print_r($categories);

// Tương tự, bạn có thể sử dụng hàm query cho các truy vấn SELECT khác trong cơ sở dữ liệu của bạn.
