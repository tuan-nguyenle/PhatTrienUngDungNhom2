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
    // $xoaMonHoc = $quanTriThanhPho->xoaMonHocMoiChoKhoi($_REQUEST['Khoi'], $_REQUEST['maMonHoc']);
    // if ($xoaMonHoc) {
    //     echo "<script>alert('Xóa thành công')</script>";
    //     echo "<meta http-equiv='refresh' content='0;url=quanTriThanhPho.php?quanLiMonHoc&&Khoi=" . $_REQUEST['Khoi'] . "'>";
    // } else {
    //     echo "<script>alert('Xóa thất bại')</script>";
    // }
}
?>