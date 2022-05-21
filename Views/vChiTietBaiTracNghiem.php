<?php
$de = $hocSinh->getThongTinBaiKiemTraTracNghiem($_REQUEST['maDe']);
$diem = $hocSinh->xemDiemTracNghiem($_REQUEST['maDe']);

if ($de) {
    if (mysqli_num_rows($de) > 0) {
        $thongTinDe = mysqli_fetch_assoc($de);
    }
}
?>
<div class="container">
    <div class="subject " style="text-align: center">
        <p class="h3" style="color:#C00">Kiểm Tra Trắc Nghiệm môn: <?= $thongTinDe['tenMonHoc'] ?> <?= $thongTinDe['moTa'] ?></p>
    </div>
    <div class="row">
        <div class="col-12">
            <h4 style="color:#C00">Thông Tin Bài Kiểm Tra</h4>
            <table class="table table-bordered">
                <tr style="text-align:left">
                    <td scope="col-2">Mã Đề</td>
                    <td scope="col-10"><?= $thongTinDe['maDe'] ?></td>
                </tr>
                <tr style="text-align:left">
                    <td scope="col-2">Thời Gian Mở</td>
                    <td scope="col-10"><?= $thongTinDe['ngayLam'] ?></td>
                </tr>
                <tr style="text-align:left">
                    <td scope="col-2">Thời Gian Kết thúc</td>
                    <td scope="col-10"><?= $thongTinDe['hanNop'] ?></td>
                </tr>
                <tr style="text-align:left">
                    <td scope="col-2">Thời Gian Làm Bài</td>
                    <td scope="col-10"><?= $thongTinDe['ThoiGianLam'] ?></td>
                </tr>
                <tr style="text-align:left">
                    <td scope="col-2">Điểm</td>
                    <td scope="col-10"><?= (mysqli_num_rows($diem) > 0) ? mysqli_fetch_assoc($diem)['diem'] : 'Chưa Làm' ?></td>
                </tr>
                </br>
            </table>
            <form method="POST">
                <div class="row">
                    <div class="col-12 justify-content-center text-center">
                        <?php
                        $dt1 = new DateTime(date('Y-m-d H:i:s'));
                        $dt2 = new DateTime($thongTinDe['hanNop']);
                        $dt3 = new DateTime($thongTinDe['ngayLam']);
                        if ($dt1 > $dt2) {
                        ?>
                            <button class="btn btn-primary m-2" name="btnLamBai" disabled>Bài Tập Quá Hạn Nộp</button>
                        <?php
                        } elseif ($dt1 < $dt3) {
                        ?>
                            <button class="btn btn-primary m-2" name="btnLamBai" disabled>Chưa Đến Thời Gian</button>
                        <?php
                        } else {
                        ?>
                            <input type="submit" class="btn btn-primary m-2" name="btnLamBai" value="Làm Bài">
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>