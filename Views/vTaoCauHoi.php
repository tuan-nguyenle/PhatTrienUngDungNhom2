<div class='container-fluid'>
    <div class='row flex-nowrap'>
        <?php include_once './Views/vSidebar.php'; ?>
        <div class="col py-3">
            <form class="row g-3" method="POST">
                <h3 class="text__center col-md-12" style="text-align: center;"><strong>Tạo câu hỏi Trắc Nghiệm môn <?= $giaoVien->getTenMon() ?></strong></h3>
                <div class="col-md-12">
                    <label for="txtCauHoi" class="form-label accordion-bod"><strong>Câu hỏi</strong></label>
                    <textarea type="text" cols="30" rows="2" class="form-control" require name="txtCauHoi" id="txtCauHoi"><?= (isset($_REQUEST['txtCauHoi'])) ? $_REQUEST['txtCauHoi'] : '' ?></textarea>
                </div>
                <div class="col-md-12">
                    <label for="txtDA1" class="form-label accordion-bod"><strong>Đáp Án 1</strong></label>
                    <textarea type="text" cols="30" rows="2" class="form-control" require name="txtDA1" id="txtDA1"><?= (isset($_REQUEST['txtDA1'])) ? $_REQUEST['txtDA1'] : '' ?></textarea>
                </div>
                <div class="col-md-12">
                    <label for="txtDA2" class="form-label accordion-bod"><strong>Đáp Án 2</strong></label>
                    <textarea type="text" cols="30" rows="2" class="form-control" require name="txtDA2" id="txtDA2"><?= (isset($_REQUEST['txtDA2'])) ? $_REQUEST['txtDA2'] : '' ?></textarea>
                </div>
                <div class="col-md-12">
                    <label for="txtDA3" class="form-label accordion-bod"><strong>Đáp Án 3</strong></label>
                    <textarea type="text" cols="30" rows="2" class="form-control" require name="txtDA3" id="txtDA3">
            <?= (isset($_REQUEST['txtDA3'])) ? $_REQUEST['txtDA3'] : '' ?>
            </textarea>
                </div>
                <div class="col-md-12">
                    <label for="txtDA4" class="form-label accordion-bod"><strong>Đáp Án 4</strong></label>
                    <textarea type="text" cols="30" rows="2" class="form-control" require name="txtDA4" id="txtDA4"><?= (isset($_REQUEST['txtDA4'])) ? $_REQUEST['txtDA4'] : '' ?></textarea>
                </div>
                <div class="col-md-12">
                    <label for="txtDADung" class="form-label accordion-bod"><strong>Đáp Án Đúng</strong></label>
                    <textarea type="text" cols="30" rows="2" class="form-control" require name="txtDADung" id="txtDADung"><?= (isset($_REQUEST['txtDADung'])) ? $_REQUEST['txtDADung'] : '' ?></textarea>
                </div>
                <div class="col-md-4">
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
                    <input type="number" class="form-control" id="chapter" require name="txtChuong">
                </div>
                <div class="col-md-4">
                    <label for="answerright" class="form-label"><strong>Khối</strong></label>
                    <select class="form-select" style="color: black;" aria-label="Default select example" require name="txtKhoi">
                        <?php
                        $thongTinKhoi = $truong->getAllKhoi();
                        if ($thongTinKhoi) {
                            if (mysqli_num_rows($thongTinKhoi) > 0) {
                                while ($row = mysqli_fetch_assoc($thongTinKhoi)) {
                                    echo "<option value='" . $row['maKhoi'] . "'>" . $row['moTa'] . "</option><br>";
                                }
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn__taocauhoi" require name="btnThemCauHoi">
                        Thêm câu hỏi
                    </button>
                </div>
            </form>
            <?php
            if (isset($_REQUEST['btnThemCauHoi'])) {
                if ($giaoVien->taoCauHoiTracNghiem($_REQUEST['txtKhoi'], $_REQUEST['txtChuong'], strip_tags($_REQUEST['txtCauHoi'], '<strong><i><img>'), $_REQUEST['cbDoKho'], strip_tags($_REQUEST['txtDA1'], '<strong><i><img>'), strip_tags($_REQUEST['txtDA2'], '<strong><i><img>'), strip_tags($_REQUEST['txtDA3'], '<strong><i><img>'), strip_tags($_REQUEST['txtDA4'], '<strong><i><img>'), strip_tags($_REQUEST['txtDADung'], '<strong><i><img>'))) {
                    echo "<script>alert('Thêm câu hỏi thành công')</script>";
                } else {
                    echo "<script>alert('Thêm câu hỏi không thành công')</script>";
                }
            }
            ?>
        </div>
    </div>
</div>