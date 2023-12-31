<?php
class HomeController extends CustomerController
{
    public function index()
    {
        parent::template('app\views\users\home\homePage.php');
    }
    public function products(){
        parent::template('app\views\users\Products\products.php');
       
    }
    public function information(){
        parent::template('app\views\users\home\about.php');
    }
    public function contact(){
        parent::template('app\views\users\home\contact.php');
    }
    public function profile(){
        parent::template('app\views\users\home\profile.php');
    }
    public function search()
    {
        $keyword = $_GET["keyword"];
        echo "từ khóa cần tìm: " . $keyword;
    }
}
