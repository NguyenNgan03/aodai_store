<?php
include 'aodai_store\app\models\Product.php';
class ProductContrller extends AdminController
{
    private $product;

    public function __construct() {
        $this->product = new Product;
    }

    public function index(){
        $data = $this->product->getAllProducts();
        parent::template('aodai_store\app\views\admin\product\index.php');
    }

    public function create(){
        
    }

}