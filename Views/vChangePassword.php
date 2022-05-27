<div class="col-8" style="padding: 1%;">
    <center>
        <h3><b>Đổi Mật khẩu</b></h3>
    </center>
    <form method="POST" class="m-2">
        <div class="form-group m-2">
            <h6><label for="txtCurrentPassword">Mật Khẩu hiện tại :</label></h6>
            <input type="password" class="form-control" name="txtCurrentPassword" id="txtCurrentPassword" required>
        </div>
        <div class="form-group m-2">
            <h6><label for="txtNewPassword">Mật Khẩu mới :</label></h6>
            <input type="password" class="form-control" name="txtNewPassword" id="txtNewPassword" minlength="4" required>
        </div>
        <div class="form-group m-2">
            <h6><label for="txtConformPassword">Xác Nhận Mật khẩu</label></h6>
            <input type="password" class="form-control" name="txtConformPassword" id="txtConformPassword" minlength="4" required>
        </div>
        <button class="btn btn-danger m-2" type="submit" name="btnChangePassword">
            Change Password
        </button>
    </form>
</div>
<?php
if (isset($_REQUEST['btnChangePassword'])) {
    if (md5($_REQUEST['txtCurrentPassword']) == mysqli_fetch_assoc($account->getMK($_SESSION['maTaiKhoan']))['password'] && $_REQUEST['txtNewPassword'] == $_REQUEST['txtConformPassword']) {
        $changeSuccess = $account->updatePassword($_SESSION['maTaiKhoan'], $_REQUEST['txtNewPassword']);
        if ($changeSuccess) {
            echo "<script>alert('Đổi Mật Khẩu Thành công')</script>";
            echo "<meta http-equiv='refresh' content='0;index.php?changePassword'>";
        } else {
            echo "<script>alert('Đổi Mật Khẩu Thất Bại')</script>";
        }
    } else {
        echo "<script>alert('Vui lòng nhập lại')</script>";
    }
}
?>