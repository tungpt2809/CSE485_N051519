<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="public/libs/css/examInfo.css"/>
	<link rel="stylesheet" type="text/css" href="public/libs/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/libs/css/all.min.css">
</head>
<body>
	<?php include('layout/navigation.php')?>
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
	<div class="container">
		<div class="question-answer">
			<?php 
			for($i=0; $i<count($question); $i++)
			{ ?>
			<div class="question">
				Câu <?=$i+1?>
				<p><?= $question[$i]->content ?></p>	
			</div>
			<div class="answer">
				
			</div>	
			<?php 
			} ?>
		</div>
	</div>		
</body>
</html>