<link rel="stylesheet" href="/app/views/public/css/dashboard.css">
<div class="header--title">
  <span>Primary</span>
  <h2>Discount</h2>
</div>
</div>
<div class="tabular--wrapper">
  <div class="row pb-3">
    <div class="col-6">
    </div>
    <div class="col-6 text-end" style="text-align:right">
      <a href=<?= "/?page=Admin&controller=Discount&action=Create" ?> class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Create New Discount
      </a>
    </div>
  </div>
  <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>Stt</th>
          <th>Name</th>
          <th>Discount rate</th>
          <th>Start date</th>
          <th>End date</th>
          <th>Action</th>
          <th></th>
        </tr>
      </thead>
      <tbody class="" id="tbody"></tbody>
      <?php $i = 1;
      foreach ($discounts as $discount) : ?>
        <tr>
          <td><?= $i++; ?></td>
          <td><?= $discount['name'] ?></td>
          <td><?= $discount['discount_rate'] ?></td>
          <td><?= $discount['start_date'] ?></td>
          <td><?= $discount['end_date'] ?></td>
          <td>
            <div class="w-75 btn-group" role="group">
              <a href=<?= "/?controller=discount&action=Edit&page=admin&id=" . $discount["id"] ?> class="btn btn-primary mx-2">
                <i class="bi bi-pencil-square"></i> Edit
              </a>
              <a href="<?= "/?controller=discount&action=Delete&page=admin&id=" . $discount["id"] ?>" class="btn btn-danger mx-2">
                <i class="bi bi-trash-fill"></i> Delete
              </a>
            </div>
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="12">Total: <span id="total--details"></span> discounts</td>
        </tr>
      </tfoot>
    </table>