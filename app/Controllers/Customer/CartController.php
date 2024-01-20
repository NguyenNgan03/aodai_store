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

            $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
           
            if (array_key_exists($product_id, $cart)) {
                $cart[$product_id]['quantity'] = $quantity +=1 ;
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

           $_SESSION['cart'] = $cart;          
        }
    }
    public function checkout()
    {
        parent::template('app\views\users\checkout\checkout.php');
    }
}
