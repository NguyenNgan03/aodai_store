<div id="id02" class="modal-update">
    <span onclick="document.getElementById('id02').style.display='none'" class="close-update" title="Close Modal">X</span>
    <form class="modal-content">
        <div class="container">
            <h1>Update Order</h1>
            <p>Please fill in this form to update Order.</p>

            <hr />

            <label for="user_id-update"><b>User ID</b></label>
            <input name="user_id-update" id="user_id-update" type="text" placeholder="Enter User ID" required />

            <label for="order_date-update"><b>Order Date</b></label>
            <input name="order_date-update" id="order_date-update" type="text" placeholder="Enter Order Date" required />

            <label for="shp_address-update"><b>Shipping Address</b></label>
            <input name="shp_address-update" id="shp_address-update" type="text" placeholder="Enter Shipping Address" required />

            <label for="shp_date-update"><b>Shipping Date</b></label>
            <input name="shp_date-update" id="shp_date-update" type="text" placeholder="Enter Shipping Date" required />

            <label for="note-update"><b>Note</b></label>
            <input name="note-update" id="note-update" type="text" placeholder="Enter Note" required />

            <div class="payment_status-select">
            <label for="payment_status-update"><b>Payment Status</b></label>
                <select name="payment_status-update" id="payment_status-update">
                    <option value="Paid">Paid</option>
                    <option value="Unpaid" selected>Unpaid</option>
                </select>
            </div>

            <div class="shp_status-select">
            <label for="shp_status-update"><b>Shipping Status</b></label>
                <select name="shp_status-update" id="shp_status-update">
                    <option value="Paid">Paid</option>
                    <option value="Unpaid" selected>Unpaid</option>
                </select>
            </div>

            <label for="shp_status-update"><b>Shipping Status</b></label>
            <input name="shp_status-update" id="shp_status-update" type="text" placeholder="Enter Shipping Status" required />

            <div class="clearfix">
                <button onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">
                    Cancel
                </button>
                <button type="button" class="addProductbtn" id="addProductbtn" onclick="handleSubmit(event)">
                    Add
                </button>
            </div>
        </div>
    </form>
</div>