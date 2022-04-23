<div class='col py-3'>
    <div class="card ">
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
</div>