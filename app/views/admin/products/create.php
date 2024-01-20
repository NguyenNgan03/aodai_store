<div class="container p-4">
    <form action="?controller=product&action=create&page=Admin" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Name" name="name">
        </div>
        <div class="form-group">
            <label for="category_id">Category:</label>
            <select name="category_id" id="category_id" class="form-control">
                <option value="">Chọn</option> <!-- Giá trị mặc định -->
                <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="discount_id">Discount:</label>
            <select name="discount_id" id="discount_id" class="form-control">
                <option value="">Chọn</option> <!-- Giá trị mặc định -->
                <?php foreach ($discounts as $discount) : ?>
                    <option value="<?php echo $discount['id']; ?>"><?php echo $discount['name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <textarea class="form-control" placeholder="Description" name="description"></textarea>
        </div>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="Price" name="price">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Color" name="color">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Material" name="material">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Size" name="size">
        </div>
        <div class="form-group">
            <label for="image1">Image 1:</label>
            <input type="file" class="form-control" name="image1" accept="image/*">
        </div>
        <div class="form-group">
            <label for="image2">Image 2:</label>
            <input type="file" class="form-control" name="image2" accept="image/*">
        </div>
        <div class="form-group">
            <label for="image3">Image 3:</label>
            <input type="file" class="form-control" name="image3" accept="image/*">
        </div>
        <div class="form-group">
            <label for="image4">Image 4:</label>
            <input type="file" class="form-control" name="image4" accept="image/*">
        </div>

        <div class="form-group">
            <button type="submit" name="create_product" class="btn btn-primary btn-block">Create</button>
        </div>
    </form>
</div>