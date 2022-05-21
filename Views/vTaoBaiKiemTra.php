<div class='container-fluid'>
    <div class='row flex-nowrap'>
        <?php include_once './Views/vSidebar.php'; ?>
        <div class="col py-3">
            <form class="row g-3" method="GET">
                <h3 class="text__center col-md-12" style="text-align: center;">Tạo bài kiểm tra môn <?= $giaoVien->getTenMon() ?></h3>
                <div class="col-md-4">
                    <label for="txtTenDe" class="form-label">Tên Đề</label>
                    <input type="text" class="form-control" name="txtTenDe" value="<?= isset($_SESSION['txtTenDe']) ? $_SESSION['txtTenDe'] : '' ?>">
                </div>
                <div class="col-md-4">
                    <label for="timeStart" class="form-label">Thời gian mở</label>
                    <input type="datetime-local" class="form-control" name="timeStart" value="<?= isset($_SESSION['timeStart']) ? $_SESSION['timeStart'] : '' ?>">
                </div>
                <div class="col-md-4">
                    <label for="timeEnd" class="form-label">Thời gian kết thúc</label>
                    <input type="datetime-local" class="form-control" name="timeEnd" value="<?= isset($_SESSION['timeEnd']) ? $_SESSION['timeEnd'] : '' ?>">
                </div>
                <div class="col-md-3">
                    <label for="lopKiemTra" class="form-label">Lớp</label>
                    <select id="inputState" class="form-select" name="lopKiemTra">
                        <?php
                        $lopDamNhan = $giaoVien->getAllLopDamNhan();
                        while ($allLop = mysqli_fetch_assoc($lopDamNhan)) {
                            if (isset($_SESSION['lopKiemTra']) and $_SESSION['lopKiemTra'] == $allLop['maLop']) {
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
                            if (isset($_SESSION['hinhThuc']) and $_SESSION['hinhThuc'] == $loaiHinhThuc['maLoaiDe']) {
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
                    <input type="time" class="form-control" id="timeToDo" name="timeToDo" require value="<?= isset($_SESSION['timeToDo']) ? $_SESSION['timeToDo'] : '' ?>">
                </div>
                <div class="col-md-3">
                    <label for="Quantityquestion" class="form-label">Số Lượng Câu Hỏi</label>
                    <input type="number" class="form-control" id="Quantityquestion" disabled value="<?= isset($_SESSION['listCauHoi']) ? sizeof($_SESSION['listCauHoi']) : "0" ?>">
                </div>
                <div class="col-12">
                    <button type="submit" name="btnThemCauHoi" class="btn btn-primary btn__confirm">Thêm câu hỏi</button>
                </div>
                <div class="question mb-2" style="max-height: 600px;overflow-y: scroll;">
                    <?php
                    if (isset($_SESSION['listCauHoi'])) {
                        foreach ($_SESSION['listCauHoi'] as $cauHoi) {
                            $chiTietCauHoi = mysqli_fetch_assoc($giaoVien->selectChiTietCauHoi($cauHoi));
                    ?>
                            <div class="wid-row__full">
                                <div class="container__list-question" style="background-color: #F9F9F9;">
                                    <div class="block-question">
                                        <div class="block-question__heading mb-2"><span><?= "Câu " . $chiTietCauHoi['maCauHoi'] ?></span>
                                        </div>
                                        <ul>
                                            <li>
                                                <p> A : <?= $chiTietCauHoi['dapAnA'] ?></p>
                                            </li>
                                            <li>
                                                <p> B : <?= $chiTietCauHoi['dapAnB'] ?></p>
                                            </li>
                                            <li>
                                                <p> C : <?= $chiTietCauHoi['dapAnC'] ?></p>
                                            </li>
                                            <li>
                                                <p> D : <?= $chiTietCauHoi['dapAnD'] ?></p>
                                            </li>
                                        </ul>
                                        <div class="outcome mt-2" style="color: #8e662e;background-color: #fcefdc;border-color: #fbe8cd;">
                                            <p>Đáp Án Đúng : <?= $chiTietCauHoi['dapAnDung'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="container__list-choice">
                                    <input type="checkbox" id="check1" name="cauHoi[]" value="<?= $chiTietCauHoi['maCauHoi'] ?>">
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
                <?php if (isset($_SESSION['listCauHoi'])) { ?>
                    <div class="create__test-btn">
                        <button name="taoBaiKiemTra" class="btn btn-danger m-1">Xóa Câu Hỏi</button>
                        <button type="button" class="btn btn-success m-1" style="float: right;" data-bs-toggle="modal" data-bs-target="#exampleModal">Tạo bài kiểm tra</button>
                    </div>
                <?php } ?>
            </form>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">

                    <div class="modal-content">
                        <form method="POST">
                            <div class="modal-header">
                                <h4 class="modal-title">Tạo Bài Kiểm Tra cho ?</h4>
                            </div>
                            <div class="modal-body">
                                <p><strong>Thời Gian Mở : <?= isset($_SESSION['timeStart']) ? $_SESSION['timeStart'] : 'Vui Lòng Nhập' ?></strong></p>
                                <p><strong>Thời Gian Đóng : <?= isset($_SESSION['timeEnd']) ? $_SESSION['timeEnd'] : 'Vui Lòng Nhập' ?></strong></p>
                                <p><strong>Thời Gian Làm Bài : <?= isset($_SESSION['timeToDo']) ?  $_SESSION['timeToDo'] : 'Vui Lòng Nhập' ?></strong></p>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger" name="btnTaoBaiKiemTra">Tạo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($_REQUEST['cauHoi'])) {
    foreach ($_SESSION['listCauHoi'] as $key => $values) {
        if (in_array($values, $_REQUEST['cauHoi'])) {
            unset($_SESSION['listCauHoi'][$key]);
        }
    }
    echo "<meta http-equiv='refresh' content='0;url=index.php?taoBaiKiemTra'>";
}

if (isset($_REQUEST['btnTaoBaiKiemTra'])) {
    $taoBaiKiemTra = $giaoVien->insertBaiKiemTraTracNghiem($_SESSION['txtTenDe'], $_SESSION['timeStart'], $_SESSION['timeEnd'], $_SESSION['timeToDo'], sizeof($_SESSION['listCauHoi']), $_SESSION['hinhThuc'], $_SESSION['lopKiemTra'], $_SESSION['listCauHoi']);
    if ($taoBaiKiemTra) {
        unset($_SESSION['listCauHoi']);
        unset($_SESSION['timeStart']);
        unset($_SESSION['txtTenDe']);
        unset($_SESSION['timeEnd']);
        unset($_SESSION['lopKiemTra']);
        unset($_SESSION['hinhThuc']);
        unset($_SESSION['timeToDo']);
        echo "<script>alert('Tạo Bài Kiểm Tra Thành Công')</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php'>";
    } else {
        echo "<script>alert('Tạo Bài Kiểm Tra Thất Bại)</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php?taoBaiKiemTra'>";
    }
}
?>