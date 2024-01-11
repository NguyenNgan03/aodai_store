<div class="main--content">
    <div class="header--wrapper">
        <div class="header--title">
            <span>Primary</span>
            <h2>Vourcher</h2>
        </div>
    </div>
    <div class="tabular--wrapper">
        <h3>
            <a href="?controller=vourcher&action=getCreate&page=Admin" class="btn btn-primary">Add vourcher</a>
        </h3>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Code</th>
                        <th>Discoun Amount</th>
                        <th>Status</th>
                        <th>Description</th>
                        <th>Expiration Date</th>
                        <th>Create</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <tbody id="tbody">
                    <?php foreach ($vourchers as $vourcher) : ?>
                        <tr>
                            <td> <?php echo  $vourcher['id']; ?></td>
                            <td> <?php echo  $vourcher['vourcher_code']; ?></td>
                            <td> <?php echo  $vourcher['discount_amount']; ?></td>
                            <td> <?php echo  $vourcher['status']; ?></td>
                            <td> <?php echo  $vourcher['description']; ?></td>
                            <td> <?php echo  $vourcher['expiration_date']; ?></td>
                            <td> <a href="?controller=vourcher&action=edit&page=admin&id=<?php echo $vourcher['id'] ?>" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></a></td>
                            <td> <a href="?controller=vourcher&action=delete&page=admin&id=<?php echo $vourcher['id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

                <tfoot>
                    <tr>
                        <td colspan="7">Total: <span id="total--users"></span> vourchers</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

</div>