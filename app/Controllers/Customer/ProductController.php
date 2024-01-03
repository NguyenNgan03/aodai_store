<?php

// use aodai_store\app\models\Product;
include 'app\models\Product.php';

class ProductController extends CustomerController
{
    private $product;
    private $category;

    public function __construct() {
        $this->product = new Product;
       
    }
    
    public function index()
    {
        $data = $this->product->getAllProducts();
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