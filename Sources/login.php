<?php
    $require_login=false;
    $page_title = "Login";
    include_once('public/layout/layout_head.php');
    include_once('login_checker.php');
    include('controllers/c_login.php');
    $c_login = new C_login();
    $c_login->login();
?>
    <form action="" method="POST" class="loginForm">
        <h1>Login</h1>
        <input type="email" placeholder="Email" required="" name="email">
        <input type="password" placeholder="Password" required="" name="pwd">
        <input type="submit" name="login" value="Let's GO">
    </form>
<?php include_once('public/layout/layout_foot.php');?>