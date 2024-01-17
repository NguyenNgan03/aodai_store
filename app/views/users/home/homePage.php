<div class="main-container">
<div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="app\views\public\Images\Banner-1.png" alt="Large Image"></div>
            <div class="swiper-slide"><img src="app\views\public\Images\Banner-2.png" alt="Thumbnail 1"></div>
            <div class="swiper-slide"><img src="app\views\public\Images\Banner-3.png" alt="Thumbnail 2"></div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
  <br>

  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
  <!-- <img class="banner" src="app\views\public\Images\Banner-1.png" /> -->
  <h1 class="outstanding-products">SẢN PHẨM NỔI BẬT</h1>
  <div class="row-product">
    <?php foreach ($products as $product) : ?>
      <div class="item-product">
        <img class="img-product" src="<?= $product['image1']; ?>">
        <div>
          <h3 class="name-product"><?= $product['name']; ?></h3>
          <div class="price">
            <span class="price-count"><?= $product['price']; ?> VNĐ</span>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <h1 class="service">DỊCH VỤ</h1>
  <div class="flex-row-cd">
    <img class="shipping" src="app\views\public\Images\shipping.png" />
    <img class="refund" src="app\views\public\Images\refund.png" />
    <img class="support" src="app\views\public\Images\support.png" />
  </div>
  <div class="flex-row-bf">
    <span class="free-shipping">MIỄN PHÍ VẬN CHUYỂN</span>
    <span class="refund-100">HOÀN TIỀN 100%</span>
    <span class="support-24-7">HỖ TRỢ 24/7</span>
  </div>
  <div class="flex-row-d-1e">
    <span class="lorem-ipsum-printing">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
    <span class="lorem-ipsum-printing-1f">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
    <span class="lorem-ipsum-printing-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
  </div>
  <h1 class="selling-products">SẢN PHẨM BÁN CHẠY</h1>
  <div class="row-product">
    <?php foreach ($products as $product) : ?>
      <div class="item-product">
        <img class="img-product" src="<?= $product['image1']; ?>">
        <div>
          <h3 class="name-product"><?= $product['name']; ?></h3>
          <div class="price">
            <span class="price-count"><?= $product['price']; ?> VNĐ</span>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>