<div class="container p-4">
    <form action="?controller=vourcher&action=create&page=Admin" method="post">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Code" name="vourcher_code">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Discoun Amount" name="discount_amount">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Status" name="status">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Description" name="description">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Expiration Date" name="expiration_date">
        </div>
        <div class="form-group">
            <button type="submit" name="create_product" class="btn btn-primary btn-block">Create</button>
        </div>
    </form>
</div>