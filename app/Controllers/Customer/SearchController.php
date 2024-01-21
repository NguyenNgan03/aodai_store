<?php
include 'app\models\Search.php';
include 'app\models\product.php';

class SearchController extends CustomerController
{
    private $search;

    public function __construct()
    {
        $this->search = new Search;
    }

    public function index()
    {
        $searchResults = null;

        if (isset($_POST['q'])) {
            $query = $_POST['q'];
            $searchResults = $this->search->searchProducts($query);
        }

        parent::template('app\views\users\search\index.php', ['searchResults' => $searchResults]);
    }
}
