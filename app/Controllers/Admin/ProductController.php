<?php
include 'app\models\Product.php';
include 'app\models\Category.php';
include 'app\models\Discount.php';
class ProductController extends AdminController
{
    private $product;
    public $category;
    public $discount;

    public function __construct()
    {
        $this->product = new Product;
        $this->category = new Category;
        $this->discount = new Discount;
    }

    public function index()
    {  
        $data['products'] = $this->product->index();
        parent::template('app\views\admin\products\index.php', $data);
    }

    public function getCreate()    
    {
        $data['categories'] = $this->category->getAllCategories();
        $data['discounts'] = $this->discount->getAllDiscounts();
        parent::template("app/views/admin/products/create.php",$data);
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
            // Kiểm tra hình ảnh có đúng định dạng không và lưu vào thư mục
            $imageFields = ['image1', 'image2', 'image3', 'image4'];
            foreach ($imageFields as $imageField) {
                if (isset($_FILES[$imageField]) && $_FILES[$imageField]['error'] === UPLOAD_ERR_OK) {
                    $uploadDir = 'app\views\public\Images/'; // Thay đổi đường dẫn tùy vào cấu hình của bạn
                    $uploadFile = $uploadDir . basename($_FILES[$imageField]['name']);

                    $imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));
                    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

                    if (!in_array($imageFileType, $allowedExtensions)) {
                        echo "File ở trường $imageField không phải là hình ảnh hợp lệ";
                        return;
                    }
                    move_uploaded_file($_FILES[$imageField]['tmp_name'], $uploadFile);
                    $_POST[$imageField] = $uploadFile; // Lưu đường dẫn hình ảnh vào $_POST
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

    public function delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $result = $this->product->delete($id);
            if ($result) {
                header('location:?controller=product&action=index&page=admin');
            } else {
                echo "<script> alert('Xóa không thành công');
					window.location.href('?controller=product&action=index&page=admin');</script>";
            }
    }
}
}
