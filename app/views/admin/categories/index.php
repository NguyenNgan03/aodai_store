<link rel="stylesheet" href="/app/views/public/css/dashboard.css">

<div class="header--title">
  <span>Primary</span>
  <h2>Categories</h2>
</div>

<div class="tabular--wrapper">
  <div class="row pb-3">
    <div class="col-6"></div>
    <div class="col-6 text-end" style="text-align:right">
      <a href=<?= "?page=Admin&controller=Category&action=create" ?> class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Create New Category
      </a>
    </div>
  </div>

  <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Category Name</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody class="" id="tbody">
        <?php $i = 1;
        foreach ($categories as $category) : ?>
          <tr>
            <td><?= $i++; ?></td>
            <td><?= $category['name'] ?></td>
            <td>
              <div class="w-75 btn-group" role="group">
                <a href=<?= "?controller=category&action=edit&page=admin&id=" . $category["id"] ?> class="btn btn-primary mx-2">
                  <i class="bi bi-pencil-square"></i> Edit
                </a>
                <a href="<?= "?controller=category&action=delete&page=admin&id=" . $category['id'] ?>" class="btn btn-danger mx-2">
                  <i class="bi bi-trash-fill"></i> Delete
                </a>
              </div>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="12">Total: <span id="total--details"></span> categories</td>
        </tr>
      </tfoot>
    </table>
  </div>
</div>