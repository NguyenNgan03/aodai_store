<?php

// use aodai_store\app\models\Product;

include 'app\models\Product.php';
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
        $product = new Product();
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