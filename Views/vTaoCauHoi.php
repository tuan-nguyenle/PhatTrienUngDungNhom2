<div class="col py-3">
    <form class="row g-3" method="POST">
        <h3 class="text__center col-md-12" style="text-align: center;"><strong>Tạo câu hỏi Trắc Nghiệm môn <?= $giaoVien->getTenMon() ?></strong></h3>
        <div class="col-md-12">
            <label for="txtCauHoi" class="form-label accordion-bod"><strong>Câu hỏi</strong></label>
            <textarea type="text" cols="30" rows="2" class="form-control" name="txtCauHoi" id="txtCauHoi"><?= (isset($_REQUEST['txtCauHoi'])) ? $_REQUEST['txtCauHoi'] : '' ?></textarea>
        </div>
        <div class="col-md-12">
            <label for="txtDA1" class="form-label accordion-bod"><strong>Đáp Án 1</strong></label>
            <textarea type="text" cols="30" rows="2" class="form-control" name="txtDA1" id="txtDA1"><?= (isset($_REQUEST['txtDA1'])) ? $_REQUEST['txtDA1'] : '' ?></textarea>
        </div>
        <div class="col-md-12">
            <label for="txtDA2" class="form-label accordion-bod"><strong>Đáp Án 2</strong></label>
            <textarea type="text" cols="30" rows="2" class="form-control" name="txtDA2" id="txtDA2"><?= (isset($_REQUEST['txtDA2'])) ? $_REQUEST['txtDA2'] : '' ?></textarea>
        </div>
        <div class="col-md-12">
            <label for="txtDA3" class="form-label accordion-bod"><strong>Đáp Án 3</strong></label>
            <textarea type="text" cols="30" rows="2" class="form-control" name="txtDA3" id="txtDA3">
            <?= (isset($_REQUEST['txtDA3'])) ? $_REQUEST['txtDA3'] : '' ?>
            </textarea>
        </div>
        <div class="col-md-12">
            <label for="txtDA4" class="form-label accordion-bod"><strong>Đáp Án 4</strong></label>
            <textarea type="text" cols="30" rows="2" class="form-control" name="txtDA4" id="txtDA4"><?= (isset($_REQUEST['txtDA4'])) ? $_REQUEST['txtDA4'] : '' ?></textarea>
        </div>
        <div class="col-md-12">
            <label for="txtDADung" class="form-label accordion-bod"><strong>Đáp Án Đúng</strong></label>
            <textarea type="text" cols="30" rows="2" class="form-control" name="txtDADung" id="txtDADung"><?= (isset($_REQUEST['txtDADung'])) ? $_REQUEST['txtDADung'] : '' ?></textarea>
        </div>
        <div class="col-md-4">
            <label for="dokho" class="form-label"><strong>Độ khó</strong></label>
            <input type="number" class="form-control" id="dokho" name="txtDoKho">
        </div>
        <div class="col-md-4">
            <label for="chapter" class="form-label"><strong>Chương</strong></label>
            <input type="number" class="form-control" id="chapter" name="txtChuong">
        </div>
        <div class="col-md-4">
            <label for="answerright" class="form-label"><strong>Khối</strong></label>
            <select class="form-select" style="color: black;" aria-label="Default select example" name="txtKhoi">
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
            <button type="submit" class="btn btn-primary btn__taocauhoi" name="btnThemCauHoi">
                Thêm câu hỏi
            </button>
        </div>
    </form>
    <?php
    if (isset($_REQUEST['btnThemCauHoi'])) {
        if ($giaoVien->taoCauHoiTracNghiem(trim($_REQUEST['txtKhoi']), trim($_REQUEST['txtChuong']), trim($_REQUEST['txtCauHoi']), trim($_REQUEST['txtDoKho']), trim($_REQUEST['txtDA1']), trim($_REQUEST['txtDA2']), trim($_REQUEST['txtDA3']), trim($_REQUEST['txtDA4']), trim($_REQUEST['txtDADung']))) {
            echo "<script>alert('Thêm câu hỏi thành công')</script>";
        } else {
            echo "<script>alert('Thêm câu hỏi không thành công')</script>";
        }
    }
    ?>
</div>