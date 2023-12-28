<?php
class HomeController extends CustomerController
{
    public function index()
    {
        parent::template('app\views\users\home\homePage.php');
    }
    public function detail($id = "", $slug = "")
    {

        echo 'id san phan ' . $id . '<br>';
        echo 'slug ' . $slug . '<br>';
    }
    public function search()
    {
        $keyword = $_GET["keyword"];
        echo "từ khóa cần tìm: " . $keyword;
    }
}
