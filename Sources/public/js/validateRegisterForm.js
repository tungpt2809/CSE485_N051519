$('#register-form').submit(function(){
    var email = $.trim($('#email').val());
    var pwd = $.trim($('#pwd').val());    
    var pwdCfrm = $.trim($('#pwd_cfrm').val());

    if(!isOkEmail(email) || email.length == 0){
        alert("Email không hợp lệ");
        return false;
    } 
    if(pwd.length <= 8){
        alert("Mật khẩu phải có nhiều hơn 8 ký tự");
        return false;
    }
    if(pwd != pwdCfrm){
        alert("Mật khẩu xác nhận không đúng");
        return false;
    }
    return true;
});

function isOkEmail(emailAddress){
    var pattern = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
    return pattern.test(emailAddress);
}
