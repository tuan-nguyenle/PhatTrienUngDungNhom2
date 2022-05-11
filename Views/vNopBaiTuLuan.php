<?php
$de = $hocSinh->getThongTinBaiKiemTraTuLuan($_REQUEST['maDe']);
if ($de) {
    if (mysqli_num_rows($de) > 0) {
        $thongTinDe = mysqli_fetch_assoc($de);
    }
}
?>
<div class="container">
    <div class="subject " style="text-align: center">
        <p class="h3" style="color:#C00">Đề Kiểm Tra môn : <?= $thongTinDe['tenMonHoc'] ?> <?= $thongTinDe['moTa'] ?></p>
    </div>
    <div class="row">
        <div class="col-12">
            <h4 style="color:#C00">Nộp bài tại đây</h4>
            <form action="" method="post" enctype="multipart/form-data" name="nopBai" id="form1">
                <table class="table table-bordered">
                    <tr style="text-align:left">
                        <td scope="col-2">Đề Kiểm Tra</td>
                        <td scope="col-10"><?= $thongTinDe['cauHoi'] ?></td>
                    </tr>
                    <tr style="text-align:left">
                        <td scope="col-2">Mã Đề</td>
                        <td scope="col-10"><?= $thongTinDe['maDe'] ?></td>
                    </tr>
                    <tr style="text-align:left">
                        <td scope="col-2">Thời Gian Làm Bài</td>
                        <td scope="col-10"><?= $thongTinDe['ThoiGianLam'] ?></td>
                    </tr>
                    <tr style="text-align:left">
                        <td scope="col-2">Ngày Làm</td>
                        <td scope="col-10"><?= $thongTinDe['ngayLam'] ?></td>
                    </tr>
                    <tr style="text-align:left">
                        <td scope="col-2">Hạn chót</td>
                        <td scope="col-10"><?= $thongTinDe['hanNop'] ?></td>
                    </tr>
                    <?php
                    $fileDaNop = $hocSinh->xemBaiDaNop($_REQUEST['maDe'], $hocSinh->getMaHocSinh());
                    if ($fileDaNop) {
                        if (mysqli_num_rows($fileDaNop) > 0) {
                            $thongTinFile = mysqli_fetch_assoc($fileDaNop);
                    ?>
                            <tr style="text-align:left">
                                <td scope="col-2">File</td>
                                <td scope="col-10">
                                    <a style="text-decoration: none;" href="<?= $thongTinFile['duongDan'] ?>">
                                        <?= substr($thongTinFile['duongDan'], 5) ?>
                                    </a>
                                </td>
                            </tr>
                            <tr style="text-align:left">
                                <td scope="col-2">Tình Trạng</td>
                                <td scope="col-10"><?= $thongTinFile['tinhTrangNop'] ?>
                                </td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                    </br>
                </table>
                <div class="row">
                    <div class="col-6">
                        <label for="fileNopBai" class="form-label">File Nộp Bài</label>
                        <input type="file" name="fileNopBai" class="form-control" id="fileNopBai">
                        <label for="txtTenMoi">Lưu với tên :</label>
                        <input type="text" name="txtTenMoi" class="form-control" placeholder="Số Thứ Tự _ Mã Số Học Sinh _ Tên Học Sinh (Viết liền không dấu)">
                        <input type="submit" class="btn btn-outline-dark btn__confirm" name="nopBai" style="float: left;" value="Nộp bài">
                    </div>
                </div>
            </form>
            <p>&nbsp;</p>
        </div>
    </div>
</div>
<?php
if (isset($_REQUEST['nopBai'])) {
    if ($_FILES['fileNopBai']['type'] == 'application/pdf') {
        if ($_FILES['fileNopBai']['size'] <= 10 * 1024 * 1024) {
            // tinh thoi gian
            $dt1 = new DateTime(date('Y-m-d H:i:s'));
            $dt2 = new DateTime($thongTinDe['hanNop']);
            if ($dt1 > $dt2) {
                $tinhTrang = $dt1->diff($dt2)->format('Nộp muộn %y Năm, %m Tháng, %d ngày, %h Giờ, %i Phút, %s Giây');
            } else {
                $tinhTrang = $dt1->diff($dt2)->format('Nộp sớm %y Năm, %m Tháng, %d ngày, %h hours, %i Phút, %s Giây');
            }
            // kiem tra bai nop
            if (preg_match('/^[0-9]{1,}_+[0-9]{5,}_+[A-Za-z]{6,}/', $_REQUEST['txtTenMoi'])) {
                // tao noi nop bai
                $newLocation = "File/" . $_REQUEST['txtTenMoi'] . "_MaDe" . $thongTinDe['maDe'] . str_replace("/", ".", strstr($_FILES['fileNopBai']['type'], '/'));
                if (file_exists($newLocation)) {
                    $hocSinh->capNhapDuongDan($thongTinDe['maDe'], $newLocation, $tinhTrang, $hocSinh->getMaHocSinh());
                    echo "<script>alert('$tinhTrang')</script>";
                    echo "<script>alert('Cập Nhập file mới thành công')</script>";
                } else {
                    if (move_uploaded_file($_FILES['fileNopBai']['tmp_name'], $newLocation)) {
                        echo "<script>alert('$tinhTrang')</script>";
                        $hocSinh->nopBaiKiemTraTuLuan($thongTinDe['maDe'], $newLocation, $tinhTrang, $hocSinh->getMaHocSinh());
                        echo "<script>alert('Đã Nộp Thành Công')</script>";
                        echo "<meta http-equiv='refresh' content='0;url=index.php?nopbai&&maDe=" . $_REQUEST['maDe'] . "'>";
                    } else {
                        echo "<script>alert('Nộp Thất bại')</script>";
                    }
                }
            } else {
                echo "<script>alert('Đặt Tên Không Đúng Định Dạng')</script>";
            }
        } else {
            echo "<script>alert('Dung lượng phải < 10 MB')</script>";
        }
    } else {
        echo "<script>alert('Chỉ được upload file PDF')</script>";
    }
}
?>