<div class="container">
    <div id="navbar">
        <!--select-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <select class="form-select" aria-label="Default select example" onchange="location = this.value;">
                <?php
                $allChucVu = $quanTriTruong->getAllChucVu();
                if ($allChucVu) {
                    if (mysqli_num_rows($allChucVu) > 0) {
                        while ($row = mysqli_fetch_assoc($allChucVu)) {
                            if ($_REQUEST['chucVu'] == $row['IDChucVu']) {
                                echo "<option selected value='?quanLyTaiKhoan&&chucVu=" . $row['IDChucVu'] . "'>" . $row['MoTa'] . "</option><br>";
                            } else {
                                echo "<option value='?quanLyTaiKhoan&&chucVu=" . $row['IDChucVu'] . "'>" . $row['MoTa'] . "</option><br>";
                            }
                        }
                    }
                }
                ?>
            </select>
            <div class="col-2" style="padding-left: 15px;padding-right: 15px">
                <div class="navbar-nav">
                    <input class="form-control me-2" type="search" id="search" placeholder="Search" aria-label="Search">
                </div>
            </div>
            <div class="col-2">
                <button class="btn btn-primary">
                    <a href="?phanCongGiaoVien" style="color:white;text-decoration: none;">Phân Công</a>
                </button>
            </div>
        </nav>
    </div>
    <div id="main">
        <div class="subject" style="text-align: center">
            <p class="h3">Quản trị tài khoản</p>
        </div>
        <button type="button" style="float: right;" class="btn btn-primary" data-toggle="modal" data-target="#them">Thêm Người Dùng</button>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Mã tài khoản</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Email</th>
                    <th scope="col">Địa Chỉ</th>
                    <?php
                    if (isset($_REQUEST['chucVu']) and ($_REQUEST['chucVu'] == 1 || $_REQUEST['chucVu'] == 2)) {
                        echo "<th scope='col'>Bộ Môn</th>";
                    }
                    ?>
                    <th scope="col">Số Điện Thoại</th>
                    <th scope="col">Tùy chỉnh</th>
                </tr>
            </thead>
            <tbody id="tbody">
                <?php
                if (isset($_REQUEST['chucVu']) and $_REQUEST['chucVu'] <= 4) {
                    switch ($_REQUEST['chucVu']) {
                        case '1':
                            $thongTinTaiKhoan = $quanTriTruong->getAllUserByChucVuToTruong();
                            break;
                        case '2':
                            $thongTinTaiKhoan = $quanTriTruong->getAllUserByChucVuGiaoVien();
                            break;
                        case '3':
                            $thongTinTaiKhoan = $quanTriTruong->getAllUserByChucVuHocSinh();
                            break;
                        case '4':
                            $thongTinTaiKhoan = $quanTriTruong->getAllUserByChucVuQuanTriTruong();
                            break;
                        default:
                            $thongTinTaiKhoan = $quanTriTruong->getAllUserByChucVuToTruong();
                            break;
                    }
                } else {
                    echo "<script>alert('Không Có Giá Trị')</script>";
                    $thongTinTaiKhoan = $quanTriTruong->getAllUserByChucVuToTruong();
                    $_REQUEST['chucVu'] = 1;
                }
                if (mysqli_num_rows($thongTinTaiKhoan) > 0) {
                    while ($ds = mysqli_fetch_assoc($thongTinTaiKhoan)) {
                ?>
                        <tr>
                            <td><?= $ds['maTaiKhoan'] ?></td>
                            <td><?= $ds['ten'] ?></td>
                            <td><?= $ds['email'] ?></td>
                            <td><?= $ds['diaChi'] ?></td>
                            <?php
                            if (isset($_REQUEST['chucVu']) and ($_REQUEST['chucVu'] == 1 || $_REQUEST['chucVu'] == 2)) {
                                echo "<td>" . $ds['tenMonHoc'] . "</td>";
                            }
                            ?>
                            <td><?= $ds['SDT'] ?></td>
                            <td>
                                <button type="button" class="btn btn-warning">
                                    <a style="text-decoration: none;" href="#editUser" class="edit text-black" data-toggle="modal">
                                        <i class="material-icons updateUser" data-toggle="tooltip" data-id="<?= $ds['maTaiKhoan'] ?>" data-CCCDUser="<?= $ds['CCCD'] ?>" data-ngaySinhUser="<?= $ds['ngaySinh'] ?>" data-tenUser="<?= $ds['ten'] ?>" data-emailUser="<?= $ds['email'] ?>" data-SDTUser="<?= $ds['SDT'] ?>" data-diaChiUser="<?= $ds['diaChi'] ?>" title="Edit">Sửa</i>
                                    </a>
                                </button>
                                <button type="button" class="xoaTaiKhoan btn btn-danger" data-toggle="modal" data-target="#xoa" data-id="<?= $ds['maTaiKhoan'] ?>">
                                    Xoá
                                </button>
                            </td>
                        </tr>
                <?php
                    }
                }
                include_once './Views/vThemNguoiDung.php';
                include_once './Views/vXoaTaiKhoan.php';
                include_once './Views/vChinhSuaTaiKhoan.php';
                ?>
            </tbody>
        </table>
    </div>
</div>