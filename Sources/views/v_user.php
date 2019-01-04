<?php require_once('layout/home_head.php');
?>
<link rel="stylesheet" href="public/css/style.css">
<div class="container bg-white d-flex justify-content-center">
    <div class="col-md-7">
        <div class="user-form">
            <h2>Thông tin cá nhân</h2>
            <div class="form-group">
                <label>Họ tên</label>
                <input type="text" class="form-control" name="full_name" value="<?=$_SESSION['full_name']?>">
            </div>
            <div class="form-group">
                <label>Địa chỉ</label>
                <textarea class="form-control" rows="5" id="comment" name="address"><?=$_SESSION['address']?></textarea>
            </div>
            <div class="form-group">
                <label>Điện thoại</label>
                <input type="text" class="form-control" name="phone_number" value="<?=$_SESSION['phone_number']?>">
            </div>
            <input type="submit" id="update-info" value="Lưu thông tin" class="btn btn-primary">
        </div>
        <hr>
        <div class="user-form">
            <h2>Thông tin tài khoản</h2>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email" value="<?=$_SESSION['email']?>" disabled>
            </div>
            <div class="form-group">
                <label>Mật khẩu cũ</label>
                <input type="text" class="form-control" name="old_pwd" placeholder="Mật khẩu cũ">
            </div>
            <div class="form-group">
                <label>Mật khẩu mới</label>
                <input type="text" class="form-control" name="new_pwd" placeholder="Mật khẩu mới">
            </div>
            <input type="submit" id="update-account" value="Lưu thông tin" class="btn btn-primary" onclick=changePassword(<?=$_SESSION['user_id']?>)>
        </div>
        <hr>
    </div>
</div>
<script src="public/js/jquery331.js"></script>
<script src="public/js/popper1143.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/ajax/ajax_change_password.js"></script>
<script>
    //update user info
    $('#update-info').click(function(){
        var fname = $('input[name = full_name]').val();
        var phone = $('input[name = phone_number]').val();
        var adrs = $('textarea[name = address]').val();
        var data = {
            full_name: fname,
            phone_number: phone,
            address: adrs,
        }
        var url = "user.php?action=update_info";
        var success = function(result)
        {
            alert("Update Success");
            window.location.href = window.location.href;
        };
        if(fname == ''){
            alert('Vui lòng nhập họ tên');
        }
        else $.post(url, data, success);
    });

    // //update user password
    // $('#update-account').click(function(){
    //     var old = $('input[name = old_pwd]');
    //     var new1 = $('input[name = new_pwd]');
        
    //     var data = {
    //         full_name: fname,
    //         phone_number: phone,
    //         address: adrs,
    //     }
    //     var url = "user.php";
    //     var success = function(result)
    //     {
    //     };
    //     if(fname == ''){
    //         alert('Vui lòng nhập họ tên');
    //     }
    //     else $.post(url, data, success);
    // });

</script>
</body>
</html>
