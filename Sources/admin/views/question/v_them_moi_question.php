<div id="new-question-modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document" style="max-width: 875px;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">N 3 W _ Q U E S T I O N</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" class="container" action="question.php" id="new-question-form">
                    <div class="form-group row">
                        <label class="col-2">Nội Dung Câu Hỏi:</label>
                        <textarea class="col-8 form-control" name="content" id="content" rows="4"></textarea>
                    </div>
                    <label>Đáp Án A:</label>
                    <div class="form-group row">
                        <div class="col">
                            <textarea name="answer_a" class="col-10 form-control" rows="1"></textarea>
                        </div>
                    </div>
                    <label>Đáp Án B:</label>
                    <div class="form-group row">
                        <div class="col">
                            <textarea name="answer_b" class="col-10 form-control" rows="1"></textarea>
                        </div>
                    </div>
                    <label>Đáp Án C:</label>
                    <div class="form-group row">
                        <div class="col">
                            <textarea name="answer_c" class="col-10 form-control" rows="1"></textarea>
                        </div>      
                    </div>
                    <label>Đáp Án D:</label>
                    <div class="form-group row">
                        <div class="col">
                            <textarea name="answer_d" class="col-10 form-control" rows="1"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-5">
                            <label>Đáp Án Đúng:</label>
                            <select name="correct" class="form-control">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-5">
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
                        <div class="col-4">
                            <label>Mức Độ:</label>
                            <select name="level_of_difficult" class="form-control">
                                <option value="1">Dễ</option>
                                <option value="2">Trung Bình</option>
                                <option value="3">Khó</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2">Lời giải:</label>
                        <textarea class="col-8 form-control" name="solution" id="content" rows="4"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="btn_add" form="new-question-form">Tạo</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>