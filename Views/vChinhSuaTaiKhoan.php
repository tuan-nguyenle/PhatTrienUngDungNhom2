<!-- Modal chỉnh sửa -->
<div id="editUser" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="update_form" method="POST" action="">
                <div class="modal-header">
                    <h4 class="modal-title">Chỉnh Sửa Giáo Viên</h4>
                    <button type="button" class="close m-2" style="background-color: inherit;border: 0px;" data-dismiss="modal" aria-hidden="true">x</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" id="maTaiKhoanUser" name="txtMaTaiKhoanUser" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Họ và Tên</label>
                        <input type="text" id="tenUser" name="txtTenUser" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Căn Cước Công Dân</label>
                        <input type="text" id="CCCDUser" name="txtCCCDUser" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Ngày Sinh</label>
                        <input type="date" id="ngaySinhUser" name="txtNgaySinhUser" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="emailUser" name="txtEmailUser" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Số Điện Thoại</label>
                        <input type="phone" id="SDTUser" name="txtSDTUser" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Địa Chỉ</label>
                        <input type="text" id="diaChiUser" name="txtDiaChiUser" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" value="editUser" name="type">
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
    if (!preg_match('/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]{4,}$/', $_REQUEST['txtTenUser'])) {
        $thongBaoLoi['txtTenUser']['sai'] = 'Vui Lòng Nhập lại Họ Tên';
        echo "<script>alert('" . $thongBaoLoi['txtTenUser']['sai'] . "')</script>";
    }
    if (!preg_match('/^[a-zA-Z0-9]{4,}+[@gmail.com]{10,10}$/', $_REQUEST['txtEmailUser'])) {
        $thongBaoLoi['txtEmailUser']['sai'] = 'Vui Lòng Nhập Email';
        echo "<script>alert('" . $thongBaoLoi['txtEmailUser']['sai'] . "')</script>";
    }
    if (!preg_match('/^[03|08|09|07]{2,2}+[0-9]{8,8}$/', $_REQUEST['txtSDTUser'])) {
        $thongBaoLoi['txtSDTUser']['sai'] = 'Vui Lòng Nhập SDT';
        echo "<script>alert('" . $thongBaoLoi['txtSDTUser']['sai'] . "')</script>";
    }

    if (!preg_match('/^[0-9\/]{1,}+,+[A-Za-zÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s,]{2,}/', $_REQUEST['txtDiaChiUser'])) {
        $thongBaoLoi['txtDiaChiUser']['sai'] = 'Vui Lòng Nhập Địa Chỉ';
        echo "<script>alert('" . $thongBaoLoi['txtDiaChiUser']['sai'] . "')</script>";
    }
    if (empty($thongBaoLoi)) {
        if ($_REQUEST['chucVu'] == 1 || $_REQUEST['chucVu'] == 2) {
            $editGV = $quanTriTruong->updateThongTinGiaoVien($_REQUEST['txtMaTaiKhoanUser'], $_REQUEST['txtTenUser'], $_REQUEST['txtCCCDUser'], $_REQUEST['txtNgaySinhUser'], $_REQUEST['txtEmailUser'], $_REQUEST['txtSDTUser'], $_REQUEST['txtDiaChiUser']);
            if ($editGV) {
                echo "<script>alert('Cập nhập thành công')</script>";
                echo "<meta http-equiv='refresh' content='0;url=index.php?quanLyTaiKhoan&&chucVu=" . $_REQUEST['chucVu'] . "'>";
            } else {
                echo "<script>alert('Cập nhập Thất Bại')</script>";
            }
        }
        if ($_REQUEST['chucVu'] == 3) {
            $editHS = $quanTriTruong->updateThongTinHocSinh($_REQUEST['txtMaTaiKhoanUser'], $_REQUEST['txtTenUser'], $_REQUEST['txtCCCDUser'], $_REQUEST['txtNgaySinhUser'], $_REQUEST['txtEmailUser'], $_REQUEST['txtSDTUser'], $_REQUEST['txtDiaChiUser']);
            if ($editHS) {
                echo "<script>alert('Cập nhập thành công')</script>";
                echo "<meta http-equiv='refresh' content='0;url=index.php?quanLyTaiKhoan&&chucVu=" . $_REQUEST['chucVu'] . "'>";
            } else {
                echo "<script>alert('Cập nhập Thất Bại')</script>";
            }
        }
        if ($_REQUEST['chucVu'] == 4) {
            $editHS = $quanTriTruong->updateThongTinQuanTriTruong($_REQUEST['txtMaTaiKhoanUser'], $_REQUEST['txtTenUser'], $_REQUEST['txtCCCDUser'], $_REQUEST['txtNgaySinhUser'], $_REQUEST['txtEmailUser'], $_REQUEST['txtSDTUser'], $_REQUEST['txtDiaChiUser']);
            if ($editHS) {
                echo "<script>alert('Cập nhập thành công')</script>";
                echo "<meta http-equiv='refresh' content='0;url=index.php?quanLyTaiKhoan&&chucVu=" . $_REQUEST['chucVu'] . "'>";
            } else {
                echo "<script>alert('Cập nhập Thất Bại')</script>";
            }
        }
    }
}
?>