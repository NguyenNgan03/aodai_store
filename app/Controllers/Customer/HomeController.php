<?php
include 'app\models\Product.php';
include 'app\models\Category.php';
include_once dirname(__DIR__) . '/CustomerController.php';

class HomeController extends CustomerController
{
    public function index()
    {
        $product = new Product();
        $data['products_outstanding'] =  $product->getProductByCategoryId(8);
        $data['products_selling'] =  $product->getProductByCategoryId(7);
        parent::template('app\views\users\home\homePage.php', $data);
    }

    public function products()
    {
        parent::template('app\views\users\Products\products.php');
    }
    
    public function about()
    {
        parent::template('app\views\users\home\about.php');
    }

    public function contact()
    {
        parent::template('app\views\users\home\contact.php');
    }

    public function profile()
    {
        parent::template('app\views\users\profile\index.php');
    }

    public function cart()
    {
        parent::template('app\views\users\cart\cart.php');
    }

    public function editProfile()
    {
        parent::template('app\views\users\profile\editProfile.php');
    }
}
