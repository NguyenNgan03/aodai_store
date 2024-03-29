<?php
include 'app\models\Order.php';
include 'app\models\orderDetail.php';


class OrderController extends AdminController
{
    private $order;
    private $orderDetail;

    public function __construct()
    {
        $this->order = new order;
        $this->orderDetail = new orderDetail;
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
            $requiredFields = ['user_id', 'order_date', 'shipping_address', 'shipping_date', 'notes', 'payment_status', 'shipping_status'];

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
            $result = $this->order->create($user_id, $order_date, $shipping_address, $shipping_date, $notes, $payment_status, $shipping_status);
            if ($result) {
                header('location:?controller=order&action=index&page=admin');
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
            $order = new order();
            $data['oders'] = $this->order->getOrderById($_GET['id']);
            parent::template('app\views\admin\order\edit.php', $data);
        }
    }

    public function update()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $requiredFields = ['user_id', 'order_date', 'shipping_address', 'shipping_date', 'notes', 'payment_status', 'shipping_status'];

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
            $result = $this->order->update($id, $user_id, $order_date, $shipping_address, $shipping_date, $notes, $payment_status, $shipping_status);
            if ($result) {
                header('location:?controller=order&action=index&page=admin');
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
            $result = $this->order->delete($id);
            if ($result) {
                header('location:?controller=order&action=index&page=admin');
            } else {
                echo "<script> alert('Xóa không thành công');
					window.location.href('?controller=order&action=index&page=admin');</script>";
            }
        }
    }
    public function createOrder($billingName, $billingEmailAddress, $billingPhone, $shippingAddress, $orderDate, $shippingDate, $notes, $paymentStatus, $shippingStatus)
    {
        
        // Lưu thông tin đơn hàng vào bảng orders
        return $this->order->create($billingName, $orderDate, $shippingAddress, $shippingDate, $notes, $paymentStatus, $shippingStatus);
    }

    public function createOrderDetail($orderId, $productId, $quantity, $price)
    {
        // Lưu chi tiết đơn hàng vào bảng order_detail
        return $this->orderDetail->createOrderDetail($orderId, $productId, $quantity, $price);
    }
}
