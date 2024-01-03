<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Users</title>
    <link rel="stylesheet" href="app\views\public\css\dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>

<body>
    <div class="sidebar">
        <div class="backtoHome"><i class="fa-solid fa-arrow-left"></i></div>
        <ul class="menu">
            <li>
                <a href="ad_details.php">
                    <i class="fas fa-rectangle-list"></i>
                    <span>Categories</span>
                </a>
            </li>
            <li class="active">
                <a href="ad_users.php">
                    <i class="fas fa-users-rectangle"></i>
                    <span>Users</span>
                </a>
            </li>   
            <li>
                <a href="ad_details.php">
                    <i class="fas fa-rectangle-list"></i>
                    <span>Products</span>
                </a>
            </li>
            <li>
                <a href="ad_destination.php">
                    <i class="fas fa-comment-dots"></i>
                    <span>Comments</span>
                </a>
            </li>
            <li>
                <a href="ad_order.php">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Orders</span>
                </a>
            </li>
            <li>
                <a href="ad_order.php">
                    <i class="fas fa-ticket"></i>
                    <span>Vourchers</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Primary</span>
                <h2>Users</h2>
            </div>
       
            
        </div>

        <div class="tabular--wrapper">
            <h3 class="main--add">Add user
                <i class="fa-solid fa-square-plus"></i></h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbody"></tbody>

                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="7">Total: <span id="total--users"></span> users</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <!-- Modal -->
        <div id="modal-delete" class="modal">
            <div class="modal-content">
                <h4>Confirmation</h4>
                <p>Are you sure you want to delete this resource?</p>
                <div class="modal-buttons">
                    <button id="confirm-delete-btn" class="btn btn-delete">Delete</button>
                    <button id="cancel-delete-btn" class="btn btn-cancel">Cancel</button>
                </div>
            </div>
        </div>

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
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</html>