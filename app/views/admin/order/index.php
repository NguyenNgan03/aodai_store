<div class="main--content">
    <div class="header--wrapper">
        <div class="header--title">
            <span>Primary</span>
            <h2>Orders</h2>
        </div>
    </div>
    <div class="tabular--wrapper">
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User ID</th>
                        <th>Order Date</th>
                        <th>Shipping Address</th>
                        <th>Shipping Date</th>
                        <th>Note</th>
                        <th>Payment Status</th>
                        <th>Shipping Status</th>
                        <th>created_at</th>
                        <th>updated_at</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                    <?php foreach ($orders as $order) : ?>
                        <tr>
                            <td> <?php echo  $order['id']; ?></td>
                            <td> <?php echo  $order['user_id']; ?></td>
                            <td> <?php echo  $order['order_date']; ?></td>
                            <td> <?php echo  $order['shipping_address']; ?></td>
                            <td> <?php echo  $order['shipping_date']; ?></td>
                            <td> <?php echo  $order['notes']; ?></td>
                            <td> <?php echo  $order['payment_status']; ?></td>
                            <td> <?php echo  $order['shipping_status']; ?></td>
                            <td> <?php echo  $order['created_at']; ?></td>
                            <td> <?php echo  $order['updated_at']; ?></td>
                            <td> <a href="?controller=order&action=edit&page=admin&id=<?php echo $order['id'] ?>" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></a></td>
                            <td> <a href="?controller=order&action=delete&page=admin&id=<?php echo $order['id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="12">Total: <span id="total--details"></span> $order</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>