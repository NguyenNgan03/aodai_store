<div class="container p-4">
    <form action="?controller=user&action=create&page=Admin" method="post">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Name" name="username">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" placeholder="Email" name="email">
        </div>
        <div class="form-group">
            <input type="tel" class="form-control" placeholder="Phone Number" name="phone">
        </div>
        <div class="form-group">
            <select name="role" id="role">
                <option value="admin">Admin</option>
                <option value="customer" selected>Customer</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" name="create_product" class="btn btn-primary btn-block">Create</button>
        </div>
    </form>
</div>