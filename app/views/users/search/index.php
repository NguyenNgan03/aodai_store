<?php if (!empty($searchResults)) : ?>
    <div class="row-product">
        <?php foreach ($searchResults as $product) : ?>
            <div class="item-product">
                <a href="?controller=product&action=detail&page=customer&id=<?= $product['id']; ?>"><img class="img-product" src="<?= $product['image1']; ?>"></a>
                <div>

                    <h3 class="name-product"><a href="?controller=product&action=detail&page=customer&id=<?= $product['id']; ?>"><?= $product['name']; ?></a></h3>
                    <div class="price">
                        <span class="price-count"><?= $product['price']; ?> VNĐ</span>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php else : ?>
    <div class="search-note">
        <img src="app\views\public\Images\search.jpg" />
        <h3>Chúng tôi không tìm thấy bất kỳ kết quả nào</h3>
        <p>Đảm bảo tất cả các từ đều đúng chính tả hoặc thử từ khóa khác.</p>
    </div>
<?php endif; ?>