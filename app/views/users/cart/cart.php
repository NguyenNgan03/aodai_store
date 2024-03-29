
<body class="cnt-home">
    <div class="body-content outer-top-xs">
        <div class="container">
            <div class="row">
                <form action="?controller=cart&action=checkout&page=customer" method="post">                                    
                <div class="shopping-cart">
                    <div class="shopping-cart-table">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="cart-romove item">Remove</th>
                                        <th class="cart-description item">Image</th>
                                        <th class="cart-product-name item">Product Name</th>
                                        <th class="cart-qty item">Quantity</th>
                                        <th class="cart-sub-total item">Subtotal</th>
                                        <th class="cart-total last-item">Grandtotal</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <td colspan="7">
                                            <div class="shopping-cart-btn">
                                                <span class="">
                                                    <a href="?page=customer&controller=Product" class="btn btn-upper btn-primary pull-right outer-right-xs">Continue Shopping</a>
                                                </span>
                                            </div>
                                        </td>
                                    </tr> 
                                </tfoot>
                                <tbody>
                                    <?php
                                        $cartItems = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];
                                        $subtotal = 0; 
                                    ?>
                                    <?php 
                                        foreach ($cartItems as $product_id => $item) : 
                                        $subtotal += $item['price'] * $item['quantity'];
                                    ?>
                                        <tr>
                                            <td class="romove-item">
                                                <a href="#" title="Remove" class="icon" onclick="confirmDelete(<?= $product_id; ?>)">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </td>
                                            <td class="cart-image">
                                                <a class="entry-thumbnail" href="detail.html">
                                                    <img src="<?php echo $item['image'] ?>" alt="ảnh">
                                                </a>
                                            </td>
                                            <td class="cart-product-name-info">
                                                <h4 class="cart-product-description"><a href="?controller=product&action=detail&page=customer&id=<?= $product_id; ?>"><?= $item['name']; ?></a></h4>
                                                <div class="cart-product-info">
                                                    <span class="product-color">COLOR:<span><?php echo $item['color'] ?></span></span><br>
                                                    <span class="product-color">SIZE:<span><?php echo $item['size'] ?></span></span>
                                                </div>
                                            </td>

                                            <td class="cart-product-quantity">
                                                <div class="quant-input">
                                                    <span><?php echo $item['quantity'] ?></span>
                                                </div>
                                            </td>
                                            <td class="cart-product-sub-total"><span class="cart-sub-total-price"><?= $item['price'] * $item['quantity']; ?> VNĐ</span></td>
                                            <td class="cart-product-grand-total"><span class="cart-grand-total-price"><?= $item['price'] * $item['quantity']; ?> VNĐ</span></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-4 offset-md-8 col-sm-12 offset-sm-0 float-right cart-shopping-total">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="cart-sub-total">
                                            Subtotal<span class="inner-left-md"><?= $subtotal; ?> VNĐ</span>
                                        </div>
                                        <div class="cart-grand-total">
                                            Grand Total<span class="inner-left-md"><?= $subtotal; ?> VNĐ</span>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="cart-checkout-btn pull-right">
                                            <button type="submit" class="btn btn-primary checkout-btn"><a href="?controller=cart&action=checkout&page=customer" style="color: white;">PROCEED TO CHECKOUT</a></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function confirmDelete(productId) {
            var confirmation = confirm("Bạn muốn xóa sản phẩm này khỏi giỏ hàng?");
            if (confirmation) {
                window.location.href = `?controller=cart&action=removeItem&page=customer&product_id=${productId}`;
            } else {
                // Người dùng ấn "No", không thực hiện xóa
            }
        }
    </script>
</body>