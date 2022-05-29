<div class="container-fluid mt-2">
    <div class="row flex-nowrap">
        <?php include_once './Views/vSidebar.php'; ?>
        <div class="col">
            <form class="row g-3" method="POST">
                <h3 class="text__center" style="text-align: center;">Duyệt Câu Hỏi Môn <?= $giaoVien->getTenMon() ?></h3>
                <div class="col-md-2">
                    <label for="cbDoKho" class="form-label"><b>Độ Khó</b></label>
                    <select class="form-select" name="cbDoKho">
                        <option selected value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="chapter" class="form-label"><strong>Chương</strong></label>
                    <input type="number" class="form-control" id="chapter" require name="txtChuong" value="1">
                </div>
                <div class="col-md-3">
                    <label for="selectClass" class="form-label"><b>Khối Lớp</b></label>
                    <select id="selectClass" class="form-select" name="cbKhoi" require>
                        <option selected value="1">Khối 6</option>
                        <option value="2">Khối 7</option>
                        <option value="3">Khối 8</option>
                        <option value="4">Khối 9</option>
                    </select>
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
                <div class="question mb-2" style="max-height: 600px;overflow-y: scroll;">
                    <?php
                    // $maKhoi, $chuong, $doKho, $date
                    include_once './Controller/phanTrang.php';
                    if (empty($_POST['cbDoKho']) or empty($_POST['txtChuong']) or empty($_POST['thoiGian'])) {
                        $soLuongCauHoi = mysqli_fetch_assoc($giaoVien->getAllSoLuongCauHoiChuaDuyet())['soLuong'];
                    } else {
                        $soLuongCauHoi = mysqli_fetch_assoc($giaoVien->getSoLuongCauHoiChuaDuyet($_POST['cbKhoi'], $_POST['txtChuong'], $_POST['cbDoKho'], $_POST['thoiGian']))['soLuong'];
                    }
                    $config = array(
                        'current_page'  => isset($_GET['page']) ? $_GET['page'] : 1, // Trang hiện tại
                        'total_record'  => $soLuongCauHoi,
                        // Tổng số record
                        'limit'         => 25, // limit
                        'link_full'     => 'index.php?duyetCauHoi&&page={page}', // Link full có dạng như sau: domain/com/page/{page}
                        'link_first'    => 'index.php?duyetCauHoi', // Link trang đầu tiên
                        'range'         => 5 // Số button trang bạn muốn hiển thị 
                    );
                    $start = ($config['current_page'] - 1) * $config['limit'];
                    if (empty($_POST['cbDoKho']) or empty($_POST['cbKhoi']) or empty($_POST['txtChuong']) or empty($_POST['thoiGian'])) {
                        $getAllCauHoi = $giaoVien->xemTatCaCacCauhoiChuaDuyet($start, $config['limit']);
                    } else {
                        $getAllCauHoi = $giaoVien->xemTatCaCauhoiChuaDuyet($_POST['cbKhoi'], $_POST['txtChuong'], $_POST['cbDoKho'], $_POST['thoiGian'], $start, $config['limit']);
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
                                <input type="checkbox" id="check1" name="listCauHoi[]" value="<?= $listCauHoi['maCauHoi'] ?>">
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="create__test-btn">
                    <button type="submit" class="btn btn-success" style="float: right;" name="btnDuyetCauHoi">
                        Duyệt câu hỏi
                    </button>
                </div>
            </form>
            <?php
            echo $paging->html();
            ?>
        </div>
    </div>
    <?php
    if (isset($_REQUEST['btnDuyetCauHoi'])) {
        $duyetCauHoi = $giaoVien->duyetCauHoi($_REQUEST['listCauHoi']);
        if ($duyetCauHoi) {
            echo "<script>alert('Duyệt thành công')</script>";
            echo "<meta http-equiv='refresh' content='0;url=index.php?index'>";
        } else {
            echo "<script>alert('Duyệt Thất Bại)</script>";
            echo "<meta http-equiv='refresh' content='0;url=index.php?duyetCauHoi'>";
        }
    }
    ?>
</div>