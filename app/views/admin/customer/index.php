<div class="main--content">
    <div class="header--wrapper">
        <div class="header--title">
            <span>Primary</span>
            <h2>User</h2>
        </div>
    </div>
    <div class="tabular--wrapper">
        <h3>
            <a href="?controller=user&action=getCreate&page=Admin" class="btn btn-primary">Add user</a>
        </h3>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Pass</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Role</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Create</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <tbody id="tbody">
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td> <?php echo  $user['id']; ?></td>
                            <td> <?php echo  $user['username']; ?></td>
                            <td> <?php echo  $user['password']; ?></td>
                            <td> <?php echo  $user['email']; ?></td>
                            <td> <?php echo  $user['phone']; ?></td>
                            <td> <?php echo  $user['role']; ?></td>
                            <td> <?php echo  $user['created_at']; ?></td>
                            <td> <?php echo  $user['updated_at']; ?></td>
                            <td> <a href="?controller=user&action=edit&page=admin&id=<?php echo $user['id'] ?>" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></a></td>
                            <td> <a href="?controller=user&action=delete&page=admin&id=<?php echo $user['id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

                <tfoot>
                    <tr>
                        <td colspan="7">Total: <span id="total--users"></span> users</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

</div>