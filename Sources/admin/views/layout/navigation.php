<?php require_once('../config/home_url.php');?>

<link rel="stylesheet" href="public/css/header.css">
<div class="container-fluid">
    <header class="row">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <a class="navbar-brand" href="<?php echo $home_url; ?>admin/index.php">OESystem Management</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li>
                        <a href="<?=$home_url?>admin/user.php" class="nav-link">Users</a>
                    </li>
                    <li>
                        <a href="<?=$home_url?>admin/exam.php" class="nav-link">Exam</a>
                    </li>
                    <li>
                        <a href="<?=$home_url?>admin/question.php" class="nav-link">Question</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-center" href="" id="navbardrop" data-toggle="dropdown" style="min-width:250px;">
                            <?= 'Hi, '.$_SESSION['full_name']?>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?php echo $home_url;?>logout.php">
                                <i class="fas fa-sign-out-alt"></i><span> Logout</span>
                            </a>    
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <br>
    </header>
</div>
