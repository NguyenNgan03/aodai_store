<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <title>AoDai Store-Navbar</title>
    <link rel="stylesheet" href="public/css/navbar.css">
</head>

<body>
    <?php    
    // Kiểm tra xem Người dùng có sử dụng Ghi nhớ Đăng nhập không?
    if (isset($_COOKIE['is_logged'])) {
        // Lấy thông tin từ COOKIE từ Web Browser của client gởi đến
        $username_logged = isset($_COOKIE['username_logged']) ? $_COOKIE['username_logged'] : '';

        echo "Xin chào <b>$username_logged</b>! đến mua sắm tại shop.";
    }
    ?>
    <section class="header-navbar">
        <div class="navbar">
            <div class="logo">
                <img src="app\views\public\Images\Logo.png" alt="Logo">
            </div>
            <div class="box">
                <form class="sbox" action="?controller=search&action=index&page=customer" method="post" onsubmit="return validateSearchForm()">
                    <input class="stext" type="text" name="q" id="searchInput" placeholder="Tìm kiếm...">
                    <button class="sbutton" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>

            <ul class="links">
                <li><a href="?controller=home&action=index&page=customer">Trang Chủ</a></li>
            </ul>
            <ul class="links">
                <li><a href="?controller=product&action=index&page=customer">Sản Phẩm</a></li>
            </ul>
            <ul class="links">
                <li><a href="?controller=home&action=about&page=customer">Thông Tin</a></li>
            </ul>
            <ul class="links">
                <li><a href="?controller=home&action=contact&page=customer">Liên Hệ</a></li>
            </ul>
            <?php
            // Kiểm tra xem người dùng đã đăng nhập hay chưa
            if (isset($_SESSION['username'])) :
                // Nếu đã đăng nhập, hiển thị phần giỏ hàng
            ?>
                <ul class="links">
                    <li><a href="?controller=home&action=cart&page=customer"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            <?php endif; ?>

            <div class="dropdown">
                <button class="dropbtn">
                    <?php
                    if (isset($_SESSION['username'])) {
                        // Nếu session 'username' tồn tại, hiển thị avatar user
                        $avatarUrl = "https://i.pinimg.com/564x/ed/b1/cb/edb1cb2b9b27bdc64d23dfb535573e28.jpg"; // Đường dẫn đến ảnh mặc định
                        $avatar = isset($_SESSION['avatar']) ? $_SESSION['avatar'] : $avatarUrl;
                        echo '<a href="?controller=home&action=profile&page=customer">';
                        echo '<img src="' . $avatar . '" alt="Avatar">';
                        echo '</a>';
                    } else {
                        // Nếu session 'username' không tồn tại, hiển thị avatar mặc định
                        $defaultAvatarUrl = "https://i.pinimg.com/564x/ed/b1/cb/edb1cb2b9b27bdc64d23dfb535573e28.jpg"; // Đường dẫn đến ảnh mặc định
                        echo '<img src="' . $defaultAvatarUrl . '" alt="Default Avatar">';
                    }
                    ?>
                </button>
                <div class="dropdown-content">
                    <?php
                    if (isset($_SESSION['username'])) {
                        echo '<a href="?controller=user&action=profile&page=customer">Profile</a>';
                        echo '<a href="?controller=user&action=logout&page=customer">Log Out</a>';
                    } else {
                        echo '<a href="?controller=user&action=getRegister&page=customer">Sign Up</a>';
                        echo '<a href="?controller=user&action=getLogin&page=customer">Log In</a>';
                    }
                    ?>
                </div>
            </div>
    </section>
</body>

</html>