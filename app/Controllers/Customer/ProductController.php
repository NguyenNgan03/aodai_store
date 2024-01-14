<?php

// use aodai_store\app\models\Product;

include 'app\models\Product.php';
include 'app\models\Category.php';
include_once dirname(__DIR__) . '/CustomerController.php';


class ProductController extends CustomerController
{
    // private $product;
    // private $category;

    // public function __construct() {
    //     $this->product = new Product;
       
    // }
    
    public function index()
    {
        $categories = new Category();
        $data['categories'] = $categories->getAllCategories();
        
        $categoryId = isset($_GET["CategoryId"]) ? $_GET["CategoryId"] : null;
        $price= isset($_POST["price"]) ? $_POST["price"] : null;
        
        $product = new Product();
        if($categoryId)
        $data['products'] = $product->getProductByCategoryId($categoryId);
        else if($price)
        $data['products'] = $product->getProductByPrice($price);
        else
        $data['products'] = $product->index();
        parent::template('app\views\users\Products\products.php',$data);
        
    }

    function create()
    {
    }

    function store()
    {
    }
    public function category(){
        
    }

    public function detail()
    {
        parent::template('app\views\users\Products\detail.php');
    }
}