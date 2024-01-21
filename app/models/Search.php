<?php
class Search extends Database
{
    private $db;

    public function __construct()
    {
        parent::__construct();
        $this->db = $this->getConnection();
    }

    public function model()
    {
        return "products";
    }

    public function searchProducts($query)
    {
        try {
            $sql = "SELECT * FROM products WHERE name LIKE :query";
            $params = ['query' => '%' . $query . '%'];

            $statement = $this->db->prepare($sql);
            $statement->execute($params);

            $results = $statement->fetchAll(PDO::FETCH_ASSOC);

            return $results;
        } catch (Exception $e) {
            // Ghi log hoặc hiển thị lỗi để kiểm tra
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }
}
