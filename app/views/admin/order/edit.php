<?php if (isset($data['orders']) && is_array($data['orders']) && !empty($data['orders'])) : ?>
    <?php foreach ($data['orders'] as $order) : ?>
        <div id="id02" class="modal-update">
            <span onclick="document.getElementById('id02').style.display='none'" class="close-update" title="Close Modal">X</span>
            <form class="modal-content">
                <div class="container">
                    <h1>Update Order</h1>
                    <p>Please fill in this form to update Order.</p>
                    <hr />

                    <label for="user_id-update"><b>User ID</b></label>
                    <input name="user_id-update" id="user_id-update" type="text" placeholder="Enter User ID" required value="<?php echo $order['user_id']; ?>" />

                    <label for="order_date-update"><b>Order Date</b></label>
                    <input name="order_date-update" id="order_date-update" type="text" placeholder="Enter Order Date" required value="<?php echo $order['order_date']; ?>" />

                    <label for="shipping_address-update"><b>Shipping Address</b></label>
                    <input name="shipping_address-update" id="shipping_address-update" type="text" placeholder="Enter Shipping Address" required value="<?php echo $order['shipping_address']; ?>" />

                    <label for="shipping_date-update"><b>Shipping Date</b></label>
                    <input name="shipping_date-update" id="shipping_date-update" type="text" placeholder="Enter Shipping Date" required value="<?php echo $order['shipping_date']; ?>" />

                    <label for="notes-update"><b>Note</b></label>
                    <input name="notes-update" id="notes-update" type="text" placeholder="Enter Note" required value="<?php echo $order['notes']; ?>" />

                    <div class="payment_status-select">
                        <label for="payment_status-update"><b>Payment Status</b></label>
                        <select name="payment_status-update" id="payment_status-update">
                            <option value="Paid" <?php if ($order['payment_status'] === 'Paid') echo 'selected'; ?>>Paid</option>
                            <option value="Unpaid" <?php if ($order['payment_status'] === 'Unpaid') echo 'selected'; ?>>Unpaid</option>
                        </select>
                    </div>

                    <div class="shipping_status-select">
                        <label for="shipping_status-update"><b>Shipping Status</b></label>
                        <select name="shipping_status-update" id="shipping_status-update">
                            <option value="Paid" <?php if ($order['shipping_status'] === 'Paid') echo 'selected'; ?>>Paid</option>
                            <option value="Unpaid" <?php if ($order['shipping_status'] === 'Unpaid') echo 'selected'; ?>>Unpaid</option>
                        </select>
                    </div>

                    <div class="clearfix">
                        <button onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">
                            Cancel
                        </button>
                        <button type="button" class="addProductbtn" id="addProductbtn" onclick="handleUpdate(event)">
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
    <?php endforeach ?>
<?php else : ?>
    <p>No orders to display.</p>
<?php endif ?>
