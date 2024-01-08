<div class="card shadow border-0 m-4 tabular--wrapper">
    <div class="card-header bg-secondary bg-gradient ml-0 py-3">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-white py-2">Edit Discount</h2>
            </div>
        </div>
    </div>
    <div class="card-body p-4">
        <form class="col-12" action="/?page=Admin&controller=Discount&action=EditPost" method="post" class="row">
            <div cl ass="border p-3">

                <div class="form-group form-floating py-2 col-12">
                    <label class="ms-2" style="">Name</label>
                    <input class="form-control border-0 shadow" name="name" value="<?= $discount['name'] ?>" />
                </div>

                <div class="form-group form-floating py-2 col-12">
                    <label class="ms-2" style="">Discount rate</label>
                    <input type="number" class="form-control border-0 shadow" name="discount_rate" value="<?= $discount['discount_rate'] ?>" />
                </div>

                <div class="form-group form-floating py-2 col-12">
                    <label class="ms-2" style="">Start date</label>
                    <input type="datetime-local" class="form-control border-0 shadow" name="start_date" value="<?= $discount['start_date'] ?>" />
                </div>

                <div class="form-group form-floating py-2 col-12">
                    <label class="ms-2" style="">End date</label>
                    <input type="datetime-local" class="form-control border-0 shadow" name="end_date" value="<?= $discount['end_date'] ?>" />
                </div>
                
                <input name="id" value=<?= $discount["id"] ?> hidden>
                <div class="row pt-2">
                    <div class="col-6 col-md-3">
                        <button type="submit" class="btn btn-primary form-control">Edit</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <a href=<?= "/?page=Admin&controller=Discount" ?> class="btn btn-info btn-outline-primary border form-control">
                            Back to List
                        </a>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>

<div id="id02" class="modal-update">
      <span onclick="document.getElementById('id02').style.display='none'" class="close-update"
        title="Close Modal">X</span>
      <form class="modal-content">
        <div class="container">
          <h1>Update Category</h1>
          <p>Please fill in this form to update Detail .</p>
          <hr />
          <label for="name-update"><b>Category Name</b></label>
          <input name="name-update" id="name-update" type="text" placeholder="Enter Name" required />
          <div class="clearfix">
            <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">
              Cancel
            </button>
            <button type="submit" class="updatebtn" id="updatebtn" onclick="handleUpdate(event)">
              Update
            </button>
          </div>
        </div>
      </form>
    </div>