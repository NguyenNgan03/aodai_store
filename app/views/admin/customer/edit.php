<div id="id02" class="modal-update">
    <form class="modal-content">
        <div class="container">
            <h1>Update User</h1>
            <p>Please fill in this form to update Detail .</p>
            <hr />
            <label for="name-update"><b>Name</b></label>
            <input name="name-update" id="name-update" type="text" placeholder="Enter Name" required />

            <label for="email-update"><b>Email</b></label>
            <input name="email-update" id="email-update" type="email" placeholder="Enter email" required />

            <label for="phone-update"><b>Phone number</b></label>
            <input name="phone-update" id="phone-update" type="tel" placeholder="Enter phone number" required />

            <div class="role-select">
                <label for="role-update"><b>Role</b></label>
                <select name="role-update" id="role-update">
                    <option value="Admin">Admin</option>
                    <option value="Customer" selected>Customer</option>
                </select>
            </div>

            <div class="status-select">
                <label for="status-update"><b>Status</b></label>
                <select name="status-update" id="status-update">
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                </select>
            </div>
        </div>
    </form>
</div>