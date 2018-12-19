<?php 
    $require_login=false;
    $page_title = "Sign Up";
    include('public/layout/layout_head.php');
    include_once('login_checker.php');
    include('controllers/c_register.php');
    $c_register = new C_register();
    $c_register->register();
?>

<form action="" method="POST" class="loginForm">
    <h1>Sign Up</h1>
    <input placeholder="Email" type="email" required name="email">
    <input placeholder="Password" type="password" required="" name="pwd">
    <input placeholder="Confirm Password" type="password" required="" name="pwd_cfrm">
    <input type="submit" name="register" value="Sign Up">
</form>

<?php include('public/layout/layout_foot.php');