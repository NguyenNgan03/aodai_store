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
                $_SESSION['user_id'] = $this->user->getUserIdByCredentials($username,$password);
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];
                
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
            $avatar = "user3.jpg";

            $result = $this->user->registerUser($username, $password, $firt_name, $last_name, $email, $role, $avatar);
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
        $username = isset($_SESSION["username"]) ? $_SESSION["username"] : null;
        if ($username !== null) {
            $user =  $this->user->getUserByUsername($username)[0];
        }
        $data["user"] = isset($user) ? $user : null;
        parent::template('app\views\users\profile\index.php', $data);
    }
    
    public function editProfile()
    {
        $params = [
            "username" => $_POST["username"],
            "last_name" => $_POST["last_name"],
            "first_name" => $_POST["first_name"],
            "address" => $_POST["address"],
            "email" => $_POST["email"],
            "phone" => $_POST["phone"],
            "birthday" => $_POST["birthday"],
            "updated_at" => (new DateTime())->format("Y-m-d H:i:s"),
        ];
        $id = $_POST["id"];
        $this->user->editProfile($id, $params);
        header('Location: ?controller=home&action=editProfile&page=customer');
    }
}
