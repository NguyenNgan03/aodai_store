<div class="main--content">
    <div class="header--wrapper">
        <div class="header--title">
            <span>Primary</span>
            <h2>Comment</h2>
        </div>
    </div>
    <div class="tabular--wrapper">
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product ID</th>
                        <th>User ID</th>
                        <th>Content</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <tbody id="tbody">
                    <?php foreach ($comments as $comment) : ?>
                        <tr>
                            <td> <?php echo  $comment['id']; ?></td>
                            <td> <?php echo  $comment['product_id']; ?></td>
                            <td> <?php echo  $comment['user_id']; ?></td>
                            <td> <?php echo  $comment['content']; ?></td>
                            <td> <a href="?controller=comment&action=delete&page=admin&id=<?php echo $comment['id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

                <tfoot>
                    <tr>
                        <td colspan="7">Total: <span id="total--users"></span> comments</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

</div>