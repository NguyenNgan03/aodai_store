<div class="main-container">
  <img class="banner" src="app\views\public\Images\Banner-1.png" />

  <h1 class="outstanding-products">SẢN PHẨM NỔI BẬT</h1>

  <?php foreach ($products as $product) : ?>
    <div class="flex-row-a">
      <img class="imgl-master" src="<?= $product['image1']; ?>" />
      <img class="img-master" src="<?= $product['image1']; ?>" />
      <img class="mgm-master" src="<?= $product['image1']; ?>" />
      <img class="mgl-master" src="<?= $product['image1']; ?>" />
      <span class="text-1"> <?= $product['description']; ?> </span>
      <span class="text-2"> <?= $product['description']; ?> </span>
      <span class="text-3"> <?= $product['description']; ?> </span>
      <span class="text-4"> <?= $product['description']; ?> </span>
      <div class="frame-a"><span class="text-6"><?= $product['price']; ?> VNĐ </span></div>
      <div class="frame-b"><span class="text-7"><?= $product['price']; ?> VNĐ </span></div>
      <div class="frame-c"><span class="text-8"><?= $product['price']; ?> VNĐ </span></div>
      <div class="frame-d"><span class="text-9"><?= $product['price']; ?> VNĐ </span></div>
    </div>
  <?php endforeach; ?>
  <div class="flex-row-b">
    <img class="mgl-master-c" src="app\views\public\Images\image5.png" />
    <img class="mgm-master-d" src="app\views\public\Images\image6.png" />
    <img class="mgm-master-e" src="app\views\public\Images\image7.png" />
    <img class="mgl-master-f" src="app\views\public\Images\image8.png" />
    <span class="text-a">Áo dài Dáng xưa Yên Phương 2024 - Đỏ</span>
    <span class="text-b">Áo dài Dáng xưa Yên Phương 2024 - Xanh lục bảo<br /></span>
    <span class="text-c">Áo dài Truyền thống Tinh Khôi - Hồng</span>
    <span class="text-d">Áo dài Truyền thống Tinh Khôi - Hồng</span>
    <div class="frame-13"><span class="vnd-14">750.000 VNĐ</span></div>
    <div class="frame-15"><span class="vnd-16">750.000 VNĐ</span></div>
    <div class="frame-17"><span class="vnd-18">750.000 VNĐ</span></div>
    <div class="frame-19"><span class="vnd-1a">750.000 VNĐ</span></div>
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
  <div class="flex-row-c">
    <img class="imgl-master-21" src="app\views\public\Images\image1.png" />
    <img class="img-master-22" src="app\views\public\Images\image2.png" />
    <img class="mgm-master-23" src="app\views\public\Images\image3.png" />
    <img class="mgl-master-24" src="app\views\public\Images\image4.png" />
    <span class="text-e">Áo dài Bách Hoa Xuân - Hồng đậm</span>
    <span class="text-f">Áo dài Truyền thống Tinh Khôi - Hồng</span>
    <span class="text-g">Áo dài Truyền thống Tinh Khôi - Hồng</span>
    <span class="text-h">Áo dài Truyền thống Tinh Khôi - Hồng</span>
    <div class="frame-2d"><span class="text-21">750.000 VNĐ</span></div>
    <div class="frame-2e"><span class="text-22">750.000 VNĐ</span></div>
    <div class="frame-2f"><span class="text-23">750.000 VNĐ</span></div>
    <div class="frame-30"><span class="text-24">750.000 VNĐ</span></div>
  </div>
  
  <!-- <div class="page">
    <span class="text-25">1</span>
    <span class="text-26">2</span>
    <span class="text-27">3</span>
  </div> -->
</div>