<div class='container-fluid'>
    <div class='row flex-nowrap'>
        <?php include_once './Views/vSidebar.php'; ?>
        <div class="col py-3">
            <form class="row g-3" method="POST">
                <h3 class="text__center col-md-12" style="text-align: center;">Tạo bài kiểm tra tự luận môn <?= $giaoVien->getTenMon() ?></h3>
                <div class="col-md-6">
                    <label for="timeStart" class="form-label">Thời gian mở</label>
                    <input type="datetime-local" class="form-control" name="timeStart" value="<?= isset($_REQUEST['timeStart']) ? $_REQUEST['timeStart'] : '' ?>">
                </div>
                <div class="col-md-6">
                    <label for="timeEnd" class="form-label">Thời gian kết thúc</label>
                    <input type="datetime-local" class="form-control" name="timeEnd" value="<?= isset($_REQUEST['timeEnd']) ? $_REQUEST['timeEnd'] : '' ?>">
                </div>
                <div class="col-md-3">
                    <label for="txtTenDe" class="form-label">Tên Đề</label>
                    <input type="text" class="form-control" name="txtTenDe" value="<?= isset($_REQUEST['txtTenDe']) ? $_REQUEST['txtTenDe'] : '' ?>">
                </div>
                <div class="col-md-3">
                    <label for="lopKiemTra" class="form-label">Lớp</label>
                    <select id="inputState" class="form-select" name="lopKiemTra">
                        <?php
                        $lopDamNhan = $giaoVien->getAllLopDamNhan();
                        while ($allLop = mysqli_fetch_assoc($lopDamNhan)) {
                            if (isset($_REQUEST['lopKiemTra']) and $_REQUEST['lopKiemTra'] == $allLop['maLop']) {
                        ?>
                                <option selected value="<?= $allLop['maLop'] ?>"><?= $allLop['tenLop'] ?></option>
                            <?php
                            } else {
                            ?>
                                <option value="<?= $allLop['maLop'] ?>"><?= $allLop['tenLop'] ?></option>
                        <?php }
                        } ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="hinhThuc" class="form-label">Chọn hình thức kiểm tra</label>
                    <select id="inputState" class="form-select" name="hinhThuc">
                        <?php
                        $hinhThucKiemTra = $giaoVien->getAllHinhThuc();
                        while ($loaiHinhThuc = mysqli_fetch_assoc($hinhThucKiemTra)) {
                            if (isset($_REQUEST['hinhThuc']) and $_REQUEST['hinhThuc'] == $loaiHinhThuc['maLoaiDe']) {
                        ?>
                                <option selected value="<?= $loaiHinhThuc['maLoaiDe'] ?>"><?= $loaiHinhThuc['moTa'] ?></option>
                            <?php
                            } else {
                            ?>
                                <option value="<?= $loaiHinhThuc['maLoaiDe'] ?>"><?= $loaiHinhThuc['moTa'] ?></option>
                        <?php }
                        } ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="timeToDo" class="form-label">Thời gian làm bài</label>
                    <input type="time" class="form-control" id="timeToDo" name="timeToDo" require value="<?= isset($_REQUEST['timeToDo']) ? $_REQUEST['timeToDo'] : '' ?>">
                </div>
                <div class="col-md-12">
                    <label for="txtCauHoiTuLuan">Câu hỏi</label>
                    <textarea type="text" class="form-control" name="txtCauHoiTuLuan" id="txtCauHoiTuLuan">
                    </textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-success" style="float: right; margin-bottom: 32px;" name="btnTaoBaiKiemTra">Tạo bài kiểm tra</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
if (isset($_REQUEST['btnTaoBaiKiemTra'])) {
    if (isset($_REQUEST['txtCauHoiTuLuan']) and isset($_REQUEST['txtTenDe'])) {
        $baiTuLuan = $giaoVien->insertBaiKiemTraTuLuan($_REQUEST['txtTenDe'], $_REQUEST['timeStart'], $_REQUEST['timeEnd'],  $_REQUEST['timeToDo'], $_REQUEST['hinhThuc'], $_REQUEST['lopKiemTra'], $_REQUEST['txtCauHoiTuLuan']);
        if ($baiTuLuan) {
            echo "<script>alert('Tạo bài kiểm tra thành công')</script>";
            echo "<meta http-equiv='refresh' content='0;url=index.php?taoBaiKiemTraTuLuan'>";
        } else {
            echo "<script>alert('Tạo bài kiểm tra thất bại')</script>";
        }
    } else {
        echo "<script>alert('Nhập Đầy Đủ Thông tin')</script>";
    }
}
?>