<div class="container p-4">
    <form action="?controller=product&action=create&page=admin" method="post">
        <input name="id" value="<?php echo $product['id']; ?>" hidden>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo $product['name']; ?>">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="Discount ID" name="discount_id" value="<?php echo $product['discount_id']; ?>">
        </div>
        
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Category ID" name="category_id" value="<?php echo $product['category_id']; ?>">
        </div>
        
        <div class="form-group">
            <textarea class="form-control" placeholder="Description" name="description"><?php echo $product['description']; ?></textarea>
        </div>
        
        <div class="form-group">
            <input type="number" class="form-control" placeholder="Price" name="price" value="<?php echo $product['price']; ?>">
        </div>
        
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Color" name="color" value="<?php echo $product['color']; ?>">
        </div>
        
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Material" name="material" value="<?php echo $product['material']; ?>">
        </div>
        
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Size" name="size" value="<?php echo $product['size']; ?>">
        </div>
        
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Image1 URL" name="image1" value="<?php echo $product['image1']; ?>">
        </div>
        
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Image2 URL" name="image2" value="<?php echo $product['image2']; ?>">
        </div>
        
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Image3 URL" name="image3" value="<?php echo $product['image3']; ?>">
        </div>
        
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Image4 URL" name="image4" value="<?php echo $product['image4']; ?>">
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Update</button>
        </div>
    </form>
</div>
