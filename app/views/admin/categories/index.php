<link rel="stylesheet" href="/app/views/public/css/dashboard.css">
<!-- <div class="card shadow border-0 m-4">
    <div class="card-header bg-secondary bg-gradient ml-0 py-3">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-white py-2">Category List</h2>
            </div>
        </div>
    </div>
    <div class="card-body p-4">
        <div class="row pb-3">
            <div class="col-6">
            </div>
            <div class="col-6 text-end">
                <a href=<?= "/?page=Admin&controller=Category&action=Create" ?> class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i> Create New Category
                </a>
            </div>
        </div>
        <table id="tblData" class="table table-bordered table-striped">
            <thead>
                <th>Stt</th>
                <th>Name</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th></th>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($categories as $category) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $category['name'] ?></td>
                        <td><?= $category['created_at'] ?></td>
                        <td><?= $category['updated_at'] ?> </td>
                        <td>
                            <div class="w-75 btn-group" role="group">
                                <a href=<?= "/?page=Admin&controller=Category&action=Edit&id=" . $category["id"] ?> class="btn btn-primary mx-2">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <a href="<?= "/?page=Admin&controller=Category&action=Delete&id=" . $category["id"] ?>" class="btn btn-danger mx-2">
                                    <i class="bi bi-trash-fill"></i> Delete
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div> -->


      <div class="header--title">
        <span>Primary</span>
        <h2>Categories</h2>
      </div>
      
    </div>

    <div class="tabular--wrapper">

    <div class="row pb-3">
            <div class="col-6">
            </div>
            <div class="col-6 text-end" style="text-align:right">
                <a href=<?= "/?page=Admin&controller=Category&action=Create" ?> class="btn btn-primary">
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
          <tbody class="" id="tbody"></tbody>
          <?php $i = 1;
                foreach ($categories as $category) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $category['name'] ?></td>
                        <td>
                            <div class="w-75 btn-group" role="group">
                                <a href=<?= "/?page=Admin&controller=Category&action=Edit&id=" . $category["id"] ?> class="btn btn-primary mx-2">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <a href="<?= "/?page=Admin&controller=Category&action=Delete&id=" . $category["id"] ?>" class="btn btn-danger mx-2">
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
  

