<?php
include 'app\models\Product.php';
// use aodai_store\app\models\Product;

// use aodai_store\app\models\Product;

class HomeController extends CustomerController
{
    private $product;
    private $category;

    // public function __construct()
    // {
    //     $this->product = new Product;
    //     $this->category = new Category;
    // }

    public function index()
    {
        $product = new Product();
        $data['products'] =  $product->getAllProducts();
        parent::template('app\views\users\home\homePage.php', $data);
    }

    public function products()
    {
        parent::template('app\views\users\Products\products.php');
    }

    public function information()
    {
        parent::template('app\views\users\home\about.php');
    }

    public function contact()
    {
        parent::template('app\views\users\home\contact.php');
    }

    public function profile()
    {
        parent::template('app\views\users\home\profile.php');
    }

    public function search()
    {
        $keyword = $_GET["keyword"];
        echo "từ khóa cần tìm: " . $keyword;
    }
}
