<?php
include 'app\models\User.php';


class UserController extends AdminController
{
    private $user;

    public function __construct()
    {
        $this->user = new user;
    }

    public function index()
    {
        $data['users'] = $this->user->index();
        parent::template('app\views\admin\customer\index.php', $data);
    }

    public function getCreate()
    {
        parent::template('app\views\admin\customer\create.php');
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $requiredFields = ['username','password','email', 'phone', 'role'];

            // Kiểm tra xem tất cả các trường cần thiết đã được gửi hay không
            foreach ($requiredFields as $field) {
                if (!isset($_POST[$field]) || empty($_POST[$field])) {
                    echo "Trường $field không được để trống";
                    return;
                }
            }

            $name = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $role = $_POST['role'];

            $result = $this->user->create($name,$password, $email, $phone, $role);
            if ($result) {
                header('location:?controller=user&action=index&page=admin');
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
            $user = new user();
            $data['users'] = $this->user->getUserById($_GET['id']);
            parent::template('app\views\admin\customer\edit.php', $data);
        }
    }

    public function update()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $requiredFields = ['username','password', 'email', 'phone', 'role'];

            // Kiểm tra xem tất cả các trường cần thiết đã được gửi hay không
            foreach ($requiredFields as $field) {
                if (!isset($_POST[$field]) || empty($_POST[$field])) {
                    echo "Trường $field không được để trống";
                    return;
                }
            }
            $id = $_POST['id'];
            $name = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $role = $_POST['role'];

            $result = $this->user->update($id, $name,$password, $email, $phone, $role);
            if ($result) {
                header('location:?controller=user&action=index&page=admin');
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
            $result = $this->user->delete($id);
            if ($result) {
                header('location:?controller=user&action=index&page=admin');
            } else {
                echo "<script> alert('Xóa không thành công');
					window.location.href('?controller=user&action=index&page=admin');</script>";
            }
    }
}
}
