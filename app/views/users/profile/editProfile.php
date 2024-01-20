<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="app\views\public\css\editProfile.css">
<div class="container-xl px-4 mt-4">
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Ảnh đại diện</div>
                <div class="card-body text-center">
                    <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt>
                    <div class="small font-italic text-muted mb-4">JPG hoặc PNG không lớn hơn 5MB</div>
                    <button class="btn btn-primary" type="button">Tải lên hình ảnh mới</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card mb-4">
                <div class="card-header">Chi tiết tài khoản</div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Tên người dùng (tên của bạn sẽ xuất hiện như thế nào với những người dùng khác trên trang web)</label>
                            <input class="form-control" id="inputUsername" type="text" placeholder="Vui lòng nhập tên người dùng" value="Thanh Van">
                        </div>
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">Tên</label>
                                <input class="form-control" id="inputFirstName" type="text" placeholder="Vui lòng nhập tên" value="Van">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Họ</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="Vui lòng nhập họ" value="Tran">
                            </div>
                        </div>
                        
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">Địa chỉ</label>
                                <input class="form-control" id="inputLocation" type="text" placeholder="Vui lòng nhập địa chỉ" value="San Francisco, CA">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                            <input class="form-control" id="inputEmailAddress" type="email" placeholder="Vui lòng nhập email" value="name@example.com">
                        </div>

                        <div class="row gx-3 mb-3">

                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Số điện thoại</label>
                                <input class="form-control" id="inputPhone" type="tel" placeholder="Vui lòng nhập SĐT" value="555-123-4567">
                            </div>

                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday">Ngày sinh</label>
                                <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Vui lòng nhập ngày tháng năm sinh" value="06/10/1988">
                            </div>
                        </div>

                        <button class="btn btn-primary" type="button">Lưu thay đổi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>