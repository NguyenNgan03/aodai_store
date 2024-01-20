<?php

include 'app\models\Search.php';
include_once dirname(__DIR__) . '/CustomerController.php';

class SearchController extends CustomerController
{
    private $search;

    public function __construct()
    {
        $this->search = new Search;
    }

    public function index()
    {
        $searchResults = [];

        if (isset($_GET['q'])) {
            $query = $_GET['q'];
            $searchResults = $this->search->searchProducts($query);
        }

        parent::template('app\views\users\home\search.php', ['searchResults' => $searchResults]);
    }
}
