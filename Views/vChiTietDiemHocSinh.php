<div class='container-fluid'>
    <div class='row flex-nowrap'>
        <?php include_once './Views/vSidebar.php'; ?>
        <div class="col py-3">
            <div class="row">
                <div class="col-3">
                    <form method="GET">
                        <select name="cbMaDe" class="form-select" onchange="location = this.value;">
                            <option value="?thongKeBaiKiemTra=<?= $_REQUEST['thongKeBaiKiemTra'] ?>&&cbMaDe=">Chọn Đề</option>
                            <?php
                            $allMaDe = $giaoVien->getAllDeKiemTraDaRa($_REQUEST['thongKeBaiKiemTra']);
                            // echo "<script>alert('" . $_REQUEST['thongKeBaiKiemTra'] . "')</script>";
                            while ($maDe = mysqli_fetch_assoc($allMaDe)) {
                                if (isset($_REQUEST['cbMaDe']) and $_REQUEST['cbMaDe'] == $maDe['maDe']) {
                            ?>
                                    <option selected value="?thongKeBaiKiemTra=<?= $_REQUEST['thongKeBaiKiemTra'] ?>&&cbMaDe=<?= $maDe['maDe'] ?>"><?= "Đề " . $maDe['maDe'] . ": " . $maDe['tenDe'] . " (" . $maDe['type'] . ")" ?></option>
                                <?php
                                } else {
                                ?>
                                    <option value="?thongKeBaiKiemTra=<?= $_REQUEST['thongKeBaiKiemTra'] ?>&&cbMaDe=<?= $maDe['maDe'] ?>"><?= "Đề " . $maDe['maDe'] . ": " . $maDe['tenDe'] . " (" . $maDe['type'] . ")" ?></option>
                            <?php }
                            } ?>
                        </select>
                    </form>
                </div>
            </div>
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
                    if (isset($_REQUEST['cbMaDe'])) {
                        $hocSinhDaLamBai = $giaoVien->getDiemLopTheoMonVaDe($_GET['thongKeBaiKiemTra'], $_REQUEST['cbMaDe']);
                        $hocSinhChuaLamBai = $giaoVien->getHocSinhChuaLamBai($_GET['thongKeBaiKiemTra'], $_REQUEST['cbMaDe']);
                    }
                    if (isset($_REQUEST['cbMaDe']) and $_REQUEST['cbMaDe'] != null) {

                        while ($listHsinhDaLam = mysqli_fetch_assoc($hocSinhDaLamBai)) {
                    ?>
                            <tr>
                                <td><?= $listHsinhDaLam['tenHocSinh'] ?></td>
                                <td><?= $listHsinhDaLam['maDe'] ?></td>
                                <td><img style="max-width: 50px;max-height: 50px;" src="<?= $listHsinhDaLam['anhDaiDien'] ?>" alt="Ảnh Đại Diện"></td>
                                <td><?= $listHsinhDaLam['diem'] ?></td>
                                <td><?= $listHsinhDaLam['ngayLam'] ?></td>
                                <td><?= $listHsinhDaLam['hanNop'] ?></td>
                                <td><?= $listHsinhDaLam['moTa'] ?></td>
                            </tr>
                        <?php
                        }
                    }
                    if (isset($_REQUEST['cbMaDe']) and $_REQUEST['cbMaDe'] != null) {
                        while ($listHsinhChuaLam = mysqli_fetch_assoc($hocSinhChuaLamBai)) {
                        ?>
                            <tr>
                                <td><?= $listHsinhChuaLam['tenHocSinh'] ?></td>
                                <td></td>
                                <td><img style="max-width: 50px;max-height: 50px;" src="<?= $listHsinhChuaLam['anhDaiDien'] ?>" alt="Ảnh Đại Diện"></td>
                                <td><button class="btn btn-warning chamDiem" data-toggle="modal" data-target="#chamDiem" data-maHocSinh="<?= $listHsinhChuaLam['maHocSinh'] ?>" data-tenHocSinh="<?= $listHsinhChuaLam['tenHocSinh'] ?>" data-monHoc="<?= $_REQUEST['thongKeBaiKiemTra'] ?>" data-maDe="<?= $_REQUEST['cbMaDe'] ?>">Chấm Điểm</button></td>
                                <td></td>
                                <td></td>
                                <td></td>
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
<div class="modal fade" id="chamDiem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="border-radius: 10px">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #103991a0">
                <h5 class="modal-title" id="exampleModalLabel">Chấm Điểm Học Sinh</h5>
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    &times;
                </button>
            </div>
            <form style="line-height: 40px;" method="POST">
                <div class="modal-body">
                    <div class="container-fluid mt-3">
                        <div class="form-group col-sm-12">
                            <input id="maHocSinh" type="hidden" name="maHocSinh">
                            <input id="maDe" type="hidden" name="maDe">
                            <p>Tên Học Sinh : <span id="tenHocSinh"></span></p>
                            <p>Mã Đề : <span id="txtDe"></span></p>
                            <div class="form-group row">
                                <label for="txtScore" class="col-sm-4 col-form-label">Chấm Điểm :</label>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control" min="0" max="10" step="0.01" name="txtScore">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-bg-danger" data-dismiss="modal" value="Close">
                    <button type="submit" name="btnChamDiem" class="btn btn-primary">Lưu</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_REQUEST['btnChamDiem']) and isset($_REQUEST['txtScore'])) {
    $txtDiem = $giaoVien->chamDiemBaiKiemTra($_REQUEST['maHocSinh'], $_REQUEST['maDe'], $_REQUEST['txtScore']);
    if ($txtDiem) {
        echo "<script>alert('Đã Lưu')</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php?thongKeBaiKiemTra=" . $_REQUEST['thongKeBaiKiemTra'] . "&&cbMaDe=" . $_REQUEST['maDe'] . "'>";
    } else {
        echo "<script>alert('cập nhât thất bại')</script>";
    }
}
?>