<div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row'>
            <div class='col-md-3 sidebar'>
                <div class="side-menu animate-dropdown outer-bottom-xs">
                    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Phân loại</div>
                    <nav class="yamm megamenu-horizontal">
                        <ul class="nav">
                            <?php foreach ($categories as $category) : ?>
                                <li class="dropdown menu-item"> <a href=<?= "?page=customer&controller=Product&CategoryId=" . $category["id"] ?> class="dropdown-toggle"><?= $category["name"] ?></a>
                                <?php endforeach ?>
                        </ul>
                    </nav>
                </div>

                <div class="sidebar-module-container">
                    <div class="sidebar-filter">
                        <div class="sidebar-widget wow fadeInUp">
                            <div class="widget-header">
                                <h4 class="widget-title">Mức giá</h4>
                            </div>
                            <div class="sidebar-widget-body m-t-10">
                                <form action="/?page=customer&controller=Product" method="post">
                                    <div class="price-range-holder"> <span class="min-max"> <span class="pull-left">500.000</span> <span class="pull-right">2.000.000</span> </span>
                                        <input type="text" id="amount" style="border:0; color:#666666; font-weight:bold;text-align:center;">
                                        <input type="text" class="price-slider" name="price" value="">
                                    </div>
                                    <button type="submit" class="lnk btn btn-primary">Show Now</button>
                                </form>
                            </div>
                        </div>
                        <div class="home-banner"> <img src="" alt=""> </div>
                    </div>
                </div>
            </div>
            <div class='col-md-9'>
                <div class="search-result-container ">
                    <div id="myTabContent" class="tab-content category-list">
                        <div class="tab-pane active " id="grid-container">
                            <div class="category-product">
                                <div class="row">
                                    <?php foreach ($products as $product) : ?>
                                        <div class="col-sm-6 col-md-4 wow fadeInUp">
                                            <div class="products">
                                                <div class="product">

                                                    <form action="?controller=user&action=addToCart&page=customer" method="POST">
                                                        <div class="product-image">
                                                            <div class="image"> <a href="?controller=product&action=detail&page=customer&id=<?= $product['id']; ?>"><img src="<?= $product['image1']; ?>" alt=""></a> </div>
                                                            <!-- /.image -->

<<<<<<< HEAD
                                                            <div class="tag new"><span>new</span></div>
=======
                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="?controller=product&action=detail&page=customer"><?= $product['name']; ?></a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>
                                                        <div class="product-price"> <span class="price"> <?= $product['price']; ?> </span> <span class="price-before-discount">900.000</span> </div>

                                                    </div>

                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group">
                                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> Xem chi tiết <i class="fa fa-info-circle"></i> </button>
                                                                </li>
                                                            </ul>
>>>>>>> main
                                                        </div>

                                                        <div class="product-info text-left">
                                                            <h3 class="name"><a href="?controller=product&action=detail&page=customer&id=<?= $product['id']; ?>"><?= $product['name']; ?></a></h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="description"></div>
                                                            <div class="product-price"> <span class="price"> <?= $product['price']; ?> VNĐ </span> <span class="price-before-discount">900.000</span> </div>

                                                        </div>

                                                        <div class="cart clearfix animate-effect">
                                                            <div class="action">
                                                                <ul class="list-unstyled">
                                                                    <li class="add-cart-button btn-group">
                                                                        <a href="?controller=product&action=detail&page=customer&id=<?= $product['id']; ?>"><button class="btn btn-primary icon" data-toggle="dropdown" type="button"> Thêm vào giỏ hàng <i class="fa fa-shopping-cart"></i> </button></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="image1" value="<?= $product['image1']; ?>">
                                                        <input type="hidden" name="name" value="<?= $product['name']; ?>">
                                                        <input type="hidden" name="color" value="<?= $product['color']; ?>">
                                                        <input type="hidden" name="size" value="<?= $product['size']; ?>">
                                                        <input type="hidden" name="price" value="<?= $product['price']; ?>">
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>