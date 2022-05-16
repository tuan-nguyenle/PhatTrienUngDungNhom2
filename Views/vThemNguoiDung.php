<div class="modal fade" id="them" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #135dfc">
                <h5 class="modal-title" id="exampleModalLabel">Thêm người dùng mới</h5>
                <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
            </div>
            <form method="POST">
                <div class="modal-body">
                    <div class="container-fluid mt-3">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="txtTen">Tên Người Dùng</label>
                                <input class="form-control" type="text" placeholder="Lê Nguyễn Tuân" name="txtTen" require>
                            </div>
                            <div class="form-group">
                                <label for="txtNgaySinh">Ngày Sinh</label>
                                <input type="date" id="ngaySinh" name="txtNgaySinh" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="txtEmail">Email</label>
                                <input type="email" id="email" name="txtEmail" class="form-control" placeholder="Hi@gmail.com" required>
                            </div>
                            <div class="form-group">
                                <label for="txtSDT">Số Điện Thoại</label>
                                <input type="phone" id="SDT" name="txtSDT" class="form-control" placeholder="0869236512" required>
                            </div>
                            <div class="form-group">
                                <label for="txtDiaChi">Địa Chỉ</label>
                                <input type="text" id="diaChi" name="txtDiaChi" class="form-control" placeholder="46 Nguyễn Đức Cảnh, Nha Trang, Khánh hòa" required>
                            </div>
                            <div class="form-group">
                                <label for="txtCCCD">Căn Cước Công Dân</label>
                                <input type="text" id="CCCD" name="txtCCCD" class="form-control" placeholder="2259233302" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-2">
                                <label for="maTruong">Mã Trường</label>
                                <input type="text" id="maTruong" name="maTruong" class="form-control" value="<?= $thongTinTruong['maTruong'] ?>" disabled>
                            </div>
                            <div class="form-group col-2">
                                <label for="sex">Giới Tính</label>
                                <select class="form-select" name="sex">
                                    <option value="1">Nam</option>
                                    <option value="0" selected>Nữ</option>
                                </select>
                            </div>
                            <div class="form-group col-3">
                                <label for="maTaiKhoan">Mã Tài Khoản</label>
                                <input type="text" id="taiKhoan" name="maTaiKhoan" class="form-control" value="<?= $tk = str_pad(mysqli_fetch_assoc($quanTriTruong->xemTaiKhoanCuoiCung())['maTaiKhoan'] + 1, 5, '0', STR_PAD_LEFT) ?>" disabled>
                            </div>
                            <div class="form-group col-3">
                                <label for="chucVu">Chức Vụ</label>
                                <select class="form-select" name="txtChucVu" id="chucVu">
                                    <?php
                                    $allChucVu = $quanTriTruong->getAllChucVu();
                                    if ($allChucVu) {
                                        if (mysqli_num_rows($allChucVu) > 0) {
                                            while ($row = mysqli_fetch_assoc($allChucVu)) {
                                                echo "<option value='" . $row['IDChucVu'] . "'>" . $row['MoTa'] . "</option>";
                                            }
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-2 monHoc">
                                <label for="boMon">Bộ Môn</label>
                                <select class="form-select" name='txtBoMon' id='boMon'>
                                    <?php
                                    $allMonHoc = $quanTriTruong->xemTatCaCacMonCoTrongHeThong();
                                    if ($allMonHoc) {
                                        if (mysqli_num_rows($allMonHoc) > 0) {
                                            while ($row = mysqli_fetch_assoc($allMonHoc)) {
                                                echo "<option value='" . $row['maMonHoc'] . "'>" . $row['tenMonHoc'] . "</option>";
                                            }
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-primary" name="themNguoiDungMoi">Lưu</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $("#chucVu").change(function(event) {
        if ($('select#chucVu').find('option:selected').val() == 3 || $('select#chucVu').find('option:selected').val() == 4) {
            $('.monHoc').hide();
        } else {
            $('.monHoc').show();
        }
    });
</script>
<?php
if (isset($_REQUEST['themNguoiDungMoi'])) {
    $thongBaoLoi = array();
    if (!preg_match('/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]{4,}$/', $_REQUEST['txtTen'])) {
        $thongBaoLoi['txtTen']['sai'] = 'Vui Lòng Nhập lại Họ Tên';
        echo "<script>alert('" . $thongBaoLoi['txtTen']['sai'] . "')</script>";
    }
    if (!preg_match('/^[a-zA-Z0-9]{4,}+[@gmail.com]{10,10}$/', $_REQUEST['txtEmail'])) {
        $thongBaoLoi['txtEmail']['sai'] = 'Vui Lòng Nhập Email';
        echo "<script>alert('" . $thongBaoLoi['txtEmail']['sai'] . "')</script>";
    }
    if (!preg_match('/^[03|08|09|07]{2,2}+[0-9]{8,8}$/', $_REQUEST['txtSDT'])) {
        $thongBaoLoi['txtSDT']['sai'] = 'Vui Lòng Nhập SDT';
        echo "<script>alert('" . $thongBaoLoi['txtSDT']['sai'] . "')</script>";
    }
    if (!preg_match('/^[0-9\/]{1,}+,+[A-Za-zÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s,]{2,}/', $_REQUEST['txtDiaChi'])) {
        $thongBaoLoi['txtDiaChi']['sai'] = 'Vui Lòng Nhập Địa Chỉ';
        echo "<script>alert('" . $thongBaoLoi['txtDiaChi']['sai'] . "')</script>";
    }
    if (!preg_match('/^[0-9]{9,10}$/', $_REQUEST['txtCCCD'])) {
        $thongBaoLoi['txtCCCD']['sai'] = 'Vui Lòng Nhập lại CCCD';
        echo "<script>alert('" . $thongBaoLoi['txtCCCD']['sai'] . "')</script>";
    }
    if (empty($_REQUEST['txtNgaySinh'])) {
        $thongBaoLoi['txtNgaySinh']['thieu'] = 'Vui Lòng Nhập Ngày Sinh';
        echo "<script>alert('" . $thongBaoLoi['txtNgaySinh']['thieu'] . "')</script>";
    }
    if (empty($thongBaoLoi)) {
        if ($_REQUEST['txtChucVu'] == 1 || $_REQUEST['txtChucVu'] == 2) {
            echo "<script>alert(" . $_REQUEST['txtBoMon'] . ")</script>";
            $insertGiaoVien = $quanTriTruong->themGiaoVien($tk, $_REQUEST['txtTen'], $_REQUEST['txtCCCD'], $_REQUEST['txtNgaySinh'], $_REQUEST['txtEmail'], $_REQUEST['txtSDT'], $_REQUEST['txtDiaChi'], $_REQUEST['sex'], $thongTinTruong['maTruong'], $_REQUEST['txtChucVu'], $_REQUEST['txtBoMon']);
            if ($insertGiaoVien) {
                echo "<script>alert('Thêm Thành Công')</script>";
                echo "<meta http-equiv='refresh' content='0;url=index.php?quanLyTaiKhoan&&chucVu=" . $_REQUEST['chucVu'] . "'>";
            } else {
                echo "<script>alert('Thêm Thất Bại')</script>";
            }
        }
        if ($_REQUEST['txtChucVu'] == 3) {
            $insertHocSinh = $quanTriTruong->themHocSinh($tk, $_REQUEST['txtTen'], $_REQUEST['txtCCCD'], $_REQUEST['txtNgaySinh'], $_REQUEST['txtEmail'], $_REQUEST['txtSDT'], $_REQUEST['txtDiaChi'], $_REQUEST['sex'], $thongTinTruong['maTruong'], $_REQUEST['txtChucVu']);
            if ($insertHocSinh) {
                echo "<script>alert('Thêm Thành Công')</script>";
                echo "<meta http-equiv='refresh' content='0;url=index.php?quanLyTaiKhoan&&chucVu=" . $_REQUEST['chucVu'] . "'>";
            } else {
                echo "<script>alert('Thêm Thất Bại')</script>";
            }
        }
        if ($_REQUEST['txtChucVu'] == 4) {
            $insertQuanTriTruong = $quanTriTruong->themQuanTriTruong($tk, $_REQUEST['txtTen'], $_REQUEST['txtCCCD'], $_REQUEST['txtNgaySinh'], $_REQUEST['txtEmail'], $_REQUEST['txtSDT'], $_REQUEST['txtDiaChi'], $_REQUEST['sex'], $thongTinTruong['maTruong'], $_REQUEST['txtChucVu']);
            if ($insertQuanTriTruong) {
                echo "<script>alert('Thêm Thành Công')</script>";
                echo "<meta http-equiv='refresh' content='0;url=index.php?quanLyTaiKhoan&&chucVu=" . $_REQUEST['chucVu'] . "'>";
            } else {
                echo "<script>alert('Thêm Thất Bại')</script>";
            }
        }
    }
}
?>