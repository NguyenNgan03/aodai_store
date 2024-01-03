<div class="sidebar">
    <div class="backtoHome"><i class="fa-solid fa-arrow-left"></i></div>
    <ul class="menu">
    <li class="active">
                <a href="ad_categories.php">
                    <i class="fas fa-rectangle-list"></i>
                    <span>Categories</span>
                </a>
            </li>
            <li>
                <a href="admin.php">
                    <i class="fas fa-users-rectangle"></i>
                    <span>Users</span>
                </a>
            </li>
            <li>
                <a href="ad_products.php">
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
        <h2>Categories</h2>
      </div>
      
    </div>

    <div class="tabular--wrapper">
      <h3 class="main--add" onclick="document.getElementById('id01').style.display='block'">Add category<i
          class="fa-solid fa-square-plus"></i></h3>
      <div class="table-container">
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Category Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody class="" id="tbody"></tbody>

          </tbody>
          <tfoot>
            <tr>
              <td colspan="12">Total: <span id="total--details"></span> categories</td>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>