<?php

// use aodai_store\app\models\Product;

include 'app\models\Product.php';
include 'app\models\Category.php';
include 'app\models\Discount.php'; 
include 'app\models\Comment.php'; 

class ProductController extends CustomerController
{
    private $product;
    
    public function __construct() {
        $this->product = new Product;
    }
    
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
    
    public function detail()
    {
        if (isset($_GET['id'])) {
        $comment = new Comment();
        $data['products'] = $this->product->getProductDetail($_GET['id']); 
        $data['comments']  = $comment->getCommentByProductId($_GET['id']);
        parent::template('app\views\users\products\detail.php', $data);
        }else{
            echo 'lỗi ko bắt đc id';
        }
    }
}