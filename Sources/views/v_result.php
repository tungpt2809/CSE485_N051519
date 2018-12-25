<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Online Exam | Result</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="public/libs/css/examInfo.css"/>
    <link rel="stylesheet" type="text/css" href="public/libs/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/libs/css/all.min.css">
</head>
<body>
    <?php include('layout/navigation.php')?>	
    <div id="exam-head">
		<div class="container">
			<div class="exam-name">
				<div class="row">	
					<h1>
						<?= $exam->exam_name ?>
					</h1>
				</div>
			</div>
			<div class="exam-detail">
				<div class="row">
					<div class="col-md-6">
						<h6><i class="far fa-clock"></i> Thời gian làm bài: <?= $exam->duration ?> phút</h6>
					</div>
					<div class="col-md-6">
						<h6><i class="far fa-question-circle"></i> Số lượng câu hỏi: <?= $exam->number_of_questions ?> câu</h6>
					</div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p style="margin: 10px auto; color: red">
                        <?php 
                            echo "SỐ CÂU ĐÃ LÀM : ".$number_done." / ".$exam->number_of_questions."<br>";
                            echo "SỐ CÂU ĐÚNG : ".$point."<br>";
                        ?>
                        </p>
                    </div>
                </div>
			</div>
		</div>
	</div>
	<div class="container" id="exam">	
		<div class="exam-right">	
			<?php for($i=0; $i<$exam->number_of_questions; $i++)
			{
				echo '<a href="#quest-'.($i+1).'" class="menu-link">Câu '.($i+1).' <span class="tick" id="tick-'.($i+1).'"></span></a>';
			}
			?>
		</div>
        <div class="exam-left">	
        <?php
            $i=1;
            foreach($arr as $key=>$value){
                if(is_numeric($key))
                {
        ?>
            <div id="quest-<?=($i+1)?>" class="exam-content">
                <div class="question">
                    <b>Câu <?=$i++?>:</b>
                    <p><?= $m_question->getQuestionById($key)->content ?></p>
                </div>
                <div class="answer">
                    <?php 
                        $ans = $m_answer->getAnswerByQuestionId($key);
                        foreach($ans as $item_answer){
                    ?>
                    <p>
                        <label>
                            <input type="radio" disabled>
                            <?php 
                                if($item_answer->correct == 1){
                            ?>
                                    <span style="color: green; font-weight: 1000;"><?=$item_answer->content ?></span>
                            <?php
                            } else {
                                if($item_answer->id == $value){
                            ?>
                                    <span style="color: red"><?=$item_answer->content ?></span>
                            <?php    
                                } else{
                            ?>
                                    <span><?=$item_answer->content ?></span>
                            <?php        
                                }
                            }
                            ?>
                        </label>
                    </p>
                    <?php } ?>
                </div>
            </div>
        <?php
                }
            }
        ?>
        </div>
    </div>
    <div class="row" style="margin: 10px auto 50px auto">
		<div class="col-md-12 text-center">
		    - LE FIN -
        </div>
	</div>
    <script src="public/libs/js/examInfo.js"></script>
</body>
</html>