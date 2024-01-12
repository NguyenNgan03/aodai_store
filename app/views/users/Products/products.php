<div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row'>
            <div class='col-md-3 sidebar'>
                <div class="side-menu animate-dropdown outer-bottom-xs">
                    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Phân loại</div>
                    <nav class="yamm megamenu-horizontal">
                        <ul class="nav">
                            <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="" aria-hidden="true"></i>Áo dài cách tân</a></li>

                            <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="" aria-hidden="true"></i>Áo dài lụa</a>

                            <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="" aria-hidden="true"></i>Áo dài cưới</a></li>

                            <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class=""></i>ÁO dài truyền thống</a></li>

                            <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class=""></i>Áo dài cho bé</a> </li>

                            <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class=""></i>Áo dài nam</a></li>

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
                                <div class="price-range-holder"> <span class="min-max"> <span class="pull-left">500.000</span> <span class="pull-right">1.000.000</span> </span>
                                    <input type="text" id="amount" style="border:0; color:#666666; font-weight:bold;text-align:center;">
                                    <input type="text" class="price-slider" value="">
                                </div>
                                <a href="#" class="lnk btn btn-primary">Show Now</a>
                            </div>

                        </div>

                        <div class="sidebar-widget wow fadeInUp">
                            <div class="widget-header">
                                <h4 class="widget-title">Bộ sưu tập</h4>
                            </div>
                            <div class="sidebar-widget-body">
                                <ul class="list">
                                    <li><a href="#">BST Áo dài thu đông</a></li>
                                    <li><a href="#">BST Áo dài cưới</a></li>
                                    <li><a href="#">BST Áo dài Tết</a></li>
                                    <li><a href="#">BST Áo dài gia đình</a></li>
                                </ul>
                                <!--<a href="#" class="lnk btn btn-primary">Show Now</a>-->
                            </div>

                        </div>
                        <div class="sidebar-widget wow fadeInUp">
                            <div class="widget-header">
                                <h4 class="widget-title">Màu sắc</h4>
                            </div>
                            <div class="sidebar-widget-body">
                                <ul class="list">
                                    <li><a href="#">Đỏ</a></li>
                                    <li><a href="#">Xanh dương</a></li>
                                    <li><a href="#">Vàng</a></li>
                                    <li><a href="#">Hồng</a></li>
                                    <li><a href="#">Trắng</a></li>
                                    <li><a href="#">Tím</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="home-banner"> <img src="" alt=""> </div>
                    </div>
                </div>
            </div>
            <div class='col-md-9'>
                <div class="clearfix filters-container m-t-10">
                    <div class="row">
                        <div class="col col-sm-6 col-md-2">
                            <div class="filter-tabs">
                                <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                                    <li class="active"> <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a> </li>
                                    <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th-list"></i>List</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col col-sm-12 col-md-6">
                            <div class="col col-sm-3 col-md-6 no-padding">
                                <div class="lbl-cnt"> <span class="lbl">Sort by</span>
                                    <div class="fld inline">
                                        <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                                            <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> Name <span class="caret"></span> </button>
                                            <ul role="menu" class="dropdown-menu">
                                                <li role="presentation"><a href="#">Name</a></li>
                                                <li role="presentation"><a href="#">Price:Lowest first</a></li>
                                                <li role="presentation"><a href="#">Price:HIghest first</a></li>
                                                <li role="presentation"><a href="#">Product Name:A to Z</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col col-sm-6 col-md-4 text-right">
                            <div class="pagination-container">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="search-result-container ">
                    <div id="myTabContent" class="tab-content category-list">
                        <div class="tab-pane active " id="grid-container">
                            <div class="category-product">
                                <div class="row">
                                    <?php foreach ($products as $product) : ?>
                                        <div class="col-sm-6 col-md-4 wow fadeInUp">
                                            <div class="products">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image"> <a href="detail.html"><img src="<?= $product['image1']; ?>" alt=""></a> </div>

                                                        <div class="tag new"><span>new</span></div>
                                                    </div>

                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="detail.html"><?= $product['description']; ?></a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="description"></div>
                                                        <div class="product-price"> <span class="price"> <?= $product['price']; ?> </span> <span class="price-before-discount">900.000</span> </div>

                                                    </div>

                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group">
                                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                                </li>
                                                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
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