<?php
require_once('views/layout/layout_head.php');
if(isset($_SESSION['isInserted'])) echo $_SESSION['isInserted'];
if(isset($_SESSION['isUpdated'])) echo $_SESSION['isUpdated'];
?>
<div class="container-fluid">
    <h1 class="mrg-top-30">E X A M _ L I S T</h1>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new-exam-modal">
    + Tạo Một Đề Thi
    </button>
    <table class='table table-sm table-hover table-bordered table-light'>
        <thead class='thead-light'>
            <tr>
                <th>Mã</th>
                <th>Tên Đề Thi</th>
                <th>Số Lượng Câu Hỏi</th>
                <th>Thời Lượng</th>
                <th>Môn Học</th>
                <th>Câu Hỏi</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($examList as $exam)
            {
        ?>
            <tr id="delete-<?=$exam->id?>">
                <td><?=$exam->id?></td>
                <td><?=$exam->exam_name?></td>
                <td><?=$exam->number_of_questions?> câu</td>
                <td><?=$exam->duration?> phút</td>
                <td><?=$m_subject->getSubject($exam->subject_id)?></td>
                <td class="action">
                    <button type="button" class="btn-add-question" data-toggle="modal" data-target="#add-question-<?=$exam->id?>">
                        <i class="fas fa-cog"></i>
                    </button>
                </td>
                <td class="action">
                    <button type="button" class="btn-edit" data-toggle="modal" data-target="#edit-modal-<?=$exam->id?>">
                        <i class="far fa-edit"></i>
                    </button>
                </td>
                <td class="action">
                    <button type="button" class="btn-delete" onclick="deleteAjax(<?=$exam->id?>)">
                        <i class="far fa-trash-alt"></i>
                    </button>
                </td>
            </tr>
            <?php 
                include('v_sua_exam.php');
            ?>
        <?php
            }
        ?>
        </tbody>
    </table>
    
    <?php
    foreach($examList as $exam)
    {
        include('modal_question.php');
    }
    $page_url = 'exam.php?';
    include('paging.php');
    include('v_them_moi_exam.php');
    ?>
</div>
<script src="public/js/jquery331.js"></script>
<script src="public/js/popper1143.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/ajax/ajax_delete_exam.js"></script>

</body>
</html>
