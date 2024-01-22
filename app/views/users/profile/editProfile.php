<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="app\views\public\css\editProfile.css">
<div class="container-xl px-4 mt-4">
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Ảnh đại diện</div>
                <div class="card-body text-center">
                    <img class="img-account-profile rounded-circle mb-2" src="https://i.pinimg.com/564x/ed/b1/cb/edb1cb2b9b27bdc64d23dfb535573e28.jpg" alt>
                    <!-- <div class="small font-italic text-muted mb-4">JPG hoặc PNG không lớn hơn 5MB</div>
                    <button class="btn btn-primary" type="button">Tải lên hình ảnh mới</button> -->
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card mb-4">
                <div class="card-header">Chi tiết tài khoản</div>
                <div class="card-body">
                    <form action="?page=Customer&controller=User&action=editProfile" method="post">
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Tên người dùng (tên của bạn sẽ xuất hiện như thế nào với những người dùng khác trên trang web)</label>
                            <input class="form-control" id="inputUsername" type="text" readonly placeholder="Vui lòng nhập tên người dùng" name="username" value="<?= $user["username"] ?>">
                        </div>
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">Tên</label>
                                <input class="form-control" id="inputFirstName" type="text" placeholder="Vui lòng nhập tên" name="first_name" value="<?= $user["first_name"] ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Họ</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="Vui lòng nhập họ" name="last_name" value="<?= $user["last_name"] ?>">
                            </div>
                        </div>

                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">Địa chỉ</label>
                                <input class="form-control" id="inputLocation" type="text" placeholder="Vui lòng nhập địa chỉ" name="address" value="<?= $user["address"] ?>">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                            <input class="form-control" id="inputEmailAddress" type="email" placeholder="Vui lòng nhập email" name="email" value="<?= $user["email"] ?>">
                        </div>

                        <div class="row gx-3 mb-3">

                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Số điện thoại</label>
                                <input class="form-control" id="inputPhone" type="tel" name="phone" value="<?= $user["phone"] ?>">
                            </div>

                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday">Ngày sinh</label>
                                <input class="form-control" id="inputBirthday" type="date" name="birthday" placeholder="Vui lòng nhập ngày tháng năm sinh" name="birthday" value="<?= $user["birthday"] ?>">
                            </div>
                            <input hidden name="id" value="<?= $user["id"] ?>">

                        </div>

                        <button class="btn btn-primary" type="submit">Lưu thay đổi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>