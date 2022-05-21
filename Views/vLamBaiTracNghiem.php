<?php
$de = $hocSinh->getThongTinBaiKiemTraTracNghiem($_REQUEST['maDe']);
$chiTietDe = $hocSinh->getChiTietDeKiemTraTracNghiem($_REQUEST['maDe']);
if (mysqli_num_rows($de) > 0) {
    $de = mysqli_fetch_assoc($de);
}
$soLuongCauHoi = mysqli_num_rows($chiTietDe);
?>
<div class="container mt-2">
    <form method="POST" action="">
        <div class="subject">
            <p class="h3" style="color:#C00; text-align: center">Đề Kiểm Tra Trắc Nghiệm môn <?= $de['tenMonHoc'] ?> <?= $de['moTa'] ?></p>
            <p>&nbsp;</p>
            <div class="sider-bar">
                <aside style="display: block; width: 24%; background-color:#ADD6AB; margin-left: 67%; float: right; position:fixed">
                    <div class="head-side" style="padding-left: 20px; padding-top:30px;">
                        <center>
                            <p>Thời gian làm bài còn lại</p>
                            <p>07:52 s</p>
                        </center>
                    </div>
                    <div class="button m-2" align="center">
                        <?php
                        for ($i = 1; $i <= $soLuongCauHoi; $i++) {
                        ?>
                            <button type="button" class="btn btn-primary" style="width:25px; height:30px; padding:2px;margin: 2px;"><a href="#C<?= $i ?>" style="color:#FFF; text-decoration: none"><?= $i ?></a></button>
                        <?php
                        }
                        ?>
                    </div>
                </aside>
            </div>
        </div>
        <?php
        $i = 1;
        while ($dsCauHoi = mysqli_fetch_assoc($chiTietDe)) {
        ?>
            <div id="C<?= $i ?>" class="mb-2 mt-2" style="display: block; background-color:#CCC; width: 1000px; padding-left:20px">
                <p>
                    <b>Câu <?= $i ?></b>
                    <?= $dsCauHoi['cauHoi'] ?>
                </p>
                <input type="hidden" name="questionID<?= $i ?>">
                <div class="panel panel-default cauHoi" style="padding-bottom: 1px;">
                    <div class="panel-body">
                        <ul>
                            <li style="list-style: none;">
                                <input type="radio" name="dapAn<?= $i ?>" value="<?= $dsCauHoi['dapAnA'] ?>" />
                                <label><?= $dsCauHoi['dapAnA'] ?></label>
                            </li>
                            <li style="list-style: none;">
                                <input type="radio" name="dapAn<?= $i ?>" value="<?= $dsCauHoi['dapAnB'] ?>" />
                                <label><?= $dsCauHoi['dapAnB'] ?></label>
                            </li>
                            <li style="list-style: none;">
                                <input type="radio" name="dapAn<?= $i ?>" value="<?= $dsCauHoi['dapAnC'] ?>" />
                                <label><?= $dsCauHoi['dapAnC'] ?></label>
                            </li>
                            <li style="list-style: none;">
                                <input type="radio" name="dapAn<?= $i ?>" value="<?= $dsCauHoi['dapAnD'] ?>" />
                                <label><?= $dsCauHoi['dapAnD'] ?></label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php
            $i++;
        }
        ?>
        <p>&nbsp;</p>
        <div class="modal" id="nopBai">
            <div class="modal-dialog-centered" style="width:300px; float:center;  margin-left:600px">
                <div class="modal-content">
                    <div class="modal-body">
                        <p>Bạn có chắc chắn nộp bài?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="xn">Xác nhận nộp</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-12 text-center mb-2">
            <button class="btn btn-success" data-toggle="modal" data-target="#nopBai">Nộp bài</button>
        </div>
    </div>
</div>