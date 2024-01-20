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
        <a href="?controller=product&action=detail&page=customer&id=<?= $product['id']; ?>"><img class="img-product" src="<?= $product['image1']; ?>"></a>
        <div>

          <h3 class="name-product"><a href="?controller=product&action=detail&page=customer&id=<?= $product['id']; ?>"><?= $product['name']; ?></a></h3>
          <div class="price">
            <span class="price-count"><?= $product['price']; ?> VNĐ</span>
          </div>
        </div>
      </div>
    <?php endfor; ?>
  </div>
  <h1 class="service">DỊCH VỤ</h1>
  <div class="content1">
    <div class="flex-row-cd">
      <img class="shipping" src="app\views\public\Images\shipping.png" />
      <span class="free-shipping">MIỄN PHÍ VẬN CHUYỂN</span>
      <span class="lorem-ipsum-printing">Chúng tôi hân hạnh mang đến dịch vụ vận chuyển miễn phí, giúp bạn tiết kiệm chi phí và nhận được áo dài yêu thích tận cửa nhà.</span>
    </div>

    <div class="flex-row-bf">
      <img class="refund" src="app\views\public\Images\refund.png" />
      <span class="refund-100">HOÀN TIỀN 100%</span>
      <span class="lorem-ipsum-printing-1f">Chấp nhận không hài lòng? Chúng tôi cam kết hoàn tiền 100%, đảm bảo sự an tâm và tin tưởng khi mua sắm tại AoDai Store.</span>
    </div>

    <div class="flex-row-d-1e">
      <img class="support" src="app\views\public\Images\support.png" />
      <span class="support-24-7">HỖ TRỢ 24/7</span>
      <span class="lorem-ipsum-printing-20">Với đội ngũ hỗ trợ chuyên nghiệp hoạt động 24/7, chúng tôi luôn sẵn lòng giúp đỡ, giải đáp mọi thắc mắc của bạn mọi lúc, mọi nơi.</span>
    </div>
  </div>
  <h1 class="selling-products">SẢN PHẨM BÁN CHẠY</h1>
  <div class="row-product">
    <?php for ($i = 0; $i < 8; $i++) :
      $product = $products_selling[$i]
    ?>
      <div class="item-product">
        <a href="?controller=product&action=detail&page=customer&id=<?= $product['id']; ?>"><img class="img-product" src="<?= $product['image1']; ?>"></a>
        <div>
          <h3 class="name-product"><a href="?controller=product&action=detail&page=customer&id=<?= $product['id']; ?>"><?= $product['name']; ?></a></h3>
          <div class="price">
            <span class="price-count"><?= $product['price']; ?> VNĐ</span>
          </div>
        </div>
      </div>
    <?php endfor; ?>
  </div>
</div>