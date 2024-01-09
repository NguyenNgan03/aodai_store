<div class="container p-4">
    <?php foreach ($users as $user) : ?>
        <form action="?controller=user&action=update&page=admin" method="post">
            <input name="id" value="<?php echo $user['id']; ?>" hidden>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" name="username" value="<?php echo $user['username']; ?>">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $user['email']; ?>">
            </div>
            <div class="form-group">
                <input type="tel" class="form-control" placeholder="Phone Number" name="phone" value="<?php echo $user['phone']; ?>">
            </div>
            <div class="form-group">
                <select name="role" id="role">
                    <option value="<?php echo $user['role']; ?>">Admin</option>
                    <option value="<?php echo $user['role']; ?>" selected>Customer</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
        </form>
    <?php endforeach ?>
</div>