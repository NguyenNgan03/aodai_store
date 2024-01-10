<div class="container p-4">
    <form action="?controller=user&action=create&page=Admin" method="post">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Product ID" name="product_id">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="User ID" name="user_id">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Content" name="content">
        </div>
        <div class="form-group">
            <button type="submit" name="create_product" class="btn btn-primary btn-block">Create</button>
        </div>
    </form>
</div>