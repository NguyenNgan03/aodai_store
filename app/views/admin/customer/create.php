<div id="id01" class="modal">
    <form class="modal-content">
        <div class="container">
            <h1>Add User</h1>
            <p>Please fill in this form to add user.</p>

            <hr />

            <label for="name"><b>Name</b></label>
            <input name="name" id="name" type="text" placeholder="Enter Name" required />

            <label for="email"><b>Email</b></label>
            <input name="email" id="email" type="email" placeholder="Enter email" required />

            <label for="phone"><b>Phone number</b></label>
            <input name="phone" id="phone" type="tel" placeholder="Enter phone number" required />

            <div class="role-select">
                <label for="role"><b>Role</b></label>
                <select name="role" id="role">
                    <option value="admin">Admin</option>
                    <option value="customer" selected>Customer</option>
                </select>
            </div>

            <div class="status-select">
                <label for="status"><b>Status</b></label>
                <select name="status" id="status">
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                </select>
            </div>
        </div>
    </form>
</div>