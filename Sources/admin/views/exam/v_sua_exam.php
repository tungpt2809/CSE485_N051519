<div id="edit-modal-<?=$exam->id?>" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document" style="max-width: 875px;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">E x A M <?=$exam->id?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" class="container" action="exam.php<?=isset($_GET['page'])?('?page='.$_GET['page']):''?>" id="edit-form-<?=$exam->id?>">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?=$exam->id?>">
                        <label>Tên Đề : </label>
                        <input type="text" class="form-control" name="exam_name" value="<?=$exam->exam_name?>">
                    </div>
                    <div class="form-group">
                        <label>Thời Lượng : </label>
                        <input type="text" class="form-control" name="duration" value="<?=$exam->duration?>">
                    </div>
                    <div class="form-group">
                        <label for="">Số Lượng Câu Hỏi : </label>
                        <input type="hidden" name="question_num" value="<?=$exam->number_of_questions?>">
                        <input type="text" class="form-control" name="question_num" value="<?=$exam->number_of_questions?>" disabled = "disabled">
                    </div>
                    <div class="form-group">
                        <label>Môn Học:</label>
                        <select name="subject_id" class="form-control">
                            <?php 
                            if($exam->subject_id==1) echo '<option value="1" selected="selected">Toán Học</option>';
                            else echo '<option value="1">Toán Học</option>';
                            if($exam->subject_id==2) echo '<option value="2" selected="selected">Tiếng Anh</option>';
                            else echo '<option value="2">Tiếng Anh</option>';
                            if($exam->subject_id==3) echo '<option value="3" selected="selected">Vật Lý</option>';
                            else echo '<option value="3">Vật Lý</option>';
                            if($exam->subject_id==4) echo '<option value="4" selected="selected">Hóa Học</option>';
                            else echo '<option value="4">Hóa Học</option>';
                            if($exam->subject_id==5) echo '<option value="5" selected="selected">Sinh Học</option>';
                            else echo '<option value="5">Sinh Học</option>';
                            if($exam->subject_id==6) echo '<option value="6" selected="selected">Địa Lý</option>';
                            else echo '<option value="6">Địa Lý</option>';
                            if($exam->subject_id==7) echo '<option value="7" selected="selected">Lịch Sử</option>';
                            else echo '<option value="7">Lịch Sử</option>';
                            if($exam->subject_id==8) echo '<option value="8" selected="selected">Tin Học</option>';
                            else echo '<option value="8">Tin Học</option>';
                            if($exam->subject_id==9) echo '<option value="9" selected="selected">Công Nghệ</option>';
                            else echo '<option value="9">Công Nghệ</option>';
                            ?>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="btn_update" form="edit-form-<?=$exam->id?>">Cập Nhật</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>