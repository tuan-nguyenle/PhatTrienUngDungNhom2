<div class='container-fluid'>
    <div class='row flex-nowrap'>
        <?php include_once './Views/vSidebar.php'; ?>
        <div class="col py-3">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Họ và tên</th>
                        <th scope="col">Mã Đề</th>
                        <th scope="col">Ảnh Đại Diện</th>
                        <th scope="col">Điểm</th>
                        <th scope="col">Thời Gian Bắt Đầu</th>
                        <th scope="col">Thời Gian Kết Thúc</th>
                        <th scope="col">Loại Bài</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $diemTheoMon = $giaoVien->getDiemLopTheoMon($_GET['thongKeBaiKiemTra']);
                    if (mysqli_num_rows($diemTheoMon) > 0) {
                        while ($diemCuaLop = mysqli_fetch_assoc($diemTheoMon)) {
                    ?>
                            <tr>
                                <td><?= $diemCuaLop['tenHocSinh'] ?></td>
                                <td><?= $diemCuaLop['maDe'] ?></td>
                                <td><img style="max-width: 50px;max-height: 50px;" src="<?= $diemCuaLop['anhDaiDien'] ?>" alt="Ảnh Đại Diện"></td>
                                <td><?= $diemCuaLop['diem'] ?></td>
                                <td><?= $diemCuaLop['ngayLam'] ?></td>
                                <td><?= $diemCuaLop['hanNop'] ?></td>
                                <td><?= $diemCuaLop['moTa'] ?></td>
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