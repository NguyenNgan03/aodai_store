<div class="card shadow border-0 m-4">
    <div class="card-header bg-secondary bg-gradient ml-0 py-3">
        <div class="row">
            <div class="col-12 text-center">

                <h2 class="text-white py-2">Create Category</h2>
            </div>
        </div>
    </div>
    <div class="card-body p-4">
        <form class="col-12" action="/?page=Admin&controller=Category&action=CreatePost" method="post" class="row">
            <div cl ass="border p-3">

                <div class="form-group form-floating py-2 col-12">
                    <label class="ms-2" style="">Name</label>
                    <input class="form-control border-0 shadow" name="name" />
                </div>


                <div class="row pt-2">
                    <div class="col-6 col-md-3">
                        <button type="submit" class="btn btn-primary form-control">Create</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <a href=<?= "/?page=Admin&controller=Category" ?> class="btn btn-info btn-outline-primary border form-control">
                            Back to List
                        </a>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>