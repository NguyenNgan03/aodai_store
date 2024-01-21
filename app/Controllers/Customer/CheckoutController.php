<?php
include 'app\models\Order.php';
include 'app\models\OrderDetail.php';

class CheckoutController extends Database
{
    private $orderModel;
    private $orderDetailModel;

    public function __construct()
    {
        $this->orderModel = new Order();
        $this->orderDetailModel = new OrderDetail();
    }

    public function processCheckout()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           
            $user_id = $_SESSION['user_id'];
            $phone = $_POST['billing-phone'];
            $billingName = $_POST['billing-name'];
            $billingEmailAddress = $_POST['billing-email-address'];
            $billingPhone = $_POST['billing-phone'];
            $shippingAddress = $_POST['shipping_address'];
           
            $shippingDate = date('Y-m-d', strtotime('+2 days'));
            $notes = ""; 
            $paymentStatus = "Tiền mặt"; 
            $shippingStatus = "";

            $orderId = $this->orderModel->create($user_id, $phone,$shippingAddress, $shippingDate, $notes, $paymentStatus, $shippingStatus);
            if ($orderId) {
                
                $cartItems = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];

                foreach ($cartItems as $product_id => $item) {
                    $this->orderDetailModel->createOrderDetail($orderId, $product_id, $item['quantity'], $item['price']);
                }

                // Gửi thông báo hoặc chuyển hướng đến trang cảm ơn
                echo "Đơn hàng của bạn đã được đặt thành công!";
            } else {
                echo "Có lỗi xảy ra khi xử lý đơn hàng. Vui lòng thử lại!";
            }
        }
    }
}
?>
