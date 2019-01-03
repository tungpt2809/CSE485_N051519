<div id="edit-modal-<?=$user->id?>" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document" style="max-width: 875px;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">User <?=$user->full_name?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body row">  
                <form method="POST" action="user.php<?=isset($_GET['page'])?('?page='.$_GET['page']):''?>" id="update-form-<?=$user->id?>">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Email:</label>
                            <input name="edit_email" type="hidden" class="form-control" autocomplete="off" value="<?=$user->email?>">
                            <input name="edit_email" type="text" class="form-control" autocomplete="off" value="<?=$user->email?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu:</label>
                            <input name="edit_pwd" id="edit_pwd_<?=$user->id?>" placeholder="Nhập mật khẩu mới nếu muốn thay đổi" type="text" class="form-control" autocomplete="off" onblur="checkPassword(<?=$user->id?>)">
                        </div>
                        <div class="form-group">
                            <label>Quyền truy cập:</label>
                            <select name="edit_level" class="form-control">
                            <?php if($user->level == "Admin"){
                                echo '<option value="Admin">Admin</option>';
                                echo '<option value="Customer">Customer</option>';
                            }
                            else{
                                echo '<option value="Customer">Customer</option>';
                                echo '<option value="Admin">Admin</option>';
                            }
                            ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Trạng thái tài khoản:</label>
                            <select name="edit_status" class="form-control" <?=($_SESSION['user_id'] == $user->id)?'disabled':'' ?>>
                            <?php
                            if($user->status == 1)
                            {
                                echo '<option value="1">Đã kích hoạt</option>';
                                echo '<option value="0">Chưa kích hoạt</option>';
                            }
                            else
                            {
                                echo '<option value="0">Chưa kích hoạt</option>';
                                echo '<option value="1">Đã kích hoạt</option>';
                            }                                
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="form-group">
                            <label>Họ tên:</label>
                            <input name="edit_full_name" type="text" class="form-control" autocomplete="off" placeholder="Trống" value="<?=$user->full_name?>">
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại:</label>
                            <input name="edit_phone_number" type="text" class="form-control"  autocomplete="off" placeholder="Trống" value="<?=$user->phone_number?>">
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ:</label>
                            <textarea name="edit_address" class="form-control" rows="5" placeholder="Trống"><?=$user->address?></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="btn_edit" form="update-form-<?=$user->id?>" class="edit-btn">Cập nhật</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>