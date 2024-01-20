<?php
class Search extends Database {
    private $db;

    public function __construct()
    {
        parent::__construct();
    }

    public function model()
    {
        return "search";
    }

    public function searchProducts($query) {
        // Using a LIKE query to search for products containing the given name
        $sql = "SELECT * FROM products WHERE name LIKE :query";
        $params = ['query' => '%' .$query. '%'];

        // Execute the query
        $results = $this->db->query($sql, $params);

        return $results;
    }
}
