<div class="container" id="new-user">
    <h1>N 3 W _ U S E R</h1>
    <form action="user.php" method="POST" class="row" id="new-user-form">
        <div class="col-md-5">
            <div class="form-group">
                <label>Họ tên</label>
                <input name="full_name" type="text" class="form-control" autocomplete="off" placeholder="Họ tên">
            </div>
            <div class="form-group">
                <label>Số điện thoại</label>
                <input name="phone_number" type="text" class="form-control"  autocomplete="off" placeholder="Số điện thoại">
            </div>
            <div class="form-group">
                <label>Địa chỉ</label>            
                <textarea name="address" class="form-control" rows="5" id="comment"></textarea>
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <label>Email*</label>
                <input name="email" id="email" placeholder="Email" type="text" class="form-control" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Mật khẩu*</label>
                <input name="pwd" id="pwd" placeholder="Mật khẩu" type="text" class="form-control" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Quyền truy cập</label>
                <select name="level" class="form-control">
                    <option value="Customer">Customer</option>
                    <option value="Admin">Admin</option>
                </select>
            </div>
            <div class="form-group">
                <label>Trạng thái tài khoản</label>
                <select name="status" class="form-control">
                    <option value="0">Chưa kích hoạt</option>
                    <option value="1">Đã kích hoạt</option>
                </select>
            </div>
        </div>
        <input type="submit" value="Thêm" name="btn_add" id="new-user-btn" class="btn btn-primary">
    </form>
</div>