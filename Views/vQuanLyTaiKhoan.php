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
            <div class="container-fluid">
                <!--               <a class="navbar-brand" href="#">Navbar</a>
             --> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-center" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <input class="form-control me-2" type="search" id="search" placeholder="Search" aria-label="Search">
                    </div>
                </div>
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
                    <th scope="col">Số Điện Thoại</th>
                    <th scope="col">Tùy chỉnh</th>
                </tr>
            </thead>
            <tbody id="tbody">
                <?php
                if (isset($_REQUEST['chucVu']) and $_REQUEST['chucVu'] <= 5) {
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
                        case '5':
                            $thongTinTaiKhoan = $quanTriTruong->getAllUserByChucVuQuanTriThanhPho();
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
                            <td><?= $ds['SDT'] ?></td>
                            <td>
                                <?php if ($_REQUEST['chucVu'] == 2 or $_REQUEST['chucVu'] == 1) { ?>
                                    <button type="button" class="btn btn-warning">
                                        <a style="text-decoration: none;" href="#editGV" class="edit text-black" data-toggle="modal">
                                            <i class="material-icons updateGV" data-toggle="tooltip" data-id="<?= $ds['maTaiKhoan'] ?>" data-CCCDGV="<?= $ds['CCCD'] ?>" data-ngaySinhGV="<?= $ds['ngaySinh'] ?>" data-tenGV="<?= $ds['ten'] ?>" data-emailGV="<?= $ds['email'] ?>" data-SDTGV="<?= $ds['SDT'] ?>" data-diaChiGV="<?= $ds['diaChi'] ?>" title="Edit">Chỉnh Sửa</i>
                                        </a></button>
                                <?php } ?>
                                <button type="button" class="xoaTaiKhoan btn btn-danger" data-toggle="modal" data-target="#xoa" data-id="<?= $ds['maTaiKhoan'] ?>">
                                    Xoá Tài Khoản
                                </button>
                            </td>
                        </tr>
                <?php
                    }
                }
                include_once './Views/vThemNguoiDung.php';
                include_once './Views/vXoaTaiKhoan.php';
                if ($_REQUEST['chucVu'] == 2 or $_REQUEST['chucVu'] == 1) {
                    include_once './Views/vChinhSuaGiaoVien.php';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>