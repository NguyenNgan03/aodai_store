<?php
include 'app\models\User.php';

class UserController extends CustomerController{

    private $user;

    public function __construct()
    {
        $this->user = new User;
    }

    public function getLogin($data = null)
    {
        $errors = isset($data['errors']) ? $data['errors'] : [];
        $formData = isset($data['formData']) ? $data['formData'] : [];

        // parent::template('views/users/forms/login.php', $data);
        // parent::template('views/users/forms/login.php', ['errors' => $errors, 'formData' => $formData]);
        include_once('views/users/partials/forms/login.php');
    }

    public function postLogin()
    {
        $formData = ['username' => '', 'password' => ''];
        $errors = ['username' => '', 'password' => ''];
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($username == "" && $password == "") {
                $errors['username'] = "Name is a required field.";
                $errors['password'] = "Price is a required field.";
                return  $this->getLogin(['errors' => $errors, 'formData' => $formData]);
            }
            if ($username == "") {
                $errors['username'] = "Name is a required field.";
            }  else {
                $formData['username'] = $username;
            }

            if ($password == "") {
                $errors['password'] = "Name is a required field.";
            } else {
                $formData['password'] = $password;
            }

            if ($errors['name'] || $errors['price']) {
                return  $this->getLogin(['errors' => $errors, 'formData' => $formData]);
            }

            if ($username != "" && $password != "") {
                $user = $this->user->getUser($username, $password);
                if ($user) {
                    $_SESSION['username'] = $user['first_name'] ." ". $user['last_name'];
                    echo "<script>
						alert('Bạn đăng nhập thành công! chào mừng bạn $username đến mua sắm cùng Shop ');
						window.location.replace('index.php?controller=Home&action=index&page=Customer');
						</script>";
                } else {
                    echo "<script>
                    alert('Bạn đăng nhập không thành công! Sai mật khẩu hoặc tên đăng nhập ');
                    window.location.replace('index.php?controller=User&action=getLogin&page=Customer');
                    </script>";				
                }
            }
        }
    }

    public function getRegister()
    {
        include_once 'views/users/partials/forms/register.php';
    }

    public function register()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Hash mật khẩu trước khi lưu vào cơ sở dữ liệu
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Lưu thông tin người dùng vào cơ sở dữ liệu
        $result = $this->user->registerUser($username, $hashedPassword);

        if ($result) {
            // Đăng ký thành công, bạn có thể chuyển hướng hoặc hiển thị thông báo thành công
            header("Location: /user/login"); // Ví dụ chuyển hướng đến trang đăng nhập
            exit();
        } else {
            // Đăng ký thất bại, hiển thị thông báo lỗi hoặc xử lý tùy thuộc vào yêu cầu.
            include 'views/user/register.php';
        }
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
?>
