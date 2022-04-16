<div class="card ">
    <div class="card-body ">
        <div class="d-flex">
            <img src="<?= $giaoVien->getAllThongTinGiaoVienQuaUsername()['anhDaiDien'] ?>" class="mr-5" width="100" height="100">
            <ul>
                <li class="list-inline">
                    <h4>Họ tên : <?= $giaoVien->getAllThongTinGiaoVienQuaUsername()['tenGiaoVien'] ?></h4>
                </li>
                <li class="list-inline">
                    <h4>Ngày Sinh : <?= $giaoVien->getAllThongTinGiaoVienQuaUsername()['ngaySinh'] ?></h4>
                </li>
                <li class="list-inline">
                    <h4>Địa Chỉ : <?= $giaoVien->getAllThongTinGiaoVienQuaUsername()['diaChi'] ?></h4>
                </li>
                <li class="list-inline">
                    <h4>CCCD : <?= $giaoVien->getAllThongTinGiaoVienQuaUsername()['CCCD'] ?></h4>
                </li>
                <li class="list-inline">
                    <h4>Email : <?= $giaoVien->getAllThongTinGiaoVienQuaUsername()['email'] ?></h4>
                </li>
                <li class="list-inline">
                    <h4>SDT : <?= $giaoVien->getAllThongTinGiaoVienQuaUsername()['SDT'] ?></h4>
                </li>
                <li class="list-inline">
                    <h4>Mã Tài Khoản : <?= $giaoVien->getAllThongTinGiaoVienQuaUsername()['maTaiKhoan'] ?></h4>
                </li>
            </ul>

        </div>
    </div>
</div>