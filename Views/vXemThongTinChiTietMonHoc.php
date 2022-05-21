<div class="thongtinmonhoc" style="min-height: 400px;">
    <div class="container">
        <form class="row g-3">
            <div class="col-md-2">
                <label for="inputState" class="form-label">Chọn Môn Học</label>
                <select id="inputState" class="form-select" name="mon" onchange="location = this.value;">
                    <?php
                    $allMonDangHoc = $hocSinh->getCacMonDangHoc();
                    if ($allMonDangHoc) {
                        if (mysqli_num_rows($allMonDangHoc) > 0) {
                            if (!isset($_REQUEST['maMonHoc'])) {
                                echo "<option selected'>Chọn Môn Học</option>";
                            }
                            while ($row = mysqli_fetch_assoc($allMonDangHoc)) {
                                if ($_REQUEST['maMonHoc'] == $row['maMonHoc']) {
                                    echo "<option selected value='?xemThongTinMonHoc&&maMonHoc=" . $row['maMonHoc'] . "'>" . $row['tenMonHoc'] . "</option>";
                                } else {
                                    echo "<option value='?xemThongTinMonHoc&&maMonHoc=" . $row['maMonHoc'] . "'>" . $row['tenMonHoc'] . "</option>";
                                }
                            }
                        }
                    }
                    ?>
                </select>
            </div>
        </form>

        </br>
        <div class="row">
            <div class="col-6">
                <h5 style="color:#C00">Bài Kiểm Tra Tự Luận</h5>

                <ul class="list--info">
                    <?php
                    if (isset($_REQUEST['maMonHoc'])) {
                        $baiKiemTraTuLuan = $hocSinh->getCacBaiKiemTraTuLuan($_REQUEST['maMonHoc']);
                        if ($baiKiemTraTuLuan) {
                            if (mysqli_num_rows($baiKiemTraTuLuan) > 0) {
                                while ($row = mysqli_fetch_assoc($baiKiemTraTuLuan)) {
                                    if ($_REQUEST['maMonHoc']) {
                    ?>
                                        <li><a href="?nopbai&&maDe=<?= $row['maDe'] ?>"> <?= $row['tenDe'] ?>/<?= $row['moTa'] ?></a></li>
                    <?php
                                    }
                                }
                            } else {
                                echo 'Không có bài tập';
                            }
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
        </br>
        <div class="row">
            <div class="col-6">
                <h5 style="color:#C00">Bài Kiểm Tra Trắc Nghiệm </h5>

                <ul class="list--info">
                    <?php
                    if (isset($_REQUEST['maMonHoc'])) {
                        $baiKiemTraTracNghiem = $hocSinh->getCacBaiKiemTraTracNghiem($_REQUEST['maMonHoc']);
                        if ($baiKiemTraTracNghiem) {
                            if (mysqli_num_rows($baiKiemTraTracNghiem) > 0) {
                                while ($row = mysqli_fetch_assoc($baiKiemTraTracNghiem)) {
                                    if ($_REQUEST['maMonHoc']) {
                    ?>
                                        <li><a href="?lamBaiTracNghiem&&maDe=<?= $row['maDe'] ?>"> <?= $row['tenDe'] ?>/<?= $row['moTa'] ?></a></li>
                    <?php
                                    }
                                }
                            } else {
                                echo 'Không có bài tập';
                            }
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>