<div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">X</span>
    <form class="modal-content">
        <div class="container">
            <h1>Add Order</h1>
            <p>Please fill in this form to add Order.</p>

            <hr />

            <label for="user_id"><b>User ID</b></label>
            <input name="user_id" id="user_id" type="text" placeholder="Enter User ID" required />

            <label for="order_date"><b>Order Date</b></label>
            <input name="order_date" id="order_date" type="text" placeholder="Enter Order Date" required />

            <label for="shp_address"><b>Shipping Address</b></label>
            <input name="shp_address" id="shp_address" type="text" placeholder="Enter Shipping Address" required />

            <label for="shp_address"><b>Shipping Date</b></label>
            <input name="shp_address" id="shp_address" type="text" placeholder="Enter Shipping Date" required />

            <label for="shp_address"><b>Note</b></label>
            <input name="shp_address" id="shp_address" type="text" placeholder="Enter Note" required />

            <label for="shp_address"><b>Payment Status</b></label>
            <input name="shp_address" id="shp_address" type="text" placeholder="Enter Shipping Address" required />

            <label for="shp_address"><b>Shipping Status</b></label>
            <input name="shp_address" id="shp_address" type="text" placeholder="Enter Shipping Address" required />

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