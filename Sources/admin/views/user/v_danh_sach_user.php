<?php
require_once('views/layout/layout_head.php');
if(isset($_SESSION['isInserted'])) echo $_SESSION['isInserted'];
if(isset($_SESSION['isUpdated'])) echo $_SESSION['isUpdated'];
?>
<div class="container-fluid">
    <h1 class="mrg-top-30">U S E R</h1>
    <a href="#new-user" class="btn btn-primary">+ Thêm Mới Một User</a>
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new-user-modal">
    + Thêm Mới Một User
    </button> -->
    <table class='table table-sm table-hover table-bordered table-light'>
        <thead class='thead-light'>
            <tr>
                <th>#</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Address</th>
                <th>Access Level</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $i = $records_per_page-1;
            foreach($userList as $user)
            {
        ?>
            <tr id="delete-<?=$user->id?>">
                <td><?=$stt-($i--)?></td>
                <td><?=$user->full_name?></td>
                <td><?=$user->email?></td>
                <td><?=$user->phone_number?></td>
                <td><?=$user->address?></td>
                <td><?=$user->level?></td>
                <td class="text-center"><?=($user->status==0)?'<i class="fas fa-times" style="color:red"></i>':'<i class="fas fa-check" style="color:green"></i>'?></td>
                <td class="action">
                    <button type="button" class="btn-edit" data-toggle="modal" data-target="#edit-modal-<?=$user->id?>">
                        <i class="far fa-edit"></i>
                    </button>
                </td>
            <?php if($user->id != $_SESSION['user_id']){ ?>
                <td class="action">
                    <button type="button" class="btn-delete" onclick="deleteAjax(<?=$user->id?>)">
                        <i class="far fa-trash-alt"></i>
                    </button>
                </td>
            <?php }else{echo "<td>current</td>";}?>
            </tr>
            <?php include('v_sua_user.php')?>
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
<script src="public/js/validate_edit_user.js"></script>
</body>
</html>
