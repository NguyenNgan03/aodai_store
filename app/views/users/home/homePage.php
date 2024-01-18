<div class="main-container">
  <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="app\views\public\Images\Banner-1.png" style="width:100%">
      <div class="text">Caption Text</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="app\views\public\Images\Banner-2.png" style="width:100%">
      <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="app\views\public\Images\Banner-3.png" style="width:100%">
      <div class="text">Caption Three</div>
    </div>

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
    <?php for ($i = 0; $i < 8; $i++) :
      $product = $products_outstanding[$i]
    ?>
      <div class="item-product">
        <img class="img-product" src="<?= $product['image1']; ?>">
        <div>
          <h3 class="name-product"><?= $product['name']; ?></h3>
          <div class="price">
            <span class="price-count"><?= $product['price']; ?> VNĐ</span>
          </div>
        </div>
      </div>
    <?php endfor; ?>
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
    <?php for ($i = 0; $i < 8; $i++) :
      $product = $products_selling[$i]
    ?>
      <div class="item-product">
        <img class="img-product" src="<?= $product['image1']; ?>">
        <div>
          <h3 class="name-product"><?= $product['name']; ?></h3>
          <div class="price">
            <span class="price-count"><?= $product['price']; ?> VNĐ</span>
          </div>
        </div>
      </div>
    <?php endfor; ?>
  </div>
</div>