<div class="col-9" style="padding: 1%;">
    <h3>
        <center>Thông tin cá nhân</center>
    </h3>
    <form enctype="multipart/form-data" method="post">
        <?php if ($_SESSION['IDChucVu'] == '1' || $_SESSION['IDChucVu'] == '2') { ?>
            <div class="card--GV">
                <div class="card-body ">
                    <div class="d-flex">
                        <div class="col-3 mt-2">
                            <div class="avatar-wrapper">
                                <img class="profile-pic" src="<?= $anh = $giaoVien->getAnhDaiDien() ?>" />
                                <div class="upload-button">
                                    <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                                </div>
                                <input class="file-upload" type="file" name="avatar" />
                            </div>
                        </div>
                        <ul class="col-10">
                            <li class="list-inline">
                                <div class="form-group row">
                                    <label for="txtTen" class="col-sm-3 col-form-label">
                                        <h5>Họ tên : </h5>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="txtTen" id="txtTen" value="<?= $giaoVien->getTenGiaoVien() ?>">
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline">
                                <div class="form-group row">
                                    <label for="ngaySinh" class="col-sm-3 col-form-label">
                                        <h5>Ngày Sinh : </h5>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" name="ngaySinh" id="ngaySinh" value="<?= $giaoVien->getNgaySinh() ?>">
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline">
                                <div class="form-group row">
                                    <label for="txtDiaChi" class="col-sm-3 col-form-label">
                                        <h5>Địa Chỉ : </h5>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="txtDiaChi" id="txtDiaChi" value="<?= $giaoVien->getDiaChi() ?>">
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline">
                                <div class="form-group row">
                                    <label for="txtCCCD" class="col-sm-3 col-form-label">
                                        <h5>CCCD : </h5>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="txtCCCD" id="txtCCCD" value="<?= $giaoVien->getCCCD() ?>">
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline">
                                <div class="form-group row">
                                    <label for="txtEmail" class="col-sm-3 col-form-label">
                                        <h5>Email : </h5>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="txtEmail" id="txtEmail" value="<?= $giaoVien->getEmail() ?>">
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline">
                                <div class="form-group row">
                                    <label for="txtSDT" class="col-sm-3 col-form-label">
                                        <h5>Số Điện Thoại : </h5>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="txtSDT" id="txtSDT" value="<?= $giaoVien->getSDT() ?>">
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline">
                                <div class="form-group row">
                                    <label for="txtTaiKhoan" class="col-sm-3 col-form-label">
                                        <h5>Mã Tài Khoản : </h5>
                                    </label>
                                    <div class="col-sm-8">
                                        <input class="form-control" name="txtTaiKhoan" id="txtTaiKhoan" value="<?= $_SESSION['maTaiKhoan'] ?>" readonly style="cursor: default;">
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline">
                                <div class="form-group row">
                                    <label for="txtMatKhau" class="col-sm-3 col-form-label">
                                        <h5>Mật Khẩu : </h5>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" name="txtMatKhau" id="txtMatKhau" value="<?= $giaoVien->getPassWord() ?>" readonly style="cursor: default;">
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline mt-5">
                                <button name="saveInfo" type="submit" class="btn btn-secondary">Lưu Thông Tin</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php if ($_SESSION['IDChucVu'] == '3') { ?>
            <div class="container card--HS">
                <div class="card-body ">
                    <div class="d-flex">
                        <div class="col-3">
                            <div class="avatar-wrapper">
                                <img class="profile-pic" src="<?= $anh =  $hocSinh->getAnhDaiDien() ?>" />
                                <div class="upload-button">
                                    <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                                </div>
                                <input class="file-upload" type="file" name="avatar" />
                            </div>
                        </div>
                        <ul class="col-9">
                            <li class="list-inline">
                                <div class="form-group row">
                                    <label for="txtTen" class="col-sm-3 col-form-label">
                                        <h5>Họ tên : </h5>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="txtTen" id="txtTen" value="<?= $hocSinh->getTenhocSinh() ?>">
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline">
                                <div class="form-group row">
                                    <label for="ngaySinh" class="col-sm-3 col-form-label">
                                        <h5>Ngày Sinh : </h5>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" name="ngaySinh" id="ngaySinh" value="<?= $hocSinh->getNgaySinh() ?>">
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline">
                                <div class="form-group row">
                                    <label for="txtDiaChi" class="col-sm-3 col-form-label">
                                        <h5>Địa Chỉ : </h5>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="txtDiaChi" id="txtDiaChi" value="<?= $hocSinh->getDiaChi() ?>">
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline">
                                <div class="form-group row">
                                    <label for="txtCCCD" class="col-sm-3 col-form-label">
                                        <h5>CCCD : </h5>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="txtCCCD" id="txtCCCD" value="<?= $hocSinh->getCCCD() ?>">
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline">
                                <div class="form-group row">
                                    <label for="txtEmail" class="col-sm-3 col-form-label">
                                        <h5>Email : </h5>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="txtEmail" id="txtEmail" value="<?= $hocSinh->getEmail() ?>">
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline">
                                <div class="form-group row">
                                    <label for="txtSDT" class="col-sm-3 col-form-label">
                                        <h5>Số Điện Thoại : </h5>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="txtSDT" id="txtSDT" value="<?= $hocSinh->getSDT() ?>">
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline">
                                <div class="form-group row">
                                    <label for="txtTaiKhoan" class="col-sm-3 col-form-label">
                                        <h5>Mã Tài Khoản : </h5>
                                    </label>
                                    <div class="col-sm-8">
                                        <input class="form-control" name="txtTaiKhoan" id="txtTaiKhoan" value="<?= $_SESSION['maTaiKhoan'] ?>" readonly style="cursor: default;">
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline">
                                <div class="form-group row">
                                    <label for="txtMatKhau" class="col-sm-3 col-form-label">
                                        <h5>Mật Khẩu : </h5>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" name="txtMatKhau" id="txtMatKhau" value="<?= $hocSinh->getPassWord() ?>" readonly style="cursor: default;">
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline mt-5">
                                <button name="saveInfo" type="submit" class="btn btn-secondary">Lưu Thông Tin</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } ?>
    </form>
</div>

<?php
if (isset($_REQUEST['saveInfo'])) {
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
    if (empty($_REQUEST['ngaySinh'])) {
        $thongBaoLoi['ngaySinh']['thieu'] = 'Vui Lòng Nhập Ngày Sinh';
        echo "<script>alert('" . $thongBaoLoi['ngaySinh']['thieu'] . "')</script>";
    }
    if (empty($_REQUEST['txtMatKhau']) or strlen($_REQUEST['txtMatKhau']) < 4) {
        $thongBaoLoi['txtMatKhau']['thieu'] = 'Vui Lòng Nhập Lại Mật Khẩu';
        echo "<script>alert('" . $thongBaoLoi['txtMatKhau']['thieu'] . "')</script>";
    }
    if (!empty($_FILES['avatar']['tmp_name'])) {
        $type = array('image/png', 'image/jpg', 'image/jpeg');
        if (in_array($_FILES['avatar']['type'], $type)) {
            if ($_FILES['avatar']['size'] <= 10 * 1024 * 1024) {
                $anh = $newLocation = "Image/" . $_FILES['avatar']['name'];
                if (!move_uploaded_file($_FILES['avatar']['tmp_name'], $newLocation)) {
                    $thongBaoLoi['avatar']['push'] = 'Không Load Được Ảnh';
                    echo "<script>alert('" . $thongBaoLoi['avatar']['push'] . "')</script>";
                }
            } else {
                $thongBaoLoi['avatar']['size'] = 'Ảnh phải < 10 MB';
                echo "<script>alert('" . $thongBaoLoi['avatar']['size'] . "')</script>";
            }
        } else {
            $thongBaoLoi['avatar']['type'] = 'Chỉ được đăng ảnh';
            echo "<script>alert('" . $thongBaoLoi['avatar']['type'] . "')</script>";
        }
    }
    if (empty($thongBaoLoi)) {
        if ($_SESSION['IDChucVu'] == 1 || $_SESSION['IDChucVu'] == 2) {
            $updateInfo = $giaoVien->updateInfoUser($_REQUEST['txtTen'], $anh, $_REQUEST['txtCCCD'], $_REQUEST['ngaySinh'], $_REQUEST['txtDiaChi'],  $_REQUEST['txtEmail'], $_REQUEST['txtSDT']);
            if ($updateInfo) {
                echo "<script>alert('cập nhât thành công')</script>";
                echo "<meta http-equiv='refresh' content='0;url=index.php?myInfo'>";
            } else {
                echo "<script>alert('cập nhât thất bại')</script>";
            }
        }
        if ($_SESSION['IDChucVu'] == 3) {
            $updateInfo = $hocSinh->updateInfoUser($_REQUEST['txtTen'], $anh, $_REQUEST['txtCCCD'], $_REQUEST['ngaySinh'], $_REQUEST['txtDiaChi'],  $_REQUEST['txtEmail'], $_REQUEST['txtSDT']);
            if ($updateInfo) {
                echo "<script>alert('cập nhât thành công')</script>";
                echo "<meta http-equiv='refresh' content='0;url=index.php?myInfo'>";
            } else {
                echo "<script>alert('cập nhât thất bại')</script>";
            }
        }
    }
}
?>