<link rel="stylesheet" href="public/css/style.css">
<form action="" method="POST" class="login-form">
    <h1>L 0 G I N</h1>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="text" placeholder="Email"  class="form-control" required="" name="email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="pwd">Password</label>
        <input type="password" placeholder="Password" class="form-control" required="" name="pwd">
    </div>
    <div class="form-group">
        <a href="<?=$home_url?>register.php">Do not have account?</a> Sign Up
    </div>    
    <input type="submit" name="login" value="Let's GO" class="btn btn-primary">
</form>