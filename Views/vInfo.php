<div class='col py-3'>
    <h3>
        <center>Thông tin cá nhân</center>
    </h3>
    <?php if ($_SESSION['IDChucVu'] == '1' || $_SESSION['IDChucVu'] == '2') { ?>
        <div class="card--GV">
            <div class="card-body ">
                <div class="d-flex">
                    <img src="<?= $giaoVien->getAnhDaiDien() ?>" class="mr-5" style="max-width: 100px;max-height: 100px;">
                    <ul>
                        <li class="list-inline">
                            <h5>Họ tên : <?= $giaoVien->getTenGiaoVien() ?></h5>
                        </li>
                        <li class="list-inline">
                            <h5>Ngày Sinh : <?= $giaoVien->getNgaySinh() ?></h5>
                        </li>
                        <li class="list-inline">
                            <h5>Địa Chỉ : <?= $giaoVien->getDiaChi() ?></h5>
                        </li>
                        <li class="list-inline">
                            <h5>CCCD : <?= $giaoVien->getCCCD() ?></h5>
                        </li>
                        <li class="list-inline">
                            <h5>Email : <?= $giaoVien->getEmail() ?></h5>
                        </li>
                        <li class="list-inline">
                            <h5>SDT : <?= $giaoVien->getSDT() ?></h5>
                        </li>
                        <li class="list-inline">
                            <h5>Mã Tài Khoản : <?= $_SESSION['maTaiKhoan'] ?></h5>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <?php } ?>
    <?php if ($_SESSION['IDChucVu'] == '3') { ?>
        <div class="card--HS m-5">
            <div class="card-body ">
                <div class="d-flex">
                    <img src="<?= $hocSinh->getAnhDaiDien() ?>" class="m-5" style="max-width: 100px;max-height: 100px;">
                    <ul>
                        <li class="list-inline">
                            <h5>Họ tên : <?= $hocSinh->getTenhocSinh() ?></h5>
                        </li>
                        <li class="list-inline">
                            <h5>Ngày Sinh : <?= $hocSinh->getNgaySinh() ?></h5>
                        </li>
                        <li class="list-inline">
                            <h5>Địa Chỉ : <?= $hocSinh->getDiaChi() ?></h5>
                        </li>
                        <li class="list-inline">
                            <h5>Email : <?= $hocSinh->getEmail() ?></h5>
                        </li>
                        <li class="list-inline">
                            <h5>SDT : <?= $hocSinh->getSDT() ?></h5>
                        </li>
                        <li class="list-inline">
                            <h5>Mã Tài Khoản : <?= $_SESSION['maTaiKhoan'] ?></h5>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <?php } ?>

</div>