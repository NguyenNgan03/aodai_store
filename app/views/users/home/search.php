<div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row'>
            <div class='col-md-3 sidebar'>
                <div class="side-menu animate-dropdown outer-bottom-xs">
                    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Phân loại</div>
                    <nav class="yamm megamenu-horizontal">
                        <ul class="nav">
                            <?php foreach ($categories as $category) : ?>
                                <li class="dropdown menu-item"> <a href=<?= "?page=customer&controller=Product&CategoryId=" . $category["id"] ?> class="dropdown-toggle" data-toggle="dropdown"><i class="" aria-hidden="true"></i><?= $category["name"] ?></a>
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
                            <?php if (!empty($searchResults)): ?>
                                <div class="row">
                                    <?php foreach ($searchResults as $product) : ?>
                                    <?php foreach ($products as $product) : ?>
                                        <div class="col-sm-6 col-md-4 wow fadeInUp">
                                            <div class="products">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image"> <a href="?controller=product&action=detail&page=customer"><img src="<?= $product['image1']; ?>" alt=""></a> </div>
                                                        <!-- /.image -->

                                                        <div class="tag new"><span>new</span></div>
                                                    </div>

                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="?controller=product&action=detail&page=customer"><?= $product['description']; ?></a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>
                                                        <div class="product-price"> <span class="price"> <?= $product['price']; ?> </span> <span class="price-before-discount">900.000</span> </div>

                                                    </div>

                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group">
                                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> Thêm vào giỏ hàng <i class="fa fa-shopping-cart"></i> </button>
                                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <?php endforeach; ?>
                                </div>
                                <?php else: 
                                    echo '<p>No results found.</p>';
                                    ?>
                                <?php endif; ?>
                        </div>
                        <div class="tab-pane " id="list-container">
                            <div class="category-product">
                                <div class="category-product-inner wow fadeInUp">
                                    <div class="products">
                                        <div class="product-list product">
                                            <div class="row product-list-row">
                                                <div class="col col-sm-4 col-lg-4">
                                                    <div class="product-image">
                                                        <div class="image"> <img src="https://product.hstatic.net/1000136076/product/img_6780_076d07ac93784bd6a49519fdf9fa69fa_master.jpeg" alt=""> </div>
                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-sm-8 col-lg-8">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="app\views\users\Products\detail.php">Áo dài truyền thống Tinh khôi - Hồng</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> <span class="price"> 750.000 </span> <span class="price-before-discount">900.000</span> </div>
                                                        <!-- /.product-price -->
                                                        <div class="description m-t-10">[Mới] Áo dài Bách Hoa Xuân - Tết 2024 Hình ảnh và sản phẩm
                                                            được thực hiện bởi AoDai Store. Thông tin sản phẩm Chất liệu: Tằm nhung cao cấp, phối
                                                            organza trơn và voan hoa. Giá trên chỉ có áo, chưa bao gồm quần và phụ kiện đi kèm. Sản
                                                            phẩm có sẵn sẽ được gửi đến khách hàng trong thời gian 3-4 ngày kể từ lúc thanh toán
                                                            online.</div>
                                                        <div class="cart clearfix animate-effect">
                                                            <div class="action">
                                                                <ul class="list-unstyled">
                                                                    <li class="add-cart-button btn-group">
                                                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                        <button class="btn btn-primary cart-btn" type="button">Thêm vào giỏ hàng</button>
                                                                    </li>
                                                                    <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                                    <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tag new"><span>new</span></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="category-product-inner wow fadeInUp">
                                    <div class="products">
                                        <div class="product-list product">
                                            <div class="row product-list-row">
                                                <div class="col col-sm-4 col-lg-4">
                                                    <div class="product-image">
                                                        <div class="image"> <img src="https://product.hstatic.net/1000136076/product/img_6780_076d07ac93784bd6a49519fdf9fa69fa_master.jpeg" alt=""> </div>
                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-sm-8 col-lg-8">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="detail.html">Áo dài truyền thống Tinh khôi - Hồng</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> <span class="price"> 750.000 </span> <span class="price-before-discount">900.000</span> </div>
                                                        <!-- /.product-price -->
                                                        <div class="description m-t-10">[Mới] Áo dài Bách Hoa Xuân - Tết 2024 Hình ảnh và sản phẩm
                                                            được thực hiện bởi AoDai Store. Thông tin sản phẩm Chất liệu: Tằm nhung cao cấp, phối
                                                            organza trơn và voan hoa. Giá trên chỉ có áo, chưa bao gồm quần và phụ kiện đi kèm. Sản
                                                            phẩm có sẵn sẽ được gửi đến khách hàng trong thời gian 3-4 ngày kể từ lúc thanh toán
                                                            online.</div>
                                                        <div class="cart clearfix animate-effect">
                                                            <div class="action">
                                                                <ul class="list-unstyled">
                                                                    <li class="add-cart-button btn-group">
                                                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                        <button class="btn btn-primary cart-btn" type="button">Thêm vào giỏ hàng</button>
                                                                    </li>
                                                                    <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                                    <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tag new"><span>new</span></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="category-product-inner wow fadeInUp">
                                    <div class="products">
                                        <div class="product-list product">
                                            <div class="row product-list-row">
                                                <div class="col col-sm-4 col-lg-4">
                                                    <div class="product-image">
                                                        <div class="image"> <img src="https://product.hstatic.net/1000136076/product/img_6780_076d07ac93784bd6a49519fdf9fa69fa_master.jpeg" alt=""> </div>
                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-sm-8 col-lg-8">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="detail.html">Áo dài truyền thống Tinh khôi - Hồng</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> <span class="price"> 750.000 </span> <span class="price-before-discount">900.000</span> </div>
                                                        <!-- /.product-price -->
                                                        <div class="description m-t-10">[Mới] Áo dài Bách Hoa Xuân - Tết 2024 Hình ảnh và sản phẩm
                                                            được thực hiện bởi AoDai Store. Thông tin sản phẩm Chất liệu: Tằm nhung cao cấp, phối
                                                            organza trơn và voan hoa. Giá trên chỉ có áo, chưa bao gồm quần và phụ kiện đi kèm. Sản
                                                            phẩm có sẵn sẽ được gửi đến khách hàng trong thời gian 3-4 ngày kể từ lúc thanh toán
                                                            online.</div>
                                                        <div class="cart clearfix animate-effect">
                                                            <div class="action">
                                                                <ul class="list-unstyled">
                                                                    <li class="add-cart-button btn-group">
                                                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                        <button class="btn btn-primary cart-btn" type="button">Thêm vào giỏ hàng</button>
                                                                    </li>
                                                                    <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                                    <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tag new"><span>new</span></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="category-product-inner wow fadeInUp">
                                    <div class="products">
                                        <div class="product-list product">
                                            <div class="row product-list-row">
                                                <div class="col col-sm-4 col-lg-4">
                                                    <div class="product-image">
                                                        <div class="image"> <img src="https://product.hstatic.net/1000136076/product/img_6780_076d07ac93784bd6a49519fdf9fa69fa_master.jpeg" alt=""> </div>
                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-sm-8 col-lg-8">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="detail.html">Áo dài truyền thống Tinh khôi - Hồng</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> <span class="price"> 750.000 </span> <span class="price-before-discount">900.000</span> </div>
                                                        <!-- /.product-price -->
                                                        <div class="description m-t-10">[Mới] Áo dài Bách Hoa Xuân - Tết 2024 Hình ảnh và sản phẩm
                                                            được thực hiện bởi AoDai Store. Thông tin sản phẩm Chất liệu: Tằm nhung cao cấp, phối
                                                            organza trơn và voan hoa. Giá trên chỉ có áo, chưa bao gồm quần và phụ kiện đi kèm. Sản
                                                            phẩm có sẵn sẽ được gửi đến khách hàng trong thời gian 3-4 ngày kể từ lúc thanh toán
                                                            online.</div>
                                                        <div class="cart clearfix animate-effect">
                                                            <div class="action">
                                                                <ul class="list-unstyled">
                                                                    <li class="add-cart-button btn-group">
                                                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                        <button class="btn btn-primary cart-btn" type="button">Thêm vào giỏ hàng</button>
                                                                    </li>
                                                                    <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                                    <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tag new"><span>new</span></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="category-product-inner wow fadeInUp">
                                    <div class="products">
                                        <div class="product-list product">
                                            <div class="row product-list-row">
                                                <div class="col col-sm-4 col-lg-4">
                                                    <div class="product-image">
                                                        <div class="image"> <img src="https://product.hstatic.net/1000136076/product/img_6780_076d07ac93784bd6a49519fdf9fa69fa_master.jpeg" alt=""> </div>
                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-sm-8 col-lg-8">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="detail.html">Áo dài truyền thống Tinh khôi - Hồng</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> <span class="price"> 750.000 </span> <span class="price-before-discount">900.000</span> </div>
                                                        <!-- /.product-price -->
                                                        <div class="description m-t-10">[Mới] Áo dài Bách Hoa Xuân - Tết 2024 Hình ảnh và sản phẩm
                                                            được thực hiện bởi AoDai Store. Thông tin sản phẩm Chất liệu: Tằm nhung cao cấp, phối
                                                            organza trơn và voan hoa. Giá trên chỉ có áo, chưa bao gồm quần và phụ kiện đi kèm. Sản
                                                            phẩm có sẵn sẽ được gửi đến khách hàng trong thời gian 3-4 ngày kể từ lúc thanh toán
                                                            online.</div>
                                                        <div class="cart clearfix animate-effect">
                                                            <div class="action">
                                                                <ul class="list-unstyled">
                                                                    <li class="add-cart-button btn-group">
                                                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                        <button class="btn btn-primary cart-btn" type="button">Thêm vào giỏ hàng</button>
                                                                    </li>
                                                                    <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                                    <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tag new"><span>new</span></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="category-product-inner wow fadeInUp">
                                    <div class="products">
                                        <div class="product-list product">
                                            <div class="row product-list-row">
                                                <div class="col col-sm-4 col-lg-4">
                                                    <div class="product-image">
                                                        <div class="image"> <img src="https://product.hstatic.net/1000136076/product/img_6780_076d07ac93784bd6a49519fdf9fa69fa_master.jpeg" alt=""> </div>
                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-sm-8 col-lg-8">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="detail.html">Áo dài truyền thống Tinh khôi - Hồng</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> <span class="price"> 750.000 </span> <span class="price-before-discount">900.000</span> </div>
                                                        <!-- /.product-price -->
                                                        <div class="description m-t-10">[Mới] Áo dài Bách Hoa Xuân - Tết 2024 Hình ảnh và sản phẩm
                                                            được thực hiện bởi AoDai Store. Thông tin sản phẩm Chất liệu: Tằm nhung cao cấp, phối
                                                            organza trơn và voan hoa. Giá trên chỉ có áo, chưa bao gồm quần và phụ kiện đi kèm. Sản
                                                            phẩm có sẵn sẽ được gửi đến khách hàng trong thời gian 3-4 ngày kể từ lúc thanh toán
                                                            online.</div>
                                                        <div class="cart clearfix animate-effect">
                                                            <div class="action">
                                                                <ul class="list-unstyled">
                                                                    <li class="add-cart-button btn-group">
                                                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                        <button class="btn btn-primary cart-btn" type="button">Thêm vào giỏ hàng</button>
                                                                    </li>
                                                                    <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                                    <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tag new"><span>new</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix filters-container">
                        <div class="text-right">
                            <div class="pagination-container">
                                <ul class="list-inline list-unstyled">
                                    <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>