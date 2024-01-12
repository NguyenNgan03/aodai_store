<div class="main--content">
    <div class="header--wrapper">
        <div class="header--title">
            <span>Primary</span>
            <h2>Product</h2>
        </div>
    </div>
    <div class="tabular--wrapper">
        <h3>
            <a href="?controller=product&action=getCreate&page=Admin" class="btn btn-primary">Add product</a>
        </h3>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Discount_id</th>
                        <th>Name</th>
                        <th>category_id</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Color</th>
                        <th>Material</th>
                        <th>Size</th>
                        <th>Image1</th>
                        <th>Image2</th>
                        <th>Image3</th>
                        <th>Image4</th>
                        <th>Create</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <tbody id="tbody">
                    <?php foreach ($products as $product) : ?>
                        <tr>
                            <td> <?php echo  $product['id']; ?></td>
                            <td> <?php echo  $product['discount_id']; ?></td>
                            <td> <?php echo  $product['name']; ?></td>
                            <td> <?php echo  $product['category_id']; ?></td>
                            <td> <?php echo  $product['description']; ?></td>
                            <td> <?php echo  $product['price']; ?></td>
                            <td> <?php echo  $product['color']; ?></td>
                            <td> <?php echo  $product['material']; ?></td>
                            <td> <?php echo  $product['size']; ?></td>
                            <td> <?php echo  $product['image1']; ?></td>
                            <td> <?php echo  $product['image2']; ?></td>
                            <td> <?php echo  $product['image3']; ?></td>
                            <td> <?php echo  $product['image4']; ?></td>
                            <td> <a href="?controller=product&action=edit&page=admin&id=<?php echo $product['id'] ?>" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></a></td>
                            <td> <a href="?controller=product&action=delete&page=admin&id=<?php echo $product['id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
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