<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Users</title>
    <link rel="stylesheet" href="app\views\public\css\dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style> 
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Volkhov:ital,wght@0,350;0,500;1,500&family=Yesteryear&display=swap");

* {
    margin: 0;
    padding: 0;
    border: none;
    outline: none;
    box-sizing: border-box;
    font-family: "Volkhov", sans-serif;
}

body {
    width: 100%;
    display: flex;
    overflow-x: hidden;
    box-sizing: border-box;
}

.sidebar {
    position: sticky;
    top: 0;
    left: 0;
    bottom: 0;
    width: 110px;
    height: 100vh;
    padding: 0 1.7rem;
    color: #ffff;
    overflow: hidden;
    transition: all 0.5s linear;
    background: #0077B6;
}

.sidebar:hover {
    width: 250px;
    transition: 0.5s;
}

.logo {
    height: 80px;
    padding: 16px;
}

.menu {
    height: 88%;
    position: relative;
    list-style: none;
    padding: 0;
}

.menu li , .backtoHome{
    padding: 1rem;
    margin: 8px 0;
    border-radius: 8px;
    transition: all 0.5s ease-in-out;
}

.menu li:hover,
.active {
    background: #e0e0e058;
}

.menu a{
    color: #fff;
    font-size: 14px;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 1.5rem;
}

.menu a span {
    overflow: hidden;
}

.menu a i , .backtoHome{
    font-size: 1.2rem;
}

.main--content {
    position: relative;
    background: #ebe9e9;
    width: 100%;
    padding: 1rem;
    box-sizing: border-box;
    word-wrap: break-word;
}

.header--wrapper img {
    width: 50px;
    height: 50px;
    cursor: pointer;
    border-radius: 50%;
}

.header--wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    background: #fff;
    border-radius: 10px;
    padding: 10px 2rem;
    margin-bottom: 1rem;
}

.header--title {
    color: #0077B6;
}

.user--info {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.search--box {
    background: rgb(237, 237, 237);
    border-radius: 15px;
    color: #0077B6;
    display: flex;
    align-items: center;
    gap: 5px;
    padding: 4px 12px;
}

.search--box input {
    background: transparent;
    /*trong suốt*/
    padding: 10px;
}

.search--box i {
    font-size: 1.2rem;
    cursor: pointer;
    transition: all 0.5s ease-out;
}

.search--box i:hover {
    transform: scale(1.2);
    /*phóng to*/
}

.main--title{
    color: #0077B6;
    padding-bottom: 10px;
    font-size: 15px;
}

.main--add {
    background-color: #71706f;
    border-radius: 5px;
    width: 150px;
    height: 35px;
    margin-bottom: 10px;
    font-size: 18px;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    transition: transform 0.2s ease-in-out;
}
.main--add i{
    padding-left: 5px;
}

.main--add:hover{
    background-color: #515050;
    cursor: pointer;
    transform: scale(1.1);
}

.tabular--wrapper {
    width: 100%;
    background: #fff;
    margin-top: 1rem;
    border-radius: 10px;
    padding: 2rem;
}

.table-container {
    width: 100%;
}

table {
    width: 100%;
    border-collapse: collapse;
}

thead {
    background: #0077B6;
    color: #fff;
}

th {
    padding: 15px;
    text-align: left;
}

tbody {
    background: #f2f2f2;
}

td {
    padding: 15px;
    font-size: 14px;
    color: #333;
}

tr:nth-child(even) {
    background: #fff;
}

tfoot {
    background: #0077B6;
    font-weight: bold;
    color: #fff;
}

tfoot td {
    padding: 15px;
    color: #fff;
}

.table-container button {
    color: rgb(230, 55, 11);
    background: none;
    cursor: pointer;
}

.settings--admin {
    width: 100%;
    padding: 1rem;
}

#total--users,
#total--destination,
#total--details {
    padding-left: 10px;
    padding-right: 5px;
    font-size: 18px;
    font: bold;
}

.change--img,
.change--imgs {
    width: 150px;
}

.change--img img,
.change--imgs {
    width: 100px;
    height: auto;
}

.change--img img,
.change--imgs {
    width: 100px;
    height: auto;
}




#id--details {
    max-width: 50px;
}

#hightlight {
    max-width: 111px;
}

.icons {
    font-size: 18px;
    padding: 2px;
    transition: transform 0.2s ease-in-out;
}
.icons:hover{
    transform: scale(1.1);
}

/* Modal CSS */
.modal-delete {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
}

#modal-delete .modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 300px;
    text-align: center;
    border-radius: 10px;
}

.modal-buttons {
    margin-top: 20px;
}

.btn {
    margin: 0 5px;
    padding: 8px 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: transform 0.2s ease-in-out;
}

.btn:hover {
    transform: scale(1.1);
}

.btn-delete {
    background-color: #dc3545;
    color: #fff;
}

.btn-cancel {
    background-color: #6c757d;
    color: #fff;
}

.modal-update [type=text], .modal-update input[type=password], .modal-update input[type=tel], .modal-update input[type=email],
.modal [type=text], .modal input[type=password], .modal input[type=tel], .modal input[type=email] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

.status-select, .role-select{
    float: left;
    width: 50%;
    border: unset;
    padding-bottom: 45px;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus,
input[type=password]:focus, input[type=tel]:focus, input[type=email]:focus {
    background-color: #ddd;
    outline: none;
}

/* Add padding to container elements */
.modal-content .container {
    padding: 16px;
}

/* The Modal (background) */
.modal, .modal-update {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 999;
    /* Sit on top */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: #8989898f;
    padding-top: 5px;
}

/* Modal Content/Box */
.modal-update .modal-content, .modal .modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto;
    /* 5% from the top, 15% from the bottom and centered */
    border-radius: 10px;
    width: 80%;
    /* Could be more or less, depending on screen size */
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
    color: #fff;
    border: unset !important;
    cursor: pointer;

    &:hover {
        color: #fff;
        background-color: #d12215;

    }
}

.updatebtn, .addProductbtn {
    padding: 14px 20px;
    background-color: #1bc03c;
    color: #fff;
    border: unset !important;
    cursor: pointer;

    &:hover {
        color: #fff;
        background-color: #098407;

    }
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,
.updatebtn, .addProductbtn {
    float: left;
    width: 50%;
    border: unset !important;
}

.close-update, .close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close-update:hover,.close-update:focus,
.close:hover,.close:focus {
    color: #f44336;
    cursor: pointer;
}

.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {

    .cancelbtn,
    #addProductbtn {
        width: 100%;
    }
}
    </style>

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