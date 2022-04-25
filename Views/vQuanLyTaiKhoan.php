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
                        <form class="d-flex">
                            <!-- Tìm kiếm-->
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        <!-- Thêm-->
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
            <tbody>
                <?php
                if (isset($_REQUEST['chucVu']) and $_REQUEST['chucVu'] <= 6) {
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
                            break;
                    }
                } else {
                    echo "<script>alert('Không Có Giá Trị')</script>";
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
                                        <a style="text-decoration: none;" href="#editUser" class="edit text-black" data-toggle="modal">
                                            <i class="material-icons update" data-toggle="tooltip" data-id="<?= $ds['maTaiKhoan'] ?>" data-CCCDGV="<?= $ds['CCCD'] ?>" data-ngaySinhGV="<?= $ds['ngaySinh'] ?>" data-tenGV="<?= $ds['ten'] ?>" data-emailGV="<?= $ds['email'] ?>" data-SDTGV="<?= $ds['SDT'] ?>" data-diaChiGV="<?= $ds['diaChi'] ?>" title="Edit">Edit</i>
                                        </a></button>
                                    <button type="button" class="btn btn-danger">Xóa</button>
                                <?php } ?>
                            </td>
                        </tr>
                <?php
                    }
                }
                if ($_REQUEST['chucVu'] == 2 or $_REQUEST['chucVu'] == 1) {
                    include_once './Views/vChinhSuaGiaoVien.php';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- modal -->
<div class="modal fade" id="them" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #135dfc">
                <h5 class="modal-title" id="exampleModalLabel">Thêm tài khoản mới</h5>
                <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container-fluid mt-3">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label for="myEmail">Email</label>
                                <input class="form-control" type="text" placeholder="abc@gmai.com" aria-label="Disabled input example">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="myPassword">Password</label>
                                <input type="password" class="form-control" id="myPassword" placeholder="******">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Nhập lại password</label>
                            <input type="text" class="form-control" id="password2" placeholder="******">

                            <label for="myState">State</label>
                            <select id="mon" class="form-control">
                                <option selected>Tất cả môn</option>
                                <option value="1">Ngữ văn</option>
                                <option value="2">Toán</option>
                                <option value="3">Giáo dục công dân</option>
                                <option value="4">Lịch sử</option>
                                <option value="5">Địa lí</option>
                                <option value="6">Ngoại ngữ</option>
                                <option value="7">Khoa học tự nhiên</option>
                                <option value="8">Công nghệ</option>
                                <option value="9">Tin học</option>
                                <option value="10">Giáo dục thể chất</option>
                                <option value="11">Nghệ thuật</option>
                                </option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>