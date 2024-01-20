<?php

class CartController extends CustomerController
{
    public function addToCart()
    {
        // Kiểm tra xem người dùng đã đăng nhập chưa
        if (!isset($_SESSION['username'])) {
            // Nếu chưa đăng nhập, trả về một thông báo lỗi hoặc chuyển hướng đến trang đăng nhập
            echo 'Bạn cần đăng nhập để thêm sản phẩm vào giỏ hàng.';
            return;
        }

        // Xử lý thêm sản phẩm vào giỏ hàng
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productId = $_POST['product_id'];
            $quantity = $_POST['quantity'];

            // Thêm thông tin sản phẩm vào session['cart']
            $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
            $cart[$productId] = $quantity;
            $_SESSION['cart'] = $cart;

            header('Location: ?controller=product&action=detail&page=customer&id=' . $productId);
        }
    }
    
    public function checkout()
    {
        parent::template('app\views\users\checkout\checkout.php');
    }
    // Các phương thức khác cho quản lý giỏ hàng có thể được thêm ở đây
}
