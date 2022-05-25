<div class="container">
    <div class="subject m-3" style="text-align: center">
        <p class="h3">Thông tin các trường</p>
    </div>
    <div class="row col-8 m-3">
        <label for="txtSearch" class="col-sm-3 col-form-label">Tìm Thông Tin Trường</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="txtSearch" name="txtSearch">
        </div>
    </div>

    <div class="col-2" style="margin-left:auto; margin-bottom: 5%;">
        <button class="btn btn-success btn__confirm" data-toggle="modal" data-target="#modalThemTruong">Thêm trường</button>
    </div>
    <form method="POST">
        <div id="main">
            <table class="table table-bordered">
                <thead>
                    <tr style="text-align:left">
                        <th scope="col">Mã Trường</th>
                        <th scope="col">Tên Trường</th>
                        <th scope="col">Địa Chỉ</th>
                        <th scope="col">Thành Phố</th>
                        <th scope="col">Tên Người Quản Trị</th>
                        <th scope="col">Tùy Chỉnh</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $thongTinTruong = $quanTriThanhPho->getAllTruong();
                    while ($thongTinChiTietTruong = mysqli_fetch_assoc($thongTinTruong)) {
                    ?>
                        <tr>
                            <td><?= $thongTinChiTietTruong['maTruong'] ?></td>
                            <td><?= $thongTinChiTietTruong['tenTruong'] ?></td>
                            <td><?= $thongTinChiTietTruong['diaChi'] ?></td>
                            <td><?= $thongTinChiTietTruong['tenThanhPho'] ?></td>
                            <td><?= $thongTinChiTietTruong['tenNguoiQuanTri'] ?></td>
                            <td><button type="submit" name="btnEditThongTin" class="btn btn-primary" value="<?= $thongTinChiTietTruong['maTruong'] ?>">Sửa</button></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </form>
</div>
<?php include_once './Views/vSuaThongTinTruong.php'; ?>
<div class="modal fade" id="modalThemTruong" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="border-radius: 10px">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #103991a0">
                <h5 class="modal-title" id="exampleModalLabel">Thêm Trường</h5>
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    &times;
                </button>
            </div>
            <form style="line-height: 40px;" method="POST">
                <div class="modal-body">
                    <div class="container-fluid mt-3">
                        <div class="form-row">
                            <h3 style="text-align: center;">Thông Tin Thành Phố</h3>
                            <div class="row">
                                <input type="hidden" id="maTruong" name="maTruong" class="form-control" value="<?= mysqli_fetch_assoc($quanTriThanhPho->xemTruongCuoiCung())['maTruong'] + 1 ?>">
                                <div class="form-group col-sm-6">
                                    <label for="txtTenTruong">Tên Trường</label>
                                    <input class="form-control" type="text" placeholder="Hà Huy Tập" name="txtTenTruong" require>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="cbThanhPho">Thành Phố</label>
                                    <select class="form-select" name="cbThanhPho" id="cbThanhPho">
                                        <?php
                                        $allThanhPho = $quanTriThanhPho->getAllThanhPho();
                                        while ($row = mysqli_fetch_assoc($allThanhPho)) {
                                            echo "<option value='" . $row['maThanhPho'] . "'>" . $row['tenThanhPho'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="txtDiaChiTruong">Địa Chỉ Trường</label>
                                <input type="text" name="txtDiaChiTruong" id="txtDiaChiTruong" class="form-control" placeholder="79, Đường 23/10,Nha Trang, Khánh Hòa" required>
                            </div>
                            <hr>
                            <h3 style="text-align: center;">Thông Tin Người Quản Trị</h3>
                            <div class="form-group">
                                <label for="txtTenNguoiQuanTri">Tên Người Quản Trị</label>
                                <input type="text" id="txtTenNguoiQuanTri" name="txtTenNguoiQuanTri" class="form-control" placeholder="Lê Nguyễn Tuân" required>
                            </div>

                            <div class="form-group">
                                <label for="txtDiaChi">Địa Chỉ</label>
                                <input type="text" id="diaChi" name="txtDiaChi" class="form-control" placeholder="46 Nguyễn Đức Cảnh, Nha Trang, Khánh hòa" required>
                            </div>
                            <div class="form-group">
                                <label for="txtEmail">Email</label>
                                <input type="email" id="email" name="txtEmail" class="form-control" placeholder="Hi@gmail.com" required>
                            </div>
                            <div class="form-group">
                                <label for="txtCCCD">Căn Cước Công Dân</label>
                                <input type="text" id="CCCD" name="txtCCCD" class="form-control" placeholder="2259233302" required>
                            </div>
                            <div class="row">
                                <div class="form-group col-5">
                                    <label for="txtNgaySinh">Ngày Sinh</label>
                                    <input type="date" id="ngaySinh" name="txtNgaySinh" class="form-control" required>
                                </div>
                                <div class="form-group col-3">
                                    <label for="sex">Giới Tính</label>
                                    <select class="form-select" name="sex">
                                        <option value="1">Nam</option>
                                        <option value="0" selected>Nữ</option>
                                    </select>
                                </div>
                                <div class="form-group col-4">
                                    <label for="txtSDT">Số Điện Thoại</label>
                                    <input type="phone" id="SDT" name="txtSDT" class="form-control" placeholder="0869236512" required>
                                </div>
                                <input type="hidden" id="taiKhoan" name="maTaiKhoan" class="form-control" value="<?= $tk = str_pad(mysqli_fetch_assoc($quanTriThanhPho->xemTaiKhoanCuoiCung())['maTaiKhoan'] + 1, 5, '0', STR_PAD_LEFT) ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-bg-danger" data-dismiss="modal" value="Close">
                    <button type="submit" name="btnTaoTruong" class="btn btn-primary">Lưu</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Xử Lý Thêm Trường Mới -->
<?php
if (isset($_REQUEST['btnTaoTruong'])) {
    $thongBaoLoi = array();
    // check ten truong
    if (!preg_match('/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]{4,}$/', $_REQUEST['txtTenTruong'])) {
        $thongBaoLoi['txtTenTruong']['sai'] = 'Vui Lòng Nhập lại Họ Tên Trường';
        echo "<script>alert('" . $thongBaoLoi['txtTenTruong']['sai'] . "')</script>";
    }
    // check ten nguoi dung
    if (!preg_match('/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]{4,}$/', $_REQUEST['txtTenNguoiQuanTri'])) {
        $thongBaoLoi['txtTenNguoiQuanTri']['sai'] = 'Vui Lòng Nhập lại Họ Tên Người Quản Trị';
        echo "<script>alert('" . $thongBaoLoi['txtTenNguoiQuanTri']['sai'] . "')</script>";
    }
    // check email
    if (!preg_match('/^[a-zA-Z0-9]{4,}+[@gmail.com]{10,10}$/', $_REQUEST['txtEmail'])) {
        $thongBaoLoi['txtEmail']['sai'] = 'Vui Lòng Nhập Email';
        echo "<script>alert('" . $thongBaoLoi['txtEmail']['sai'] . "')</script>";
    }
    // check SDT
    if (!preg_match('/^[03|08|09|07]{2,2}+[0-9]{8,8}$/', $_REQUEST['txtSDT'])) {
        $thongBaoLoi['txtSDT']['sai'] = 'Vui Lòng Nhập SDT';
        echo "<script>alert('" . $thongBaoLoi['txtSDT']['sai'] . "')</script>";
    }
    // check dia chi nguoi dung
    if (!preg_match('/^[0-9\/]{1,}+,+[A-Za-zÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s,]{2,}/', $_REQUEST['txtDiaChi'])) {
        $thongBaoLoi['txtDiaChi']['sai'] = 'Vui Lòng Nhập Địa Chỉ Người Quản Trị';
        echo "<script>alert('" . $thongBaoLoi['txtDiaChi']['sai'] . "')</script>";
    }
    // check dia chi truong
    if (!preg_match('/^[0-9\/]{1,}+,+[A-Za-zÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s,]{2,}/', $_REQUEST['txtDiaChiTruong'])) {
        $thongBaoLoi['txtDiaChiTruong']['sai'] = 'Vui Lòng Nhập Địa Chỉ Trường';
        echo "<script>alert('" . $thongBaoLoi['txtDiaChiTruong']['sai'] . "')</script>";
    }
    // check CCCD Nguoi dung
    if (!preg_match('/^[0-9]{9,10}$/', $_REQUEST['txtCCCD'])) {
        $thongBaoLoi['txtCCCD']['sai'] = 'Vui Lòng Nhập lại CCCD';
        echo "<script>alert('" . $thongBaoLoi['txtCCCD']['sai'] . "')</script>";
    }
    // check Ngay Sinh
    if (empty($_REQUEST['txtNgaySinh'])) {
        $thongBaoLoi['txtNgaySinh']['thieu'] = 'Vui Lòng Nhập Ngày Sinh';
        echo "<script>alert('" . $thongBaoLoi['txtNgaySinh']['thieu'] . "')</script>";
    }
    if (empty($thongBaoLoi)) {
        $insertTruongMoi = $quanTriThanhPho->insertTruongMoi($_REQUEST['txtTenTruong'], $_REQUEST['txtDiaChiTruong'], $_REQUEST['cbThanhPho'], $_REQUEST['txtTenNguoiQuanTri'], $_REQUEST['txtEmail'], $_REQUEST['txtSDT'], $_REQUEST['txtDiaChi'], $_REQUEST['maTaiKhoan'], $_REQUEST['txtNgaySinh'], $_REQUEST['txtCCCD'], $_REQUEST['sex'], $_REQUEST['maTruong']);
        if ($insertTruongMoi) {
            echo "<script>alert('Thêm Thành Công')</script>";
            echo "<meta http-equiv='refresh' content='0;url=quanTriThanhPho.php?quanLiTruong'>";
        } else {
            echo "<script>alert('Thêm Thất Bại')</script>";
        }
    }
}
?>
<!-- Xử lý sửa thông tin trường -->
<?php if (isset($_REQUEST['btnEditThongTin'])) { ?>
    <script>
        $(function() {
            $('#EditThongTin').modal('show');
        });
    </script>
<?php } ?>