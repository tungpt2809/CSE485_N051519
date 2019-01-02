<div id="edit-modal-<?=$quest->id?>" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document" style="max-width: 875px;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Q U E S T I O N _ <?=$quest->id?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" class="container" action="question.php" id="edit-form-<?=$quest->id?>">
                    <input type="hidden" name="question_id" value="<?=$quest->id?>">
                    <div class="form-group row">
                        <label class="col-2">Nội Dung Câu Hỏi:</label>
                        <textarea class="col-8 form-control" name="content" id="content" rows="4"><?=$quest->content?></textarea>
                    </div>
                    <?php 
                        $ans = $m_answer->getAnswerByQuestionId($quest->id);
                        $i='A';
                        $correct = '';
                        foreach($ans as $item_answer){
                            if($item_answer->correct == 1) $correct = $i;
                    ?>
                    <label>Đáp Án <?=$i?>:</label>
                    <div class="form-group row">
                        <input type="hidden" name = "answer_<?=$i?>_id" value="<?=$item_answer->id?>">
                        <div class="col">
                            <textarea name="answer_<?=$i++?>" class="col-10 form-control" rows="1"><?=$item_answer->content?></textarea>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="form-group row">
                        <div class="col-5">
                            <label>Đáp Án Đúng:</label>
                            <select name="correct" class="form-control">
                                <?php 
                                if($correct=='A') echo '<option value="A" selected="selected">A</option>';
                                else echo '<option value="A">A</option>';
                                if($correct=='B') echo '<option value="B" selected="selected">B</option>';
                                else echo '<option value="B">B</option>';
                                if($correct=='C') echo '<option value="C" selected="selected">C</option>';
                                else echo '<option value="C">C</option>';
                                if($correct=='D') echo '<option value="D" selected="selected">D</option>';
                                else echo '<option value="D">D</option>';
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-5">
                            <label>Môn Học:</label>
                            <select name="subject_id" class="form-control">
                                <?php 
                                if($quest->subject_id==1) echo '<option value="1" selected="selected">Toán Học</option>';
                                else echo '<option value="1">Toán Học</option>';
                                if($quest->subject_id==2) echo '<option value="2" selected="selected">Tiếng Anh</option>';
                                else echo '<option value="2">Tiếng Anh</option>';
                                if($quest->subject_id==3) echo '<option value="3" selected="selected">Vật Lý</option>';
                                else echo '<option value="3">Vật Lý</option>';
                                if($quest->subject_id==4) echo '<option value="4" selected="selected">Hóa Học</option>';
                                else echo '<option value="4">Hóa Học</option>';
                                if($quest->subject_id==5) echo '<option value="5" selected="selected">Sinh Học</option>';
                                else echo '<option value="5">Sinh Học</option>';
                                if($quest->subject_id==6) echo '<option value="6" selected="selected">Địa Lý</option>';
                                else echo '<option value="6">Địa Lý</option>';
                                if($quest->subject_id==7) echo '<option value="7" selected="selected">Lịch Sử</option>';
                                else echo '<option value="7">Lịch Sử</option>';
                                if($quest->subject_id==8) echo '<option value="8" selected="selected">Tin Học</option>';
                                else echo '<option value="8">Tin Học</option>';
                                if($quest->subject_id==9) echo '<option value="9" selected="selected">Công Nghệ</option>';
                                else echo '<option value="9">Công Nghệ</option>';
                                ?>
                            </select>
                        </div>
                        <div class="col-4">
                            <label>Mức Độ:</label>
                            <select name="level_of_difficult" class="form-control">
                                <?php
                                if($quest->level_of_difficult==1) echo '<option value="1" selected="selected">Dễ</option>';
                                else echo '<option value="1">Dễ</option>';
                                if($quest->level_of_difficult==2) echo '<option value="2" selected="selected">Trung Bình</option>';
                                else echo '<option value="2">Trung Bình</option>';
                                if($quest->level_of_difficult==3) echo '<option value="3" selected="selected">Khó</option>';
                                else echo '<option value="3">Khó</option>';
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2">Lời giải:</label>
                        <textarea class="col-8 form-control" name="solution" id="content" rows="4"><?=$quest->solution?></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="btn_update" form="edit-form-<?=$quest->id?>">Cập Nhật</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>