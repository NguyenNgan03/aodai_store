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
                <img src="image/Logo.png" alt="Logo">
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
                <li><a href="index.php">Trang Chủ</a></li>
                <li><a href="products.php">Sản Phẩm</a></li>
                <li><a href="about-us.php">Thông Tin</a></li>
                <li><a href="contact-us.php">Liên Hệ</a></li>
                <li ><a href="cart.php"><i class="fal fa-shopping-cart"></i></a></li>
                <li ><a href="user.php"><i class="fa-regular fa-user"></i></a></li>
            </ul>
        <div class="dropdown_menu">
        <li><a href="index.php">Trang Chủ</a></li>
                <li><a href="products.php">Sản Phẩm</a></li>
                <li><a href="about-us.php">Thông Tin</a></li>
                <li><a href="contact-us.php">Liên Hệ</a></li>
                <li ><a href="cart.php"><i class="fal fa-shopping-cart"></i></a></li>
                <li ><a href="user.php"><i class="fa-regular fa-user"></i></a></li>
        </div>
    </section>
</body>
</html>
