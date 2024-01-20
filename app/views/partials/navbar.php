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
    <section class="header-navbar">
        <div class="navbar">
            <div class="logo">
                <img src="app\views\public\Images\Logo.png" alt="Logo">
            </div>
            <div class="box">
                <form class="sbox" action="?controller=search&page=Customer&action=index" method="get">
                    <input class="stext" type="text" name="q" placeholder="Tìm kiếm...">
                    <a class="sbutton" type="submit" href="">
                        <i class="fa fa-search"></i>
                    </a>
                </form>
            </div>
            <ul class="links">
                <li><a href="?controller=home&action=index&page=customer">Trang Chủ</a></li>
            </ul>
            <ul class="links">
                <li><a href="?controller=product&action=index&page=customer">Sản Phẩm</a></li>
            </ul>
            <ul class="links">
                <li><a href="?controller=home&action=information&page=customer">Thông Tin</a></li>
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
                        $avatarUrl = "app\views\public\Images\image3.png"; // Đường dẫn đến ảnh mặc định
                        $avatar = isset($_SESSION['avatar']) ? $_SESSION['avatar'] : $avatarUrl;
                        echo '<a href="?controller=home&action=profile&page=customer">';
                        echo '<img src="' . $avatar . '" alt="Avatar">';
                        echo '</a>';
                    } else {
                        // Nếu session 'username' không tồn tại, hiển thị avatar mặc định
                        $defaultAvatarUrl = "app\views\public\Images\default-avatar.jpg"; // Đường dẫn đến ảnh mặc định
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