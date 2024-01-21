<?php
include 'app\models\Product.php';
include 'app\models\Category.php';
include 'app\models\Discount.php'; 
class CartController extends CustomerController
{
    public function addToCart()
    {
        if (!isset($_SESSION['username'])) {
            echo 'Bạn cần đăng nhập để thêm sản phẩm vào giỏ hàng.';
            return;
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $product_id = $_POST['product_id'];
            $quantity = $_POST['quantity'];
            $color = $_POST['color'];
            $size = $_POST['size']; 

            $productModel = new Product();
            $product = $productModel->getProductDetail($product_id);

            // $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
            $cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];
           
            if (array_key_exists($product_id, $cart)) {
                $cart[$product_id]['quantity'] = $quantity +=1 ;
                $cart[$product_id]['size'] = $size ;
            } else {
                $cart[$product_id] = [
                    'id' => $product['id'],
                    'name' => $product['name'],
                    'price' => $product['price'],
                    'quantity' => $quantity,
                    'color' => $color,
                    'size' => $size,
                    'image' => $product['image1'], 
                ];
            }

        //    $_SESSION['cart'] = $cart;    
           setcookie('cart', json_encode($cart), time() + (86400 * 30), '/');      
        }
    }

    public function showCart()
    {
        
    }
    
    public function removeItem()
    {
        if (!isset($_SESSION['username'])) {
            echo 'Bạn cần đăng nhập để thực hiện thao tác này.';
            return;
        }
    
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['product_id'])) {
            $product_id = $_GET['product_id'];
    
            // Lấy giỏ hàng từ cookie
            $cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];
    
            // Kiểm tra xem sản phẩm có tồn tại trong giỏ hàng không
            if (array_key_exists($product_id, $cart)) {
                // Xóa sản phẩm khỏi giỏ hàng
                unset($cart[$product_id]);
                            
                // Cập nhật cookie giỏ hàng
                setcookie('cart', json_encode($cart), time() + (86400 * 30), '/');
    
                header('location: ?controller=home&action=cart&page=customer');
            } else {
                echo 'Sản phẩm không tồn tại trong giỏ hàng.';
            }
        } else {
            echo 'Yêu cầu không hợp lệ.';
        }
    }
    

    public function checkout()
    {
        
        parent::template('app\views\users\checkout\checkout.php');
    }
}
