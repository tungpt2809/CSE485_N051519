<?php include_once('views/layout/layout_head.php'); ?>

<form action="" method="POST" class="loginForm">
        <h1>Login</h1>
        <input type="email" placeholder="Email" required="" name="email">
        <input type="password" placeholder="Password" required="" name="pwd">
        <input type="submit" name="login" value="Let's GO">
    </form>
<?php include_once('views/layout/layout_foot.php');?>