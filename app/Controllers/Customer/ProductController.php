<?php
class ProductController extends CustomerController
{
    function index()
    {
        parent::template('app\views\users\Products\products.php');
    }

    function create()
    {
    }

    function store()
    {
    }

    public function detail()
    {
        parent::template('app\views\users\Products\detail.php');
    }
}
