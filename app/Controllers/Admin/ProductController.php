<?php
include 'app\models\Product.php';


class ProductController extends AdminController
{
    private $product;

    public function __construct()
    {
        $this->product = new Product;
    }

    public function index()
    {
        $data['products'] = $this->product->index();
        parent::template('app\views\admin\products\index.php', $data);
    }

    public function getCreate()
    {
        parent::template("app/views/admin/products/create.php");
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $requiredFields = ['name', 'discount_id', 'category_id', 'description', 'price', 'color', 'material', 'size', 'image1', 'image2', 'image3', 'image4'];

            // Kiểm tra xem tất cả các trường cần thiết đã được gửi hay không
            foreach ($requiredFields as $field) {
                if (!isset($_POST[$field]) || empty($_POST[$field])) {
                    echo "Trường $field không được để trống";
                    return;
                }
            }

            $name = $_POST['name'];
            $discount_id = $_POST['discount_id'];
            $category_id = $_POST['category_id'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $color = $_POST['color'];
            $material = $_POST['material'];
            $size = $_POST['size'];
            $image1 = $_POST['image1'];
            $image2 = $_POST['image2'];
            $image3 = $_POST['image3'];
            $image4 = $_POST['image4'];

            $result = $this->product->create($name, $discount_id, $category_id, $description, $price, $color, $material, $size, $image1, $image2, $image3, $image4);
            if ($result) {
                header('location:?controller=product&action=index&page=admin');
            } else {
                echo "Thêm sản phẩm không thành công";
            }
        } else {
            echo 'yêu cầu lỗi';
        }
    }
    //

    public function edit()
    {
        if (isset($_GET['id'])) {
            $product = new Product();
            $data['products'] = $this->product->getProductById($_GET['id']);
            parent::template("app/views/admin/products/edit.php", $data);
        }
    }

    public function update()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $requiredFields = ['name', 'discount_id', 'category_id', 'description', 'price', 'color', 'material', 'size', 'image1', 'image2', 'image3', 'image4'];

            // Kiểm tra xem tất cả các trường cần thiết đã được gửi hay không
            foreach ($requiredFields as $field) {
                if (!isset($_POST[$field]) || empty($_POST[$field])) {
                    echo "Trường $field không được để trống";
                    return;
                }
            }

            $id = $_POST['id'];
            $name = $_POST['name'];
            $discount_id = $_POST['discount_id'];
            $category_id = $_POST['category_id'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $color = $_POST['color'];
            $material = $_POST['material'];
            $size = $_POST['size'];
            $image1 = $_POST['image1'];
            $image2 = $_POST['image2'];
            $image3 = $_POST['image3'];
            $image4 = $_POST['image4'];

            $result = $this->product->update($id, $name, $discount_id, $category_id, $description, $price, $color, $material, $size, $image1, $image2, $image3, $image4);
            if ($result) {
                header('location:?controller=product&action=index&page=admin');
            } else {
                echo "cập nhật thành công";
            }
        } else {
            echo 'yêu cầu lỗi';
        }
    }

    //

    public function  delete()
    {
        parent::template('app\views\admin\products\delete.php');
    }
}
