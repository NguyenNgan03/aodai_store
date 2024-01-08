<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Users</title>
    <link rel="stylesheet" href="app\views\public\css\dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' />
    <link rel="stylesheet" href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css' />
</head>

<body>
    <div class="sidebar">
        <div class="backtoHome"><i class="fa-solid fa-arrow-left"></i></div>
        <ul class="menu">
            <li>
                <a href="?page=Admin&controller=User">
                    <i class="fas fa-rectangle-list"></i>
                    <span>User</span>
                </a>
            </li>
            <li>
                <a href="?page=Admin&controller=Category">
                    <i class="fas fa-users-rectangle"></i>
                    <span>Categories</span>
                </a>
            </li>
            <li>
                <a href="?page=Admin&controller=Product">
                    <i class="fas fa-rectangle-list"></i>
                    <span>Products</span>
                </a>
            </li>
            <li>
                <a href="?page=Admin&controller=Comments">
                    <i class="fas fa-comment-dots"></i>
                    <span>Comments</span>
                </a>
            </li>
            <li>
                <a href="?page=Admin&controller=Order">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Orders</span>
                </a>
            </li>
            <li>
                <a href="?page=Admin&controller=Vourchers">
                    <i class="fas fa-ticket"></i>
                    <span>Vouchers</span>
                </a>
            </li>
            <li class="active">
                <a href="?page=Admin&controller=Discount">
                    <i class="fas fa-percent"></i>
                    <span>Discount</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="main--content">
        <div class="header--wrapper">
            <?php
            echo $content;
            ?>
            <!-- <div class="header--title">
                <span>Primary</span>
                <h2>Users</h2>
            </div> -->
            <!-- <div class="tabular--wrapper">
                <h3 class="main--add">Add user
                    <i class="fa-solid fa-square-plus"></i>
                </h3>
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
            </div> -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</body>

</html>