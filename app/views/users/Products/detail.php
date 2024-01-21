<div class="container-fluid">
  <form id="addToCartForm" action="?controller=cart&action=addToCart&page=customer" method="post">
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

                  <label class="color-label">Màu:</label>
                  <span name="color" id="color"> <?php echo $products['color'] ?></span>
                </div>
                <div class="size">
                  <label class="size-label">Kích cỡ:</label>
                  <select name="size" id="size">
                    <option value="XS" selected>XS</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="2XL">2XL</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="container mt-5">
              <input type="hidden" name="product_id" value="<?= $products['id']; ?>">
              <div class="row">
                <div class="quantity-container">
                  <label class="quantity-label" for="quantity">Số lượng:</label>
                  <div class="input-quantity">
                    <button class="btn btn-outline-secondary" type="button" id="decrementBtn">-</button>
                    <input type="text" name="quantity" class="form-control text-center" id="quantity" value="1">
                    <button class="btn btn-outline-secondary" type="button" id="incrementBtn">+</button>
                  </div>
                </div>
              </div>
            </div>
            <input type="hidden" name="product_id" value="<?= $products['id']; ?>">
            <input type="hidden" name="quantity" value="1"> <!-- Giá trị số lượng mặc định -->
            <button type="button" class="btn btn-outline-primary" onclick="addToCart()"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
  </form>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Thông báo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Bạn cần đăng nhập để thêm sản phẩm vào giỏ hàng.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <a href="?controller=user&action=getLogin&page=customer" class="btn btn-primary">Đăng nhập</a>
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
      <form action="?page=Customer&controller=Comment&action=createComment" method="post">
        <textarea class="form-control" id="newComment" placeholder="Thêm bình luận" name="content"></textarea>
        <input hidden name="product_id" value="<?= $products['id']; ?>">
        <button class="btn btn-primary" type="sumbit">Thêm bình luận</button>
      </form>

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
<script>
  let currentQuantity = 1;

  function addToCart() {
    const form = document.querySelector('#addToCartForm');
    const color = document.getElementById('color').innerText;
    const size = document.getElementById('size').value;

    const formData = new FormData(form);
    formData.append('color', color);
    formData.append('size', size);
    formData.append('quantity', currentQuantity);

    // Kiểm tra xem người dùng đã đăng nhập hay chưa
    <?php if (!isset($_SESSION['username'])) : ?>
      // Nếu chưa, hiển thị modal
      $('#loginModal').modal('show');
    <?php else : ?>
      fetch(form.action, {
          method: 'POST',
          body: formData,
        })
        .then(response => response.json())
        .then(data => {
          form.submit();
          // Xử lý phản hồi theo cách cần thiết
        })
        .catch(error => console.error('Lỗi:', error));
      // Nếu đã đăng nhập, thực hiện submit form

    <?php endif; ?>
  }
  // Cập nhật nút tăng số lượng
  document.getElementById('incrementBtn').addEventListener('click', function() {
    // Tăng giá trị
    if (currentQuantity >= 1) {
      currentQuantity++;
      // Hiển thị giá trị trong ô input
      document.getElementById('quantity').value = currentQuantity;
    }
  });

  document.getElementById('decrementBtn').addEventListener('click', function() {
    if (currentQuantity > 1) {
      // Giảm giá trị
      currentQuantity--;
      // Hiển thị giá trị trong ô input
      document.getElementById('quantity').value = currentQuantity;
    }
  });
</script>