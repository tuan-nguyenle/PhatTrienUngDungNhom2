<div class='container-fluid'>
    <div class='row flex-nowrap'>
        <?php include_once './Views/vSidebar.php'; ?>
        <div class="col py-3">
            <div class="row m-2" style="float: right;">
                <a href="?thongKeBaiKiemTra=<?= $_GET['dsachlop'] ?>" class="btn btn-danger">Thống kê điểm Bài Kiểm Tra</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã</th>
                        <th scope="col">Họ và tên</th>
                        <th scope="col">Ảnh Đại Diện</th>
                        <th scope="col">Ngày Sinh</th>
                        <th scope="col">Địa Chỉ</th>
                        <th scope="col">Email</th>
                        <th scope="col">SDT</th>
                        <th scope="col">Giới Tính</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $danhSachlop = $giaoVien->getDanhSachLop($_GET['dsachlop']);
                    if (mysqli_num_rows($danhSachlop) > 0) {
                        while ($ds = mysqli_fetch_assoc($danhSachlop)) {
                    ?>
                            <tr>
                                <td><?= $ds['maHocSinh'] ?></td>
                                <td><?= $ds['tenHocSinh'] ?></td>
                                <td><img style="max-width: 50px;max-height: 50px;" src="<?= $ds['anhDaiDien'] ?>" alt="Ảnh Đại Diện"></td>
                                <td><?= $ds['ngaySinh'] ?></td>
                                <td><?= $ds['diaChi'] ?></td>
                                <td><?= $ds['email'] ?></td>
                                <td><?= $ds['SDT'] ?></td>
                                <td><?= ($ds['gioiTinh'] == 1) ? 'Nam' : 'Nữ' ?></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>