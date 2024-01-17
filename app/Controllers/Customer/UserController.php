<?php
include 'app\models\User.php';

class UserController extends CustomerController
{

    private $user;

    public function __construct()
    {
        $this->user = new User;
    }

    public function getLogin()
    {
        parent::template('app\views\partials\form\login.php');
    }

    public function login()
    {
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($username != "" && $password != "") {
                $user = $this->user->getUser($username, $password);
                if ($user) {
                    $_SESSION['username'] = $user['username'];

                    if ($user['role'] == 'admin') {
                        header('location: ?controller=dashboard&action=index&page=Admin');
                    } else {
                        header('location: ?controller=home&action=index&page=customer');
                    }
                } else {
                    echo 'Mật khẩu sai';
                }
            } else {
                echo 'Trường name và pass không được trống';
            }
        }
    }


    public function getRegister()
    {
        parent::template('app\views\partials\form\register.php');
    }

    public function register()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $firt_name = $_POST['firt_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $role = $_POST['role'];

            $result = $this->user->registerUser($username, $password, $firt_name, $last_name, $email, $role);
           
            if ($result) {
                header('Location: ?controller=user&action=getLogin&page=customer');
                exit();
            } else {
                echo 'theem khoong thanhf coong';
             
            }
        } else {
            echo 'yêu cầu lỗi';
        }
    }

    public function addToCart()
    {

        if (!isset($_SESSION['user_id'])) {

            echo "Vui lòng đăng nhập để thêm sản phẩm vào giỏ hàng.";
            return;
        }

        $productInfo = [
            'image1' => $_POST['image1'],
            'name' => $_POST['name'],
            'color' => $_POST['color'],
            'size' => $_POST['size'],
            'price' => $_POST['price'],
        ];

        $user_id = $_SESSION['user_id'];
        $cartData = $this->user->addToCart($user_id, $productInfo);
        header('Location: ?page=customer&controller=Product');
    }

    public function getUserCart()
    {
        if (!isset($_SESSION['user_id'])) {
           
            echo "Vui lòng đăng nhập để thêm sản phẩm vào giỏ hàng.";
            
            return;
        }
    
        // Người dùng đã đăng nhập, tiếp tục lấy thông tin giỏ hàng
        $user_id = $_SESSION['user_id'];
        $cartData = $this->user->getUserCart($user_id);
    
        // Tiếp tục xử lý dữ liệu giỏ hàng và hiển thị trên trang web
        // ...
    }
    

    public function logout()
    {
        session_unset();
        session_destroy();
        header('Location: index.php?controller=Home&action=index&page=Customer');
    }

    public function profile()
    {
        parent::template('views/users/partials/pages/profile.php');
    }
}
