<!-- Modal chỉnh sửa -->
<div id="editGV" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="update_form" method="POST" action="">
                <div class="modal-header">
                    <h4 class="modal-title">Chỉnh Sửa Giáo Viên</h4>
                    <button type="button" class="close m-2" style="background-color: inherit;border: 0px;" data-dismiss="modal" aria-hidden="true">x</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <!-- <label>Mã Tài Khoản</label> -->
                        <input type="hidden" id="maTaiKhoanGV" name="txtMaTaiKhoanGV" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Họ và Tên</label>
                        <input type="text" id="tenGV" name="txtTenGV" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Căn Cước Công Dân</label>
                        <input type="text" id="CCCDGV" name="txtCCCDGV" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Ngày Sinh</label>
                        <input type="date" id="ngaySinhGv" name="txtNgaySinhGv" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="emailGV" name="txtEmailGV" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Số Điện Thoại</label>
                        <input type="phone" id="SDTGV" name="txtSDTGV" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Địa Chỉ</label>
                        <input type="text" id="diaChiGV" name="txtDiaChiGV" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" value="editGV" name="type">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="submit" name="update" class="btn btn-info" value="update">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
if (isset($_POST['update']) && $_POST['update'] == 'update') {
    $thongBaoLoi = array();
    if (empty($_REQUEST['txtTenGV'])) {
        $thongBaoLoi['txtTenGV']['Rỗng'] = 'Vui Lòng Nhập Họ Tên';
        echo "<script>alert('" . $thongBaoLoi['txtTenGV']['Rỗng'] . "')</script>";
    }
    if (empty($_REQUEST['txtEmailGV'])) {
        $thongBaoLoi['txtEmailGV']['Rỗng'] = 'Vui Lòng Nhập Email';
        echo "<script>alert('" . $thongBaoLoi['txtEmailGV']['Rỗng'] . "')</script>";
    } else {
        if (!filter_var(trim($_REQUEST['txtEmailGV']), FILTER_VALIDATE_EMAIL)) {
            $thongBaoLoi['txtEmailGV']['Không hợp lệ'] = 'Email Không hợp lệ';
            echo "<script>alert('" . $thongBaoLoi['txtEmailGV']['Không hợp lệ'] . "')</script>";
        }
    }
    if (empty($_REQUEST['txtSDTGV'])) {
        $thongBaoLoi['txtSDTGV']['Rỗng'] = 'Vui Lòng Nhập SDT';
        echo "<script>alert('" . $thongBaoLoi['txtSDTGV']['Rỗng'] . "')</script>";
    } else {
        if (strlen($_REQUEST['txtSDTGV']) < 10 || strlen($_REQUEST['txtSDTGV']) > 10) {
            $thongBaoLoi['txtSDTGV']['Độ Dài'] = 'SĐT không < hoặc > 10 số';
            echo "<script>alert('" . $thongBaoLoi['txtSDTGV']['Độ Dài'] . "')</script>";
        } elseif (!preg_match('/^(09|03|07|08|05)+([0-9]{8})$/', $_REQUEST['txtSDTGV'])) {
            $thongBaoLoi['txtSDTGV']['Không hợp lệ'] = 'Số Điện Thoại Không Hợp Lệ';
            echo "<script>alert('" . $thongBaoLoi['txtSDTGV']['Không hợp lệ'] . "')</script>";
        }
    }
    if (empty($thongBaoLoi)) {
        $update = $quanTriTruong->updateThongTinGiaoVien($_REQUEST['txtMaTaiKhoanGV'], $_REQUEST['txtTenGV'], $_REQUEST['txtCCCDGV'], $_REQUEST['txtNgaySinhGv'], $_REQUEST['txtEmailGV'], $_REQUEST['txtSDTGV'], $_REQUEST['txtDiaChiGV']);
        if ($update) {
            echo "<script>alert('cập nhât thành công')</script>";
            echo "<meta http-equiv='refresh' content='0;url=index.php?quanLyTaiKhoan&&chucVu=" . $_REQUEST['chucVu'] . "'>";
        } else {
            echo "<script>alert('cập nhât thất bại')</script>";
        }
    }
}
?>