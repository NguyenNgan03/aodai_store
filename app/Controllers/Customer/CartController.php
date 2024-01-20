<?php
include 'app\models\Product.php';
include 'app\models\Category.php';
include 'app\models\Discount.php'; 
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
            $product_id = $_POST['product_id'];
            $quantity = $_POST['quantity'];
            $color = $_POST['color'];
            $size = $_POST['size']; 

            // Lấy thông tin sản phẩm từ database dựa trên product_id
            $productModel = new Product();
            $product = $productModel->getProductDetail($product_id);

            // Thêm thông tin sản phẩm vào session['cart']
            $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
           
            if (array_key_exists($product_id, $cart)) {
                // Nếu sản phẩm đã tồn tại trong giỏ hàng, cập nhật số lượng
                $cart[$product_id]['quantity'] = $quantity +=1 ;
            } else {
                // Nếu sản phẩm chưa tồn tại, thêm sản phẩm mới vào giỏ hàng
                $cart[$product_id] = [
                    'id' => $product['id'],
                    'name' => $product['name'],
                    'price' => $product['price'],
                    'quantity' => $quantity,
                    'color' => $color,
                    'size' => $size,
                    'image' => $product['image1'], // Thay bằng hình ảnh bạn muốn hiển thị
                    // Các trường thông tin khác của sản phẩm
                ];
            }

           $_SESSION['cart'] = $cart;            // Chuyển hướng về trang chi tiết sản phẩm hoặc trang khác
            // Tùy thuộc vào yêu cầu của bạn
            // header('Location: ?controller=product&action=detail&page=customer&id='.$product_id);
           
            // var_dump($_SESSION['cart']);
        }
    }

    // public function viewCart()
    // {
    //     if (!isset($_SESSION[''])) {
    //         $product_id = $_POST['product_id'];
    //     }
    //      // Lấy dữ liệu từ session
    //      $cartItems = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

    //      // Truyền dữ liệu vào view
    //      include 'app\views\users\cart\cart.php';
    // }

    // Các phương thức khác cho quản lý giỏ hàng có thể được thêm ở đây
}

?>
