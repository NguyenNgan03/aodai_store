<div class="container p-4">
    <?php foreach ($vourchers as $vourcher) : ?>
        <form action="?controller=vourcher&action=update&page=admin" method="post">
            <input name="id" value="<?php echo $vourcher['id']; ?>" hidden>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Code" name="vourcher_code" value="<?php echo $vourcher['vourcher_code']; ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Discoun Amount" name="discount_amount" value="<?php echo $vourcher['discount_amount']; ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Status" name="status" value="<?php echo $vourcher['status']; ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Description" name="description" name="discount_amount" value="<?php echo $vourcher['description']; ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Expiration Date" name="expiration_date" value="<?php echo $vourcher['expiration_date']; ?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
        </form>
    <?php endforeach ?>
</div>