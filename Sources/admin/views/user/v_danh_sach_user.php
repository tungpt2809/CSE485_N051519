<?php
require_once('views/layout/layout_head.php');
if(isset($_SESSION['isInserted'])) echo $_SESSION['isInserted'];
?>
<div class="container-fluid">
    <h1 class="mrg-top-30">U S E R _ L I S T</h1>
    <a href="#new-user" class="btn btn-primary">+ Thêm Mới Một User</a>
    <table class='table table-sm table-hover table-responsive table-bordered table-light'>
        <thead class='thead-light'>
            <tr>
                <th>#</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th class="col-md-5">Address</th>
                <th>Access Level</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $i = $records_per_page-1;
            foreach($userList as $item)
            {
        ?>
            <tr id="delete-<?=$item->id?>">
                <td><?=$stt-($i--)?></td>
                <td><?=$item->full_name?></td>
                <td><?=$item->email?></td>
                <td><?=$item->phone_number?></td>
                <td><?=$item->address?></td>
                <td><?=$item->level?></td>
                <td class="text-center"><?=($item->status==0)?'<i class="fas fa-times" style="color:red"></i>':'<i class="fas fa-check" style="color:green"></i>'?></td>
                <td class="action">
                    <button type="button" class="edit-btn">
                        <i class="far fa-edit"></i>
                    </button>
                </td>
            <?php if($item->id != $_SESSION['user_id']){ ?>
                <td class="action">
                    <button type="button" onclick="deleteAjax(<?=$item->id?>)">
                        <i class="far fa-trash-alt"></i>
                    </button>
                </td>
            <?php }else{echo "<td>current</td>";}?>
            </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
    <?php
    $page_url = 'user.php?';
    include('paging.php');
    include('v_them_moi_user.php');
    ?>
</div>
<script src="public/js/jquery331.js"></script>
<script src="public/js/popper1143.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/ajax/ajax_delete_user.js"></script>
<script src="public/js/validate_new_user.js"></script>

</body>
</html>
