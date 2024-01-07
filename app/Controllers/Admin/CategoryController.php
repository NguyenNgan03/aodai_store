<?php

include_once dirname(__DIR__) . '/AminController.php';
include_once dirname(dirname(__DIR__)) . '/models/Category.php';
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
        parent::template("/views/admin/categories/index.php", compact("categories"));
    }

    public function create()
    {
        parent::template("/views/admin/categories/create.php");
    }

    public function validateForm($data)
    {
        $errors = '';
        if (empty($data['name'])) {
            $errors = "Vui lòng nhập tên.";
        }
        return $errors;
    }

    public function createPost()
    {
        $category_name = isset($_POST['name']) ?  $_POST['name'] : "";
        $params = [
            ":name" =>  $category_name,
            ":created_at" => (new DateTime())->format('Y-m-d H:i:s'),
            ":updated_at" => (new DateTime())->format('Y-m-d H:i:s')
        ];
        $errors = $this->validateForm($_POST);
        if (!empty($errors)) {
            parent::template("/views/admin/categories/create.php", compact("errors"));
        } else {
            $this->category->addCategory($params);
            header("location: /?page=Admin&controller=Category");
        }
    }

    public function edit()
    {
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $params = [
                ":id" => $id
            ];
            $category = $this->category->getCategory($params)[0];
            parent::template("/views/admin/categories/edit.php", compact("category"));
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
            ":updated_at" => (new DateTime())->format('Y-m-d H:i:s')
        ];
        $this->category->updateCategory($params);
        header("location: /?page=Admin&controller=Category");
    }

    public function delete()
    {
        $id = isset($_GET['id']) ?  $_GET['id'] : "";
        $params = [
            ":id" =>  $id,
        ];
        $this->category->deleteCategory($params);
        header("location: /?page=Admin&controller=Category");
    }
}
