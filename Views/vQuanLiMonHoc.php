<div class="container mt-2">
    <div id="navbar">
        <!--select-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <select class="form-select" aria-label="Default select example" onchange="location = this.value;">
                <?php
                $allKhoi = $quanTriThanhPho->getThongTinKhoi();
                if ($allKhoi) {
                    if (mysqli_num_rows($allKhoi) > 0) {
                        while ($row = mysqli_fetch_assoc($allKhoi)) {
                            if ($_REQUEST['Khoi'] == $row['maKhoi']) {
                                echo "<option selected value='?quanLiMonHoc&&Khoi=" . $row['maKhoi'] . "'>" . $row['moTa'] . "</option><br>";
                            } else {
                                echo "<option value='?quanLiMonHoc&&Khoi=" . $row['maKhoi'] . "'>" . $row['moTa'] . "</option>";
                            }
                        }
                    }
                }
                ?>
            </select>
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-center" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#them">
                            Thêm Môn Học
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div id="main">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Mã môn</th>
                    <th scope="col">Tên môn học</th>
                    <th scope="col">Tùy chỉnh</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!isset($_REQUEST['Khoi'])) {
                    $_REQUEST['Khoi'] = 1;
                }
                $monHoc = $quanTriThanhPho->getMonDamNhan($_REQUEST['Khoi']);
                $i = 0;
                if (mysqli_num_rows($monHoc) > 0) {
                    while ($row = mysqli_fetch_assoc($monHoc)) {
                        $i++;
                ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $row['maMonHoc'] ?></td>
                            <td><?= $row['tenMonHoc'] ?></td>
                            <td>
                                <button type="button" class="deleteMonHoc btn btn-danger" data-toggle="modal" data-target="#xoa" data-maMon="<?= $row['maMonHoc'] ?>">
                                    Xoá Môn Học
                                </button>
                            </td>
                        </tr>
                <?php }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<!--  -->


<!-- Modal Them -->
<?php include_once './Views/vThemMon.php'; ?>
<!-- Modal Xoa -->
<?php include_once './Views/vXoaMon.php' ?>