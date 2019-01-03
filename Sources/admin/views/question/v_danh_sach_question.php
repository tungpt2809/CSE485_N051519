<?php
require_once('views/layout/layout_head.php');
if(isset($_SESSION['isInserted'])) echo $_SESSION['isInserted'];
if(isset($_SESSION['isUpdated'])) echo $_SESSION['isUpdated'];
?>
<div id="question-list">
<h1 class="mrg-30">Q U E S T I O N _ L I S T</h1>
<button type="button" class="btn btn-primary mrg-30" data-toggle="modal" data-target="#new-question-modal">
    + Thêm Một Câu Hỏi Mới
</button>
    <?php
    foreach($questionList as $quest)
    { ?>
    <div id="delete-<?=$quest->id?>" class="question container">
        <div class="row">
            <div class="col-10">
                <div class="content">		
                    <b>Mã câu hỏi : <?=$quest->id?></b>
                    <p><?= $quest->content ?></p>
                </div>
                <div class="answer">
                    <?php 
                        $ans = $m_answer->getAnswerByQuestionId($quest->id);
                        foreach($ans as $item_answer){
                    ?>
                    <p>
                        <label>
                            <?=($item_answer->correct == 0)?'<i class="fas fa-times" style="color:red"></i>':'<i class="fas fa-check" style="color:green"></i>'?>
                            <span><?= $item_answer->content ?></span>
                        </label>
                    </p>
                    <?php } ?>
                </div>
            </div>
            <div class="col-2">
                <span>Mức độ : <?=($quest->level_of_difficult==1)?'Dễ':(($quest->level_of_difficult==1)?'Trung Bình':'Khó')?></span>
                <span>Môn : <?=($quest->subject_id!=0)?$m_subject->getSubject($quest->subject_id):'Chưa Có'?></span>
            </div>
        </div>
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit-modal-<?=$quest->id?>">
                <i class="far fa-edit"></i> Edit
            </button>
            <button type="button" class="btn btn-danger" onclick="deleteAjax(<?=$quest->id?>)">
                <i class="far fa-trash-alt"></i> Delete
            </button>
        
            <button class="solution-btn btn btn-info" onclick="showSolution(<?=$quest->id?>)">
                <i class="fas fa-eye"></i> Xem lời giải
            </button>
        </div>
        <div class="solution" id="solution-<?=$quest->id?>">
            <p><?=($quest->solution == 'NULL' || $quest->solution=='')?'Chưa có lời giải cho câu hỏi này':$quest->solution ?></p>
        </div>
    </div>				
    <?php
    include('v_sua_question.php');
    }
    $page_url = "question.php?";
    include('paging.php');
    include('v_them_moi_question.php');
    ?>
</div>
<script src="public/js/jquery331.js"></script>
<script src="public/js/popper1143.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/ajax/ajax_delete_question.js"></script>
<script src="public/js/show_solution.js"></script>
</body>
</html>