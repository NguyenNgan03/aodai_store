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
                <a href="ad_details.php">
                    <i class="fas fa-rectangle-list"></i>
                    <span>User</span>
                </a>
            </li>
            <li class="active">
                <a href="ad_users.php">
                    <i class="fas fa-users-rectangle"></i>
                    <span>Categories</span>
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
        <?php
        echo $content;
        ?>
            <!-- <div class="header--title">
                <span>Primary</span>
                <h2>Users</h2>
            </div>
        <div class="tabular--wrapper">
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
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</html>