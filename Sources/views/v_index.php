<?php    
    include_once('config/home_url.php');
    include_once('views/layout/home_head.php');
    
    function whatSubject($subject_id)
    {
        switch($subject_id)
        {
            case 1:
                return '<i class="fas fa-calculator"></i> Toán học';
            case 2:  
                return '<i class="fas fa-comments"></i> Tiếng Anh';
            case 3:
                return '<i class="fas fa-cogs"></i> Vật Lý';
            case 4: 
                return '<i class="fas fa-vial"></i> Hóa Học';
            case 5:
                return '<i class="fas fa-leaf"></i> Sinh Học';
            case 6:
                return '<i class="fas fa-globe-asia"></i> Địa Lý';
            case 7:
                return '<i class="fas fa-landmark"></i> Lịch Sử';
            case 8:
                return '<i class="fas fa-desktop"></i> Tin Học';
            case 9:
                return '<i class="fab fa-android"></i> Công Nghệ';
        }    
    }
?>
<link rel="stylesheet" href="public/css/style.css">
<div id="content" class="container">
    <div class="fixed-sidebar col-md-2">
        <span class="label">Môn Học</span>
        <ul class="sidebar">
            <?php for($i=1; $i<=9; $i++){?>
            <li class="subj-item">
                <a  href="<?php echo $home_url?>?subject_id=<?php echo $i ?>">
                    <?php echo whatSubject($i);?>
                </a>
            </li>
            <?php }?>
        </ul>
    </div>    
    <div class="col-md-8 quiz-set">
        <?php for($i=0; $i<count($exam); $i++){?>
        <div class="quiz-item row">
            <div class="container col-md-10">
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-12">
                        <?php echo whatSubject($exam[$i]->subject_id).' | <i class="far fa-clock"></i> '.$exam[$i]->duration.' phút'?>
                    </div>
                </div>
                <div class="row" style="margin:20px 0;">
                    <span style="font-size: 20px;">
                        <?php echo $exam[$i]->exam_name?>
                    </span>
                </div>                      
                <div class="row">
                    <div class="col-md-12">
                        <i class="far fa-question-circle"></i>
                        <?php echo ' '.$exam[$i]->number_of_questions.' câu'?>
                    </div>
                </div>
            </div>
            <div class="col-md-2 do-this-exam">
                <?php
                if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
                ?>
                <a href="<?php echo $home_url?>exam.php?eid=<?php echo $exam[$i]->id?>">
                    <i>Làm bài</i>
                </a>
                <?php }else{ ?>
                    <a href="<?php echo $home_url?>login.php" onclick="return confirm('Đăng nhập để làm bài')">
                        <i>Làm bài</i>
                    </a>
                <?php }?>                
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php include_once('views/layout/home_foot.php');?>