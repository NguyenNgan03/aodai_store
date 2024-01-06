<div class="container p-4">
    <form action="?controller=product&action=create&page=Admin" method="post">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Name" name="name">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="Discount ID" name="discount_id">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="Category ID" name="category_id">
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
            <input type="text" class="form-control" placeholder="Image URL 1" name="image1">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Image URL 2" name="image2">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Image URL 3" name="image3">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Image URL 4" name="image4">
        </div>
        <div class="form-group">
            <button type="submit" name="create_product" class="btn btn-primary btn-block">Create</button>
        </div>
    </form>
</div>
