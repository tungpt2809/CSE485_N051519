<?php
    $allQuest = $m_question->getQuestionBySubjectId($exam->subject_id);
?>

<div id="add-question-<?=$exam->id?>" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document" style="max-width: 875px;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Mã Đề <?=$exam->id?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">     
            <table class='table table-sm table-hover table-bordered table-light'>
                    <thead class='thead-light'>
                        <tr>
                            <th>Mã Câu Hỏi</th>
                            <th>Câu Hỏi</th>
                            <th>Thêm Vào Đề</th>
                            <th>Loại Khỏi Đề</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    foreach($allQuest as $q)
                    {
                    ?>    
                        <tr>
                            <td><?=$q->id?></td>
                            <td><?=$q->content?></td>
                    <?php if($m_exam_info->numberOfSet($q->id, $exam->id) == NULL) {?>
                            <td class="action">
                                <button type="button" id="add-<?=$q->id.'-'.$exam->id?>" class="btn-add-question" onclick="addQuestion(<?=$q->id?>, <?=$exam->id?>)">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </td>
                            <td class="action">
                                <button type="button" id="remove-<?=$q->id.'-'.$exam->id?>" class="btn-delete disp-none" onclick="removeQuestion(<?=$q->id?>, <?=$exam->id?>)">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </td>
                    <?php }else{ ?>
                            <td class="action">
                                <button type="button" id="add-<?=$q->id.'-'.$exam->id?>" class="btn-add-question disp-none" onclick="addQuestion(<?=$q->id?>, <?=$exam->id?>)">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </td>
                            <td class="action">
                                <button type="button" id="remove-<?=$q->id.'-'.$exam->id?>" class="btn-delete" onclick="removeQuestion(<?=$q->id?>, <?=$exam->id?>)">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </td>
                    <?php } ?>        
                        </tr>
                    <?php
                        }
                    ?> 
                    </tbody>
                </table>       
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<script src="public/js/ajax/ajax_add_question.js"></script>
<script src="public/js/ajax/ajax_remove_question.js"></script>