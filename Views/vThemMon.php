<div class="modal fade" id="them" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="border-radius: 10px">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #103991a0">
                <h5 class="modal-title" id="exampleModalLabel">Thêm môn học mới</h5>
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    &times;
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid mt-3">
                    <form style="line-height: 40px;" method="POST">
                        <div class="form-group col-sm-6">
                            <label for="monHoc">Tên môn học:</label>
                            <input type="hidden" name="maKhoi" value="<?= $_REQUEST['Khoi'] ?>">
                            <select class="form-select" aria-label="Default select example" name="monHoc">
                                <?php
                                $themMon = $quanTriThanhPho->getMonChuaDay($_REQUEST['Khoi']);
                                if ($themMon) {
                                    if (mysqli_num_rows($themMon) > 0) {
                                        while ($row = mysqli_fetch_assoc($themMon)) {
                                            echo "<option value=" . $row['maMonHoc'] . ">" . $row['tenMonHoc'] . "</option>";
                                        }
                                    }
                                }
                                ?>
                            </select>
                            <!--  -->
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-bg-danger" data-dismiss="modal" value="Close">
                            <button type="submit" name="addMonHoc" class="btn btn-primary">Thêm Môn</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<?php
if (isset($_POST['addMonHoc']) && !empty($_REQUEST['monHoc'])) {
    $themMoiMonHoc = $quanTriThanhPho->themMonHocMoiChoKhoi($_REQUEST['Khoi'], $_REQUEST['monHoc']);
    if ($themMoiMonHoc) {
        echo "<script>alert('cập nhât thành công')</script>";
        echo "<meta http-equiv='refresh' content='0;url=quanTriThanhPho.php?quanLiMonHoc&&Khoi=" . $_REQUEST['Khoi'] . "'>";
    } else {
        echo "<script>alert('cập nhât thất bại')</script>";
    }
}
?>