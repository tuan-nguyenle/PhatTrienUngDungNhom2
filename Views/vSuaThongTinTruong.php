<?php
if (isset($_REQUEST['btnEditThongTin'])) {
    $thongTinChiTietTruongTheoThanhPho = $quanTriThanhPho->get1Truong($_REQUEST['btnEditThongTin']);
    $thongTinChiTietTruongTheoThanhPho = mysqli_fetch_assoc($thongTinChiTietTruongTheoThanhPho);
} else { ?>
    <script>
        $(function() {
            $('#EditThongTin').modal('hide');
        });
    </script>
<?php
}
?>

<div class="modal fade" id="EditThongTin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="border-radius: 10px">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #103991a0">
                <h5 class="modal-title" id="exampleModalLabel">Sửa Thông Tin Trường</h5>
            </div>
            <form style="line-height: 40px;" method="POST">
                <div class="modal-body">
                    <div class="container-fluid mt-3">
                        <div class="form-row">
                            <h3 style="text-align: center;">Thông Tin Thành Phố</h3>
                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label for="maTruong">Mã Trường</label>
                                    <input type="text" id="maTruong" name="maTruong" class="form-control" value="<?= mysqli_fetch_assoc($quanTriThanhPho->xemTruongCuoiCung())['maTruong'] ?>" readonly>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="txtThanhPho">Thành Phố</label>
                                    <input class="form-control" type="text" placeholder="Hồ Chí Minh" name="txtThanhPho" value="<?= $thongTinChiTietTruongTheoThanhPho['tenThanhPho'] ?>" readonly>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="txtTenTruong">Tên Trường</label>
                                    <input class="form-control" type="text" placeholder="Hà Huy Tập" name="txtTenTruong" value="<?= $thongTinChiTietTruongTheoThanhPho['tenTruong'] ?>">
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="txtDiaChiTruong">Địa Chỉ Trường</label>
                                <input type="text" name="txtDiaChiTruong" id="txtDiaChiTruong" class="form-control" placeholder="79, Đường 23/10,Nha Trang, Khánh Hòa" value="<?= $thongTinChiTietTruongTheoThanhPho['diaChi'] ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="btnEditThongTinTruong" class="btn btn-primary">Lưu</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_REQUEST['btnEditThongTinTruong'])) {
    $update = $quanTriThanhPho->updateThongTinTruong($_REQUEST['maTruong'], $_REQUEST['txtTenTruong'], $_REQUEST['txtDiaChiTruong']);
    if ($update) {
        echo "<script>alert('Cập Nhật Thành Công')</script>";
        echo "<meta http-equiv='refresh' content='0;url=quanTriThanhPho.php?quanLiTruong'>";
    } else {
        echo "<script>alert('Cập Nhật Thành Công')</script>";
    }
}
?>