<?php if (!empty($searchResults)) : ?>
    <h2>Kết quả tìm kiếm:</h2>
    <div class="product-list">
        <?php foreach ($searchResults as $product) : ?>
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
        <?php endforeach; ?>
    </div>
<?php else : ?>
    echo '<p>Không có kết quả tìm kiếm.</p>';
<?php endif; ?>