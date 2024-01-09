<div class="container p-4">
    <?php foreach ($users as $user) : ?>
        <form action="?controller=vourcher&action=update&page=admin" method="post">
            <input name="id" value="<?php echo $user['id']; ?>" hidden>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="User ID" name="user_id" value="<?php echo $user['user_id']; ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Code" name="vourcher_code" value="<?php echo $user['vourcher_code']; ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Discoun Amount" name="discount_amount" value="<?php echo $user['discount_amount']; ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Status" name="status" value="<?php echo $user['status']; ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Description" name="description" name="discount_amount" value="<?php echo $user['description']; ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Expiration Date" name="expiration_date" value="<?php echo $user['expiration_date']; ?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
        </form>
    <?php endforeach ?>
</div>