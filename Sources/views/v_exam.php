<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Online Exam | Doing</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="public/css/examInfo.css"/>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/all.min.css">
</head>
<body>
	<?php include('layout/navigation.php')?>
	<form name="test" method="POST" action="<?=$home_url?>result.php">
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
						<h6><i class="far fa-clock"></i> Thời gian làm bài : <?= $exam->duration ?> phút</h6>
					</div>
					<div class="col-md-6">
						<h6><i class="far fa-question-circle"></i> Số lượng câu hỏi : <?= $exam->number_of_questions ?> câu</h6>
					</div>
				</div>
				<div class="row" style="margin: 10px auto 30px auto">
					<div class="col-md-12 text-center">
						<p style="color:red">* Chỉ nhấn nộp bài khi thực sự muốn</p>
						<input type="submit" class="btn" value="Nộp bài">
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container" id="exam">
		<div class="exam-right">
			<span class="brand-logo right cursor" id="timer"></span>
			<?php for($i=0; $i<count($question); $i++)
			{
				echo '<a href="#quest-'.($i+1).'" class="menu-link">Câu '.($i+1).' <span class="tick" id="tick-'.($i+1).'"></span></a>';
			}
			?>
		</div>
		
		<div class="exam-left">	
			<?php
			for($i = 0; $i < count($question); $i++)
			{ ?>
			<div id="quest-<?=($i+1)?>" class="exam-content">
				<div class="question">		
					<b>Câu <?=($i+1)?>:</b>
					<p><?= $question[$i]->content ?></p>
				</div>
				<div class="answer">
					<input type="radio" name=<?=$question[$i]->id?> value="chualam" checked style="display:none">
					<?php 
						$ans = $m_answer->getAnswerByQuestionId($question[$i]->id);
						foreach($ans as $item_answer){
					?>
					<p>
						<label>
							<input type="radio" name=<?=$question[$i]->id?> value=<?=$item_answer->id?>>
							<span><?= $item_answer->content ?></span>
						</label>
					</p>
					<?php } ?>
				</div>
			</div>				
			<?php 
			} ?>
		</div>
	</div>
	<div class="row" style="margin: 10px auto 50px auto">
		<div class="col-md-12 text-center">
			<input type="submit" class="btn" value="Nộp bài">
		</div>
	</div>
	</form>
	<script language="javascript" type="text/javascript"> 
		var timer = document.getElementById("timer");
		var min = <?=$exam->duration?>;
		var quartertime = min/4; 
		var sec = 0;
		var min_text;
		var sec_text;
		countdown();

		function countdown(){ 
			cd = setInterval(function(){
				if (sec == 0){
					min--;	
					sec = 60;
					}
					sec--;
					if(min < quartertime){
						timer.style.color = 'red';
					}
					if (min < 10) {
						min_text = '0' + min;
					} 
					else {
						min_text = min;
					}
					if (sec < 10)
						sec_text = '0' + sec;
					else
						sec_text = sec;
					timer.innerHTML = min_text + ':' + sec_text;
				if (min < 0) {
					alert('Hết giờ, hệ thống sẽ tự động nộp bài!');
					document.forms["test"].submit();
				}
			}, 1000);
		} 
	</script>
	<script src="public/js/jquery331.js"></script>
	<script src="public/js/examInfo.js"></script>
</body>
</html>