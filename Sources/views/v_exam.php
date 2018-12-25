<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Online Exam | Doing</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="public/libs/css/examInfo.css"/>
	<link rel="stylesheet" type="text/css" href="public/libs/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/libs/css/all.min.css">
</head>
<body>
	<?php include('layout/navigation.php')?>
	<form method="POST" action="<?=$home_url?>result.php">
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
					<b>Câu <?=$i+1?>:</b>
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
			<input type="submit" name="done" class="btn" onclick="return confirm('Xác nhận nộp bài?')" style="background: none; border: 2px solid #1997d4; text-decoration:none;" value="Nộp bài">
		</div>
	</div>
	</form>
	<script src="public/libs/js/examInfo.js">
		var timer = document.getElementById('timer');
		var sec = 0;
		var min = <?= $exam->duration?>;

		
	</script>
</body>
</html>