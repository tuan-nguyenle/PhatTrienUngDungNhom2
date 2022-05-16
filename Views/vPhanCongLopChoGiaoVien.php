<div class="modal fade" id="phanCong" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST">
                <div class="modal-header" style="background-color: #135dfc">
                    <h5 class="modal-title" id="exampleModalLabel">Phân công giáo viên</h5>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="container-fluid mt-3">
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <div class="row">
                                        <b><span>Tên Giáo Viên : <?= $chiTietGiaoVien['tenGiaoVien'] ?></span></b>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <?php
                            $tatCaLop = $quanTriTruong->getAllLopGiaoVienKhongDay($_REQUEST['maGV'], $_SESSION['maTruong']);
                            if (mysqli_num_rows($tatCaLop) > 0) {
                                while ($dsLop = mysqli_fetch_assoc($tatCaLop)) {
                            ?>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name='themLop[]' value="<?= $dsLop['maLop'] ?>"> <?= $dsLop['tenLop'] ?>
                                    </div>
                            <?php }
                            } ?>
                        </div>
                    </div>
                </div>
                <!--body-->
                <div class="modal-footer">
                    <button type="submit" name="btnPhanCong" class="btn btn-primary">Phân Công</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
if (isset($_REQUEST['btnPhanCong'])) {
    $a = $_REQUEST['maGV'];
    if (!empty($_REQUEST['themLop'])) {
        $themLopDamNhan = $quanTriTruong->phanCongGiaoVien($_REQUEST['maGV'], $_REQUEST['themLop']);
        if ($themLopDamNhan) {
            echo "<script>alert('Thêm Thành Công')</script>";
            echo "<meta http-equiv='refresh' content='0;url=index.php?phanCongGiaoVien'>";
        }
    }
}
?>