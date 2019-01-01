$('#new-user-form').submit(function(){
    console.log($('#new-user-form'));
    var email = $.trim($('#email').val());
    var pwd = $.trim($('#pwd').val());
    

    if(!isOkEmail(email) || email.length == 0){
        alert("Email không hợp lệ");
        return false;
    } 
    if (pwd.length <= 8){
        alert("Mật khẩu phải có nhiều hơn 8 ký tự");
        return false;
    }
    return true;
});

function isOkEmail(emailAddress){
    var pattern = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
    return pattern.test(emailAddress);
}