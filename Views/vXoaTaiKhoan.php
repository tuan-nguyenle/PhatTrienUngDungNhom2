<div id="xoa" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST">
                <input type="hidden" name="maTaiKhoan" id="maTaiKhoan">
                <div class="modal-header">
                    <h4 class="modal-title">Xóa Tài Khoản</h4>
                    <button type="button" class="btn" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <p>Bạn có muốn xóa không ?</p>
                    <p class="text-warning"><small>Thao tác này không thể hoàn tác lại được</small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="submit" class="btn btn-danger" name="xoaTaiKhoan" id="xoaTaiKhoan">Xóa Tài Khoản</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
if (isset($_REQUEST['xoaTaiKhoan']) && !empty($_REQUEST['maTaiKhoan'])) {
    switch ($_REQUEST['chucVu']) {
        case '1':
            $xoaNguoiDung = $quanTriTruong->xoaGiaoVien($_REQUEST['maTaiKhoan']);
            if ($xoaNguoiDung) {
                echo "<script>alert('Xóa thành công')</script>";
                echo "<meta http-equiv='refresh' content='0;url=?quanLyTaiKhoan&&chucVu=" . $_REQUEST['chucVu'] . "'>";
            } else {
                echo "<script>alert('Xóa thất bại')</script>";
            }
            break;
        case '2':
            $xoaNguoiDung = $quanTriTruong->xoaGiaoVien($_REQUEST['maTaiKhoan']);
            if ($xoaNguoiDung) {
                echo "<script>alert('Xóa thành công')</script>";
                echo "<meta http-equiv='refresh' content='0;url=?quanLyTaiKhoan&&chucVu=" . $_REQUEST['chucVu'] . "'>";
            } else {
                echo "<script>alert('Xóa thất bại')</script>";
            }
            break;
        case '3':
            $xoaNguoiDung = $quanTriTruong->xoaHocSinh($_REQUEST['maTaiKhoan']);
            if ($xoaNguoiDung) {
                echo "<script>alert('Xóa thành công')</script>";
                echo "<meta http-equiv='refresh' content='0;url=?quanLyTaiKhoan&&chucVu=" . $_REQUEST['chucVu'] . "'>";
            } else {
                echo "<script>alert('Xóa thất bại')</script>";
            }
            break;
        case '4':
            $xoaNguoiDung = $quanTriTruong->xoaQuanTriTruong($_REQUEST['maTaiKhoan']);
            if ($xoaNguoiDung) {
                echo "<script>alert('Xóa thành công')</script>";
                echo "<meta http-equiv='refresh' content='0;url=?quanLyTaiKhoan&&chucVu=" . $_REQUEST['chucVu'] . "'>";
            } else {
                echo "<script>alert('Xóa thất bại')</script>";
            }
            break;
        default:
            break;
    }
}
?>