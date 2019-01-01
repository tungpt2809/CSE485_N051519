<?php require_once('config/home_url.php');?>
<link rel="stylesheet" href="public/css/header.css">
<div class="container-fluid">
    <header class="row">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <a class="navbar-brand" href="<?php echo $home_url; ?>">Online Examination</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <?php 
                    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
                    ?>    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-center" href="#" id="navbardrop" data-toggle="dropdown" style="min-width:250px;">
                                <?= 'Hi, '.$_SESSION['full_name']?>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?=$home_url?>user.php">
                                    <i class="fas fa-user"></i><span> Thông tin cá nhân</span>
                                </a>
                                <a class="dropdown-item" href="<?php echo $home_url; ?>logout.php">
                                    <i class="fas fa-sign-out-alt"></i><span> Logout</span>
                                </a>    
                            </div>
                        </li>
                    <?php    
                    }else{
                    ?> 
                        <li class="nav-item bgr-eee">
                            <a class="nav-link" href="<?php echo $home_url; ?>login.php">
                                <i class="fas fa-sign-in-alt"></i><span> Login</span>
                            </a>
                        </li>
                        <li class="nav-item bgr-eee">
                            <a class="nav-link" href="<?php echo $home_url; ?>register.php">
                                <i class="fas fa-user-plus"></i><span> Sign Up</span>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
        <br>
    </header>
</div>
