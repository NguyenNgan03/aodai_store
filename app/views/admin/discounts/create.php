<div class="card shadow border-0 m-4 tabular--wrapper">
    <div class="card-header bg-secondary bg-gradient ml-0 py-3">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-white py-2">Create Discount</h2>
            </div>
        </div>
    </div>
    <div class="card-body p-4">
        <form class="col-12" action="/?page=Admin&controller=Discount&action=CreatePost" method="post" class="row">
            <div class="border p-3">
                <div class="form-group form-floating py-2 col-12">
                    <label class="ms-2" style="">Name</label>
                    <input class="form-control border-0 shadow" name="name" require/>
                    <p style="color: red;"><?php if(isset($errors)  && !empty($errors)) {echo $errors;} ?></p>
                </div>
                <div class="form-group form-floating py-2 col-12">
                    <label type="number" class="ms-2" style="">Discount rate</label>
                    <input class="form-control border-0 shadow" name="discount_rate" require/>
                    <p style="color: red;"><?php if(isset($errors)  && !empty($errors)) {echo $errors;} ?></p>
                </div>
                <div class="form-group form-floating py-2 col-12">
                    <label class="ms-2" style="">Start date</label>
                    <input type="datetime-local" class="form-control border-0 shadow" name="start_date" require/>
                    <p style="color: red;"><?php if(isset($errors)  && !empty($errors)) {echo $errors;} ?></p>
                </div>
                <div class="form-group form-floating py-2 col-12">
                    <label class="ms-2" style="">End date</label>
                    <input type="datetime-local" class="form-control border-0 shadow" name="end_date" require/>
                    <p style="color: red;"><?php if(isset($errors)  && !empty($errors)) {echo $errors;} ?></p>
                </div>
                <div class="row pt-2">
                    <div class="col-6 col-md-3">
                        <button type="submit" class="btn btn-primary form-control">Create</button>
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