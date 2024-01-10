<?php
include 'app\models\Vourcher.php';


class VourcherController extends AdminController
{
    private $vourcher;

    public function __construct()
    {
        $this->vourcher = new vourcher;
    }

    public function index()
    {
        $data['vourchers'] = $this->vourcher->index();
        parent::template('app\views\admin\vourchers\index.php', $data);
    }

    public function getCreate()
    {
        parent::template("app/views/admin/vourchers/create.php");
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $requiredFields = ['user_id', 'vourcher_code', 'discount_amount', 'status', 'description', 'expiration_date'];

            foreach ($requiredFields as $field) {
                if (!isset($_POST[$field]) || empty($_POST[$field])) {
                    echo "Trường $field không được để trống";
                    return;
                }
            }

            $user_id = $_POST['user_id'];
            $code = $_POST['vourcher_code'];
            $discount_amount = $_POST['discount_amount'];
            $status = $_POST['status'];
            $description = $_POST['description'];
            $expiration_date = $_POST['expiration_date'];

            $result = $this->vourcher->create($user_id, $code, $discount_amount, $status, $description, $expiration_date);
            if ($result) {
                header('location:?controller=vourcher&action=index&page=admin');
            } else {
                echo "Thêm sản phẩm không thành công";
            }
        } else {
            echo 'yêu cầu lỗi';
        }
    }

    public function edit()
    {
        if (isset($_GET['id'])) {
            $vourcher = new vourcher();
            $data['vourchers'] = $this->vourcher->getVourcherById($_GET['id']);
            parent::template("app/views/admin/vourchers/edit.php", $data);
        }
    }

    public function update()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $requiredFields = ['user_id', 'vourcher_code', 'discount_amount', 'status', 'description', 'expiration_date'];

            foreach ($requiredFields as $field) {
                if (!isset($_POST[$field]) || empty($_POST[$field])) {
                    echo "Trường $field không được để trống";
                    return;
                }
            }
            $id = $_POST['id'];
            $user_id = $_POST['user_id'];
            $code = $_POST['vourcher_code'];
            $discount_amount = $_POST['discount_amount'];
            $status = $_POST['status'];
            $description = $_POST['description'];
            $expiration_date = $_POST['expiration_date'];

            $result = $this->vourcher->update($id, $user_id, $code, $discount_amount, $status, $description, $expiration_date);
            if ($result) {
                header('location:?controller=vourcher&action=index&page=admin');
            } else {
                echo "cập nhật thành công";
            }
        } else {
            echo 'yêu cầu lỗi';
        }
    }

    public function delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $result = $this->vourcher->delete($id);
            if ($result) {
                header('location:?controller=vourcher&action=index&page=admin');
            } else {
                echo "<script> alert('Xóa không thành công');
					window.location.href('?controller=vourcher&action=index&page=admin');</script>";
            }
        }
    }
}
