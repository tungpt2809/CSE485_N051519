function checkPassword(id) {
    var pwd = $.trim($('#edit_pwd_'+id).val());
    
    if(pwd.length>0 && pwd.length<=8){
        alert('Mật khẩu phải có nhiều hơn 8 ký tự');
        $('#edit_pwd_'+id).val('');
        $('#edit_pwd_'+id).focus();
    }
  }