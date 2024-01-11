<?php

include 'app\models\Category.php';

class CategoryController extends AdminController
{
    private $category;

    public function __construct()
    {
        $this->category = new Category;
    }

    public function index()
    {
        $categories =  $this->category->getAllCategories();
        parent::template("app/views/admin/categories/index.php", compact("categories"));
    }

    public function create()
    {
        parent::template("app/views/admin/categories/create.php");
    }

    public function validateForm($data)
    {
        // $errors = '';
        if (empty($data['name'])) {
            $errors["name"] = "Name is required!";
        }
        return $errors;
    }

    public function createPost()
    {
        $errors = $this->validateForm($_POST);
        if (!empty($errors)) {
            parent::template("app/views/admin/categories/create.php", compact("errors"));
        } else {
            $params = [
                ":name" =>  $_POST['name'],
            ];
            $this->category->addCategory($params);
            header("location:?page=Admin&controller=Category&&action=index");
        }
    }

    public function edit()
    {
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $params = [
                ":id" => $id
            ];
            $category = $this->category->getCategoryById($id);
            parent::template("app/views/admin/categories/edit.php", compact("category"));
        } else {
            parent::template("/views/not-found.php");
        }
    }

    public function editPost()
    {
        $category_name = isset($_POST['name']) ?  $_POST['name'] : "";
        $id = isset($_POST['id']) ?  $_POST['id'] : "";
        $params = [
            ":id" =>  $id,
            ":name" =>  $category_name,
        ];
        $this->category->updateCategory($params);
        header("location: ?controller=category&action=index&page=Admin");
    }

    public function delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $result = $this->category->delete($id);
            if ($result) {
                header('location: ?controller=category&action=index&page=admin');
            } else {
                echo "<script> alert('Xóa không thành công');
					window.location.href('?controller=category&action=index&page=admin');</script>";
            }
        }
    }
}
