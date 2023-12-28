<?php
class Home
{
    public function index()
    {
        include 'app\views\users\home\homePage.php';
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
