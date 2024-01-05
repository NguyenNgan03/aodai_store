<?php

use app\models\User;

class UserController extends AdminController
{
    private $user;

    public function __construct()
    {
        $this->user = new User;
    }

    public function index()
    {
        $data['users'] = $this->user->all();
        parent::template('app\views\admin\customer\index.php', $data);
    }

    public function getCreate()
    {
        parent::template('app\views\admin\customer\create.php');
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            header('Location: /admin/customer');
            exit();
        } else {
            parent::template('app\views\admin\customer\create.php');
        }
    }

    public function edit($userId)
    {
        $data['user'] = $this->user->find($userId);
        parent::template('app\views\admin\customer\edit.php', $data);
    }

    public function update($userId)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            header('Location: /admin/customer');
            exit();
        } else {
            $data['user'] = $this->user->find($userId);
            parent::template('views/admin/users/edit.php', $data);
        }
    }

    public function delete($userId)
    {
        header('Location: /admin/customer');
        exit();
    }
}
