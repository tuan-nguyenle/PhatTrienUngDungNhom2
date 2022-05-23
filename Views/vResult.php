<?php
if (isset($_REQUEST['btnXacNhan'])) {
    $chiTietDe = $hocSinh->getChiTietDeKiemTraTracNghiem($_REQUEST['maDe']);
    unset($_SESSION['batDau']);
    $soCauHoi = mysqli_num_rows($chiTietDe);
    for ($i = 1; $i <= $soCauHoi; $i++) {
        if (isset($_POST['dapAn' . $i])) {
            $da_cauhoi[$i] = addslashes($_POST['dapAn' . $i . '']);
        } else {
            $da_cauhoi[$i] = addslashes('');
        }
        $id_cauhoi[$i] = addslashes($_POST['questionID' . $i . '']);
    }
    $diem = 0;
} else {
    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
    die();
}
?>
<div class="container" style="min-height: 500px;">
    <div class="row m-5">
        <div class="col-md-12">
            <div class="panel">
                <h1 class="title" style="color:#660033">Kết Quả</h1>
                <?php
                $i = 1;
                while ($dsCauHoi = mysqli_fetch_assoc($chiTietDe)) {
                ?>
                    <div class="mb-2 mt-2" style="display: block; background-color:#CCC; width: 1000px; padding-left:20px">
                        <p>
                            <b>Câu <?= $i ?></b>
                            <?= $dsCauHoi['cauHoi'] ?>
                        </p>
                        <div class="panel panel-default cauHoi" style="padding-bottom: 1px;">
                            <div class="panel-body">
                                <ul>
                                    <li style="list-style: none;">
                                        <!-- // kiểm tra xem đáp án nào học sinh đã trả lời thì checked -->
                                        <?php
                                        if ($da_cauhoi[$i] == $dsCauHoi['dapAnA']) {
                                            echo '<input type="radio" checked="checked">
							<label>' . $dsCauHoi['dapAnA'] . '</label>';
                                        } else {
                                            echo '<input type="radio" disabled="disabled">
							<label>' . $dsCauHoi['dapAnA'] . '</label>';
                                        }
                                        ?>
                                    </li>
                                    <li style="list-style: none;">
                                        <?php
                                        if ($da_cauhoi[$i] == $dsCauHoi['dapAnB']) {
                                            echo '<input type="radio" checked="checked">
							<label>' . $dsCauHoi['dapAnB'] . '</label>';
                                        } else {
                                            echo '<input type="radio" disabled="disabled">
							<label>' . $dsCauHoi['dapAnB'] . '</label>';
                                        }
                                        ?>
                                    </li>
                                    <li style="list-style: none;">
                                        <?php
                                        if ($da_cauhoi[$i] == $dsCauHoi['dapAnC']) {
                                            echo '<input type="radio" checked="checked">
							<label>' . $dsCauHoi['dapAnC'] . '</label>';
                                        } else {
                                            echo '<input type="radio" disabled="disabled">
							<label>' . $dsCauHoi['dapAnC'] . '</label>';
                                        }
                                        ?>
                                    </li>
                                    <li style="list-style: none;">
                                        <?php
                                        if ($da_cauhoi[$i] == $dsCauHoi['dapAnD']) {
                                            echo '<input type="radio" checked="checked">
							<label>' . $dsCauHoi['dapAnD'] . '</label>';
                                        } else {
                                            echo '<input type="radio" disabled="disabled">
							<label>' . $dsCauHoi['dapAnD'] . '</label>';
                                        }
                                        ?>
                                    </li>
                                </ul>
                                <div class="outcome m-2" style="color: #8e662e;background-color: #fcefdc;border-color: #fbe8cd;">
                                    <?php
                                    if ($da_cauhoi[$i] == $dsCauHoi['dapAnDung']) {
                                        $diem += 10 / $soCauHoi;
                                    }
                                    ?>
                                    <p>Đáp Án Đúng : <?= $dsCauHoi['dapAnDung'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    $i++;
                }
                ?>
            </div>
        </div>
        <span>
            <?php
            $diem = round($diem, 2);
            if ($diem < 5) {
                echo "<h5 class='mt-4'  style='color:red;'>Điểm : " . $diem . "</h5>";
            } else {
                echo "<h5 class='mt-4' >Điểm : " . $diem . "</h5>";
            }
            if (mysqli_num_rows($hocSinh->xemDiemTracNghiem($_REQUEST['maDe'])) < 1) {
                $hocSinh->tinhDiem($_REQUEST['maDe'], $diem);
            }
            ?>
        </span>
    </div>
</div>