<?php if ($_GET['timeStart'] == '' or $_GET['timeEnd'] == '' or $_GET['lopKiemTra'] == '' or $_GET['hinhThuc'] == '' or $_GET['timeToDo'] == '' or $_GET['txtTenDe'] == '') {
    echo "<script>alert('Nhập đầy đủ')</script>";
    echo "<meta http-equiv='refresh' content='0;url=index.php?taoBaiKiemTra'>";
    die();
}
$dsCauHoi = array();
if (!isset($_SESSION['listCauHoi'])) {
    $_SESSION['listCauHoi'] = array();
}
if (isset($_SESSION['listCauHoi'])) {
    $dsCauHoi = array_merge($_SESSION['listCauHoi']);
}
?>
<div class="container-fluid mt-2">
    <div class="row flex-nowrap">
        <div class="col">
            <a href="?taoBaiKiemTra">
                < Quay Về</a>
                    <h3 class="text__center" style="text-align: center;">Chọn câu hỏi môn <?= $giaoVien->getTenMon() ?></h3>
                    <div class="row g-3">
                        <form method="GET" class="row g-3">
                            <input type="hidden" name="btnThemCauHoi">
                            <input type="text" style="display: none;" class="form-control" name="timeStart" value="<?= $_GET['timeStart'] ?>">
                            <input type="text" style="display: none;" class="form-control" name="txtTenDe" value="<?= $_GET['txtTenDe'] ?>">
                            <input type="text" style="display: none;" class="form-control" name="timeEnd" value="<?= $_GET['timeEnd'] ?>">
                            <input type="text" style="display: none;" class="form-control" name="lopKiemTra" value="<?= $_GET['lopKiemTra'] ?>">
                            <input type="text" style="display: none;" class="form-control" name="hinhThuc" value="<?= $_GET['hinhThuc'] ?>">
                            <input type="text" style="display: none;" class="form-control" id="timeToDo" name="timeToDo" value="<?= $_GET['timeToDo'] ?>">
                            <div class="col-md-3">
                                <label for="cbDoKho" class="form-label"><b>Độ Khó</b></label>
                                <select class="form-select" name="cbDoKho">
                                    <option selected value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="chapter" class="form-label"><strong>Chương</strong></label>
                                <input type="number" class="form-control" id="chapter" require name="txtChuong" value="1">
                            </div>
                            <div class="col-md-5">
                                <label for="timeFrom" class="form-label"><b>Thời Gian</b></label>
                                <input type="date" class="form-control" name="thoiGian" id="timeline1" require value="2001-12-25">
                            </div>
                            <div class="col-md-12">
                                <h5><span>
                                        <center>Chọn Câu Hỏi</center>
                                    </span></h5>
                                <button type="submit" name="searchCauHoi" class="col-1 btn btn-primary" style="float: right;" name="btn-fill">
                                    Lọc
                                </button>
                            </div>
                        </form>
                        <form method="POST">
                            <div class="question mb-2" style="max-height: 600px;overflow-y: scroll;">
                                <?php
                                include_once './Controller/phanTrang.php';
                                // Lấy số lượng khi chưa lọc / đã lọc
                                if (empty($_GET['txtChuong']) or empty($_GET['cbDoKho']) or empty($_GET['thoiGian'])) {
                                    $soLuongCauHoi = mysqli_fetch_assoc($giaoVien->getAllSoLuongCauHoiDaDuyet($_GET['lopKiemTra']))['soLuong'];
                                } else {
                                    $soLuongCauHoi = mysqli_fetch_assoc($giaoVien->getSoLuongCauHoiDuyetAndLoc($_GET['lopKiemTra'], $_GET['txtChuong'], $_GET['cbDoKho'], $_GET['thoiGian']))['soLuong'];
                                }

                                // Tạo Setting cho phân trang
                                $config = array(
                                    'current_page'  => isset($_GET['page']) ? $_GET['page'] : 1, // Trang hiện tại
                                    'total_record'  => $soLuongCauHoi,
                                    // Tổng số record
                                    'limit'         => 25, // limit
                                    'link_full'     => 'index.php?txtTenDe=' . $_GET['txtTenDe'] . '&timeStart=' . $_GET['timeStart'] . '&timeEnd=' . $_GET['timeEnd'] . '&lopKiemTra=' . $_GET['lopKiemTra'] . '&hinhThuc=' . $_GET['hinhThuc'] . '&timeToDo=' . $_GET['timeToDo'] . '&btnThemCauHoi=&&page={page}',
                                    // Link full có dạng như sau: domain/com/page/{page}
                                    'link_first'    => 'index.php?txtTenDe=' . $_GET['txtTenDe'] . '&timeStart=' . $_GET['timeStart'] . '&timeEnd=' . $_GET['timeEnd'] . '&lopKiemTra=' . $_GET['lopKiemTra'] . '&hinhThuc=' . $_GET['hinhThuc'] . '&timeToDo=' . $_GET['timeToDo'] . '&btnThemCauHoi=', // Link trang đầu tiên
                                    'range'         => 5 // Số button trang bạn muốn hiển thị 
                                );
                                // lấy số bắt đầu để phân trang
                                $start = ($config['current_page'] - 1) * $config['limit'];
                                // xem các câu hỏi nếu chưa lọc và đã lọc
                                if (empty($_GET['txtChuong']) or empty($_GET['cbDoKho']) or empty($_GET['thoiGian'])) {
                                    $getAllCauHoi = $giaoVien->xemTatCaCacCauhoiDaDuyet($_GET['lopKiemTra'], $start, $config['limit']);
                                } else {
                                    $getAllCauHoi = $giaoVien->xemTatCaCauhoiDaDuyetAndLoc($_GET['lopKiemTra'], $_GET['txtChuong'], $_GET['cbDoKho'], $_GET['thoiGian'], $start, $config['limit']);
                                }
                                $paging = new Pagination($config);
                                while ($listCauHoi = mysqli_fetch_assoc($getAllCauHoi)) {
                                ?>
                                    <div class="wid-row__full">
                                        <div class="container__list-question" style="background-color: #F9F9F9;">
                                            <div class="block-question">
                                                <div class="block-question__heading mb-2"><span><?= "Câu " . $listCauHoi['maCauHoi'] . ": " . $listCauHoi['cauHoi'] ?></span>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <p> A : <?= $listCauHoi['dapAnA'] ?></p>
                                                    </li>
                                                    <li>
                                                        <p> B : <?= $listCauHoi['dapAnB'] ?></p>
                                                    </li>
                                                    <li>
                                                        <p> C : <?= $listCauHoi['dapAnC'] ?></p>
                                                    </li>
                                                    <li>
                                                        <p> D : <?= $listCauHoi['dapAnD'] ?></p>
                                                    </li>
                                                </ul>
                                                <div class="outcome mt-2" style="color: #8e662e;background-color: #fcefdc;border-color: #fbe8cd;">
                                                    <p>Đáp Án Đúng : <?= $listCauHoi['dapAnDung'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container__list-choice">
                                            <input type="checkbox" id="check1" name="listCauHoi[]" value="<?= $listCauHoi['maCauHoi'] ?>" <?php if (in_array($listCauHoi['maCauHoi'], $dsCauHoi)) {
                                                                                                                                                echo 'checked';
                                                                                                                                            } ?>>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="create__test-btn">
                                <button type="submit" class="btn btn-success mb-2" style="float: right;" name="btnThemCauHoiMoi">
                                    Thêm câu hỏi
                                </button>
                            </div>
                        </form>
                    </div>
                    <?php
                    echo $paging->html();
                    ?>
        </div>
    </div>
    <?php
    if (isset($_REQUEST['btnThemCauHoiMoi'])) {
        $_SESSION['ThongTinThemCauHoi'] = array("timeStart" => $_GET['timeStart'], "txtTenDe" => $_GET['txtTenDe'], "timeEnd" => $_GET['timeEnd'], "lopKiemTra" => $_GET['lopKiemTra'], "hinhThuc" => $_GET['hinhThuc'], "timeToDo" => $_GET['timeToDo']);
        if (isset($_REQUEST['listCauHoi'])) {
            $_SESSION['listCauHoi'] = array_unique(array_merge($dsCauHoi, $_REQUEST['listCauHoi']));
        }
        echo "<meta http-equiv='refresh' content='0;url=index.php?taoBaiKiemTra'>";
    }
    ?>
</div>