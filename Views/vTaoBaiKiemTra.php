<div class="col py-3">
    <form class="row g-3">
        <h3 class="text__center col-md-12" style="text-align: center;">Tạo bài kiểm tra môn <?= $giaoVien->getTenMon() ?></h3>
        <div class="col-md-6">
            <label for="inputTimel4" class="form-label">Thời gian mở</label>
            <input type="datetime-local" class="form-control" id="inputTimel4" name="txtThoiGianLam">
        </div>
        <div class="col-md-6">
            <label for="inputEndTime14" class="form-label">Thời gian kết thúc</label>
            <input type="datetime-local" class="form-control" id="inputEndTime14" name="txtThoiGianKetThuc">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Chọn hình thức kiểm tra</label>
            <select id="inputState" class="form-select" name="txtHinhThuc">
                <?php
                $LoaiDe = $truong->getAllLoaiDe();
                if ($LoaiDe) {
                    if (mysqli_num_rows($LoaiDe) > 0) {
                        while ($row = mysqli_fetch_assoc($LoaiDe)) {
                            echo "<option value='" . $row['maLoaiDe'] . "'>" . $row['moTa'] . "</option><br>";
                        }
                    }
                }
                ?>
            </select>
        </div>

        <div class="col-md-4">
            <label for="Quantityquestion" class="form-label">Số Lượng Câu Hỏi</label>
            <input type="number" class="form-control" id="Quantityquestion">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary btn__confirm">Thêm câu hỏi</button>
        </div>
    </form>
</div>