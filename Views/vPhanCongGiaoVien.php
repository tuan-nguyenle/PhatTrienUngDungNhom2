<div id="main" class="container">
    <div class="subject" style="text-align: center">
        <p class="h3">Phân công giáo viên</p>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Mã Giáo Viên</th>
                <th scope="col">Họ và tên</th>
                <th scope="col">Email</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Bộ Môn</th>
                <th scope="col">Tổ Trưởng</th>
                <th scope="col">Tùy Chọn</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $giaoVien = $quanTriTruong->getAllGiaoVienTheoTruong($_SESSION['maTruong']);
            if (mysqli_num_rows($giaoVien) > 0) {
                while ($info = mysqli_fetch_assoc($giaoVien)) {
            ?>
                    <tr>
                        <th scope="row"><?= $info['maGiaoVien'] ?></th>
                        <td><?= $info['tenGiaoVien'] ?></td>
                        <td><?= $info['email'] ?></td>
                        <td><?= $info['diaChi'] ?></td>
                        <td><?= $info['tenMonHoc'] ?></td>
                        <td><?= ($info['IDChucVu'] == 1) ? "<i title='Tổ Trưởng' class='fa fa-check'></i>" : '' ?></td>
                        <td>
                            <a href="index.php?phanCongGiaoVien&&phanLopMoi&&maGV=<?= $info['maGiaoVien'] ?>" type="button" class="btn btn-info phanCong">Thêm Lớp</a>
                        </td>
                        <td>
                            <a href="index.php?phanCongGiaoVien&&lopDamNhan&&maGV=<?= $info['maGiaoVien'] ?>" type="button" class="btn btn-warning phanCong">Đảm Nhận</a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>

<?php if (isset($_REQUEST['phanLopMoi']) and !empty($_REQUEST['maGV'])) { ?>
    <script>
        $(function() {
            $('#phanCong').modal('show');
        });
    </script>
<?php
    $chiTietGiaoVien = mysqli_fetch_assoc($quanTriTruong->getChiTietGiaoVienTheoTruong($_REQUEST['maGV'], $_SESSION['maTruong']));
    include_once './Views/vPhanCongLopChoGiaoVien.php';
} ?>

<?php if (isset($_REQUEST['lopDamNhan']) and !empty($_REQUEST['maGV'])) { ?>
    <script>
        $(function() {
            $('#damNhan').modal('show');
        });
    </script>
<?php
    $chiTietGiaoVien = mysqli_fetch_assoc($quanTriTruong->getChiTietGiaoVienTheoTruong($_REQUEST['maGV'], $_SESSION['maTruong']));
    include_once './Views/vLopDamNhan.php';
} ?>