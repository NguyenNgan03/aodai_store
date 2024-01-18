<div class="container-fluid">
  <!-- main -->
  <div class="main1">
    <div class="row_img">
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="w3-container">
          <div class="w3-content" style="max-width:400px">
            <img class="mySlides" src="<?= $products['image1']; ?>" style="width:90%">
            <img class="mySlides" src="<?= $products['image2']; ?>" style="width:90%;display:none">
            <img class="mySlides" src="<?= $products['image3']; ?>" style="width:90%;display:none">

            <div class="w3-row-padding w3-section">
              <div class="w3-col s4">
                <img class="demo w3-opacity w3-hover-opacity-off" src="<?= $products['image1']; ?>" style="width:100%;cursor:pointer" onclick="currentDiv(1)">
              </div>
              <div class="w3-col s4">
                <img class="demo w3-opacity w3-hover-opacity-off" src="<?= $products['image2']; ?>" style="width:100%;cursor:pointer" onclick="currentDiv(2)">
              </div>
              <div class="w3-col s4">
                <img class="demo w3-opacity w3-hover-opacity-off" src="<?= $products['image3']; ?>" style="width:100%;cursor:pointer" onclick="currentDiv(3)">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="especialy">
          <h2 class="main_name_product"><?= $products['name']; ?></h2>
          <div class="container mt-5">
            <div class="infor">
              <h2 class="highlight"><?= $products['price']; ?> VNĐ</h2>
              <div class="status">
                <span class="status-span">Tình trạng:</span>
                <span>Còn hàng</span>
              </div>
              <div class="category">
                <span class="category-span">Phân loại:</span>
                <span><?= $products['category_name']; ?></span>
              </div>
              <span><?= $products['discount_name']; ?></span>
            </div>
          </div>
          <div class="container mt-5">
            <div class="choose">
              <div class="color">
                <label class="color-label">Chọn màu:</label>
                <select>
                  <option value="color1" selected>Hồng</option>
                  <option value="color2">Đỏ</option>
                  <option value="color3">Đen</option>
                  <option value="color4">Vàng</option>
                </select>
              </div>
              <div class="size">
                <label class="size-label">Kích cỡ:</label>
                <select>
                  <option value="size1" selected>XS</option>
                  <option value="size2">M</option>
                  <option value="size3">L</option>
                  <option value="size4">XL</option>
                </select>
              </div>
            </div>
          </div>
          <div class="container mt-5">
            <div class="row">
              <div class="quantity-container">
                <label class="quantity-label" for="quantity">Số lượng:</label>
                <div class="input-quantity">
                  <button class="btn btn-outline-secondary" type="button" id="decrementBtn">-</button>
                  <input type="text" class="form-control text-center" id="quantity" value="1">
                  <button class="btn btn-outline-secondary" type="button" id="incrementBtn">+</button>
                </div>
              </div>
            </div>
          </div>
          <div class="text-a d-flex align-items-center justify-content-between">
            <button type="button" class="btn btn-outline-primary" id="primary"><i class="fa fa-shopping-cart"></i> Add to cart</button>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="toggleContent('info')">Thông tin sản phẩm</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="toggleContent('comment')">Bình luận</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-4">
      <div class="mainText">
        <span class="descriptions_product"><?= $products['description']; ?></span>
      </div>

      <!-- Comment section -->
      <div class="comments" id="comments">
        <div class="form-group">
          <textarea class="form-control" id="newComment" placeholder="Thêm bình luận"></textarea>
          <button class="btn btn-primary" onclick="addComment()">Thêm bình luận</button>
        </div>

        <!-- Hiển thị danh sách bình luận -->
        <ul class="list-unstyled" id="commentList">
          <?php foreach ($comments as $comment) : ?>
            <li>
              <strong><?= $comment['content'] ?>:</strong>
              <?= $comment['created_at'] ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <!-- Sugestion tour -->
      <div class="sugestionTour">
        <h1><Strong>RELATED PRODUCTS</Strong></h1>
        <div class="row-product">
          <div class="item-product">
            <img class="img-product" src="<?= $products['image1']; ?>">
            <div>
              <h3 class="name-product"><?= $products['name']; ?></h3>
              <div class="price">
                <span class="price-count"><?= $products['price']; ?> VNĐ</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>