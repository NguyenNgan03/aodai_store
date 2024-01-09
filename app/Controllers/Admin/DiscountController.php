<?php

include 'app\models\Discount.php';
include dirname(__DIR__) . '/AdminController.php';
class DiscountController extends AdminController
{
    private $discount;

    public function __construct()
    {
        $this->discount = new Discount;
    }

    public function index()
    {
        $discounts =  $this->discount->getAllDiscounts();
        parent::template("app/views/admin/discounts/index.php", compact("discounts"));
    }

    public function create()
    {
        parent::template("app/views/admin/discounts/create.php");
    }

    public function validateForm($data)
    {
        $errors = '';
        if (empty($data['name'])) {
            $errors = "Vui lòng nhập thông tin.";
        }
        if (empty($data['discount_rate'])) {
            $errors = "Vui lòng nhập thông tin.";
        }
        if (empty($data['start_date'])) {
            $errors = "Vui lòng nhập thông tin.";
        }
        if (empty($data['end_date'])) {
            $errors = "Vui lòng nhập thông tin.";
        }
        return $errors;
    }

    public function createPost()
    {
        $discount_name = isset($_POST['name']) ?  $_POST['name'] : "";
        $discount_rate = isset($_POST['discount_rate']) ?  $_POST['discount_rate'] : "";
        $start_date = isset($_POST['start_date']) ?  $_POST['start_date'] : "";
        $end_date = isset($_POST['end_date']) ?  $_POST['end_date'] : "";
        $params = [
            ":name" =>  $discount_name,
            ":discount_rate" => $discount_rate,
            ":start_date" => $start_date,
            ":end_date" => $end_date,
        ];
        $errors = $this->validateForm($_POST);
        if (!empty($errors)) {
            parent::template("app/views/admin/discounts/create.php", compact("errors"));
        } else {
            $this->discount->addDiscount($params);
            header("location: /?page=Admin&controller=Discount");
        }
    }

    public function edit()
    {
        $id = isset($_GET["id"]) ? $_GET["id"] : 0;
        $params = [
            ":id" => $id
        ];
        $discounts = $this->discount->getDiscount($params);
        parent::template("app/views/admin/discounts/edit.php", compact("discounts"));
    }

    public function editPost()
    { 
        $discount_name = isset($_POST['name']) ?  $_POST['name'] : "";
        $discount_rate = isset($_POST['discount_rate']) ?  $_POST['discount_rate'] : "";
        $start_date = isset($_POST['start_date']) ?  $_POST['start_date'] : "";
        $end_date = isset($_POST['end_date']) ?  $_POST['end_date'] : "";
        $id = isset($_POST['id']) ?  $_POST['id'] : "";
        $params = [
            ":id" =>  $id,
            ":name" =>  $discount_name,
            ":discount_rate" => $discount_rate,
            ":start_date" => $start_date,
            ":end_date" => $end_date,
        ];
        $this->discount->updateDiscount($params);
        header("location: /?page=Admin&controller=Discount");
    }

    public function delete()
    {
        $id = isset($_GET['id']) ?  $_GET['id'] : "";
        $params = [
            ":id" =>  $id,
        ];
        $this->discount->deleteDiscount($params);
        header("location: /?page=Admin&controller=Discount");
    }
}