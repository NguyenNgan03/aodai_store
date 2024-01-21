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
        $remember_me = isset($_POST['remember_me']) ? 1 : 0;

        if ($username != "" && $password != "") {
            $user = $this->user->getUser($username,$password);

            // Kiểm tra mật khẩu
            if ($user && password_verify($password, $user['password'])) {
                if ($remember_me == 1) {
                    // Lưu thông tin vào cookie an toàn
                    $cookieExpire = time() + 3600; // 1 giờ
                    setcookie('is_logged', true, $cookieExpire, '/', null, true, true);
                    setcookie("username_logged", $username, $cookieExpire, "/", null, true, true);
                }

                $_SESSION['username'] = $user['username'];

                if ($user['role'] == 'admin') {
                    header('location: ?controller=dashboard&action=index&page=Admin');
                } else {
                    header('location: ?controller=home&action=index&page=customer');
                }
                exit();
            } else {
                echo 'Tên đăng nhập hoặc mật khẩu không đúng.';
            }
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
                // header('Location: ?controller=user&action=getRegister&page=customer');
            }
        } else {
            echo 'yêu cầu lỗi';
        }
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        header('Location: ?controller=Home&action=index&page=Customer');
    }

    public function profile()
    {
        parent::template('app\views\users\profile\index.php');
    }
}
