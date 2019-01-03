function changePassword(id){
    var old1 = $("input[name='old_pwd']").val();
    var new1 = $("input[name='new_pwd']").val();
    if(old1 == '')
    {
        alert('Nhập mật khẩu cũ');
        $("input[name='old_pwd']").focus();
        return false;
    }
    if(new1 == '' || new1.length <= 8)
    {
        alert('Mật khẩu mới phải có nhiều hơn 8 ký tự');
        $("input[name='new_pwd']").focus();
        
        return false;
    }
    $.ajax({
        type: 'post',
        url: 'models/change_password.php',
        data: {
            id: id,
            oldpwd: old1,
            newpwd: new1
        },
        success: function(result)
        {
            alert('Update Success');
        }
    });
    
}
