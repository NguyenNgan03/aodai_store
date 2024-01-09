<div class="container p-4">
    <?php foreach ($users as $user) : ?>
        <form action="?controller=comment&action=update&page=admin" method="post">
            <input name="id" value="<?php echo $user['id']; ?>" hidden>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Product ID" name="product_id" value="<?php echo $user['product_id']; ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="User ID" name="user_id" value="<?php echo $user['user_id']; ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Content" name="content" value="<?php echo $user['content']; ?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
        </form>
    <?php endforeach ?>
</div>