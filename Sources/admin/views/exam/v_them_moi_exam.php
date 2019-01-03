<div id="new-exam-modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document" style="max-width: 875px;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">N 3 W _ E x A M</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" class="container" action="exam.php" id="new-exam-form">
                    <div class="form-group">
                        <label>Tên Đề : </label>
                        <input type="text" class="form-control" name="exam_name">
                    </div>
                    <div class="form-group">
                        <label>Thời Lượng : </label>
                        <input type="text" class="form-control" name="duration">
                    </div>
                    <div class="form-group">
                        <label for="">Số Lượng Câu Hỏi : </label>
                        <input type="hidden" name="question_num" value="0">
                        <input type="text" class="form-control" name="question_num" value="0" disabled = "disabled">
                    </div>
                    <div class="form-group">
                        <label>Môn Học:</label>
                        <select name="subject_id" class="form-control">
                            <option value="1">Toán Học</option>
                            <option value="2">Tiếng Anh</option>
                            <option value="3">Vật Lý</option>
                            <option value="4">Hóa Học</option>
                            <option value="5">Sinh Học</option>
                            <option value="6">Địa Lý</option>
                            <option value="7">Lịch Sử</option>
                            <option value="8">Tin Học</option>
                            <option value="9">Công Nghệ</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="btn_add" form="new-exam-form">Tạo</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<?php include_once('modal_question.php');