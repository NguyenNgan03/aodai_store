<?php
include 'app\models\Order.php';


class OrderController extends AdminController
{
    private $order;

    public function __construct()
    {
        $this->order= new order;
    }

    public function index()
    {
        $data['orders'] = $this->order->index();
        parent::template('app\views\admin\order\index.php', $data);
    }

    public function getCreate()
    {
        parent::template('app\views\admin\order\create.php');
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $requiredFields = ['user_id', 'order_date', 'shipping_address', 'shipping_date','notes','payment_status','shipping_status','created_at','updated_at'];

            // Kiểm tra xem tất cả các trường cần thiết đã được gửi hay không
            foreach ($requiredFields as $field) {
                if (!isset($_POST[$field]) || empty($_POST[$field])) {
                    echo "Trường $field không được để trống";
                    return;
                }
            }

            $user_id = $_POST['user_id'];
            $order_date = $_POST['order_date'];
            $shipping_address = $_POST['shipping_address'];
            $shipping_date = $_POST['shipping_date'];
            $notes = $_POST['notes'];
            $payment_status = $_POST['payment_status'];
            $shipping_status = $_POST['shipping_status'];
            $created_at = $_POST['created_at'];
            $updated_at = $_POST['updated_at'];
            $result = $this->order->create($user_id, $order_date, $shipping_address, $shipping_date, $notes, $payment_status, $shipping_status, $created_at, $updated_at);
            if ($result) {
                header('location:?controller=order&action=index&page=admin');
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
            $order = new order();
            $data['oders'] = $this->order->getOrderById($_GET['id']);
            parent::template('app\views\admin\order\edit.php', $data);
        }
    }

    public function update()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $requiredFields = ['user_id', 'order_date', 'shipping_address', 'shipping_date', 'notes', 'payment_status', 'shipping_status', 'created_at', 'updated_at'];

            // Kiểm tra xem tất cả các trường cần thiết đã được gửi hay không
            foreach ($requiredFields as $field) {
                if (!isset($_POST[$field]) || empty($_POST[$field])) {
                    echo "Trường $field không được để trống";
                    return;
                }
            }
            $id = $_POST['id'];
            $user_id = $_POST['user_id'];
            $order_date = $_POST['order_date'];
            $shipping_address = $_POST['shipping_address'];
            $shipping_date = $_POST['shipping_date'];
            $notes = $_POST['notes'];
            $payment_status = $_POST['payment_status'];
            $shipping_status = $_POST['shipping_status'];
            $created_at = $_POST['created_at'];
            $updated_at = $_POST['updated_at'];

            $result = $this->order->update($id, $user_id, $order_date, $shipping_address, $shipping_date, $notes, $payment_status, $shipping_status, $created_at, $updated_at);
            if ($result) {
                header('location:?controller=order&action=index&page=admin');
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
            $result = $this->order->delete($id);
            if ($result) {
                header('location:?controller=order&action=index&page=admin');
            } else {
                echo "<script> alert('Xóa không thành công');
					window.location.href('?controller=order&action=index&page=admin');</script>";
            }
        }
    }
}
