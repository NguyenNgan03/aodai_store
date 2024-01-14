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
                <form class="sbox" action="/search" method="get">
                    <input class="stext" type="text" name="q" placeholder="Tìm kiếm bài viết...">
                    <a class="sbutton" type="submit" href="javascript:void(0);">
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
            <ul class="links">
                <li><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>
            <div class="dropdown">
                <button class="dropbtn">
                <a href="?controller=home&action=profile&page=customer">
                    <img src="app\views\public\Images\avatar.jpg" alt="Avatar">
                </a>
                </button>
                <div class="dropdown-content">
                    <a href="?controller=user&action=getRegister&page=customer">Sign Up</a>
                    <a href="?controller=user&action=getLogin&page=customer">Log In</a>
                </div>
            </div>
            <div class="dropdown_menu">
                <li><a href="?controller=home&action=index&page=customer">Trang Chủ</a></li>
                <li><a href="?controller=home&action=index&page=customer">Trang Chủ</a></li>
                <li><a href="?controller=product&action=index&page=customer">Sản Phẩm</a></li>
                <li><a href="?controller=home&action=information&page=customer">Thông Tin</a></li>
                <li><a href="?controller=home&action=contact&page=customer">Liên Hệ</a></li>
                <li><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
                <li><a href="?controller=home&action=profile&page=customer"><i class="fa fa-user"></i></a></li>
            </div>
    </section>
</body>

</html>