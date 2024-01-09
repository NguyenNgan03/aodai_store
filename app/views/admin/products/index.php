<div class="sidebar">
    <div class="backtoHome"><i class="fa-solid fa-arrow-left"></i></div>
    <ul class="menu">
      <li>
        <a href="ad_categories.php">
          <i class="fas fa-rectangle-list"></i>
          <span>Categories</span>
        </a>
      </li>
      <li>
        <a href="ad_users.php">
          <i class="fas fa-users-rectangle"></i>
          <span>Users</span>
        </a>
      </li>
      <li class="active">
        <a href="ad_products.php">
          <i class="fas fa-rectangle-list"></i>
          <span>Products</span>
        </a>
      </li>
      <li>
        <a href="ad_comments.php">
          <i class="fas fa-comment-dots"></i>
          <span>Comments</span>
        </a>
      </li>
      <li>
        <a href="ad_orders.php">
          <i class="fas fa-shopping-cart"></i>
          <span>Orders</span>
        </a>
      </li>
      <li>
        <a href="ad_vourchers.php">
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
        <h2>Products</h2>
      </div>

    </div>

    <div class="tabular--wrapper">
      <h3 class="main--add" onclick="document.getElementById('id01').style.display='block'">Add product<i class="fa-solid fa-square-plus"></i></h3>
      <div class="table-container">
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Discount ID</th>
              <th>Category ID ID</th>
              <th>Product Name</th>
              <th>Description</th>
              <th>Price</th>
              <th>Size</th>
              <th>Image 1</th>
              <th>Image 2</th>
              <th>Image 3</th>
              <th>Image 4</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody class="" id="tbody"></tbody>

          </tbody>
          <tfoot>
            <tr>
              <td colspan="12">Total: <span id="total--details"></span> products</td>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>