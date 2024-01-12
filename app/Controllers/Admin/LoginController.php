<?php

include 'app/models/user.php';

    class LoginController extends AdminController
    {
        private $user;

        public function __construct()
        {
            $this->user = new User;
        }

        public function getLogin()
        {
            parent::template('app\views\admin\customer\login.php');
        }

        public function login()
        {   
            if (isset($_POST['login'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                if ($username != "" && $password != "") {
                    $user = $this->user->getUser($username, $password);
                    if ($user) {
                        $_SESSION['usernameAdmin'] = $user['username'];
                        header('location: ?controller=product&action=index&page=Admin');
                    }
                    else{
                        echo 'password sai';
                    }
                }
                else{
                    echo'trường name và pass ko đuọc trống';
                }
            }
        }

        public function logout()
        {
            session_unset();
            session_destroy();
            header('Location: ?controller=Login&action=getLogin&page=Admin');
        }
    }
?>
