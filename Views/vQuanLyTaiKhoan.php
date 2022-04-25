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
                if (isset($_REQUEST['chucVu'])) {
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
                    $thongTinTaiKhoan = $quanTriTruong->getAllUserByChucVuGiaoVien();
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
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit">Chỉnh sửa</button>
                                <button type="button" class="btn btn-danger">Xóa</button>
                            </td>
                        </tr>
                <?php
                    }
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

<!-- Modal chỉnh sửa -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #135dfc">
                <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa</h5>
                <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div>
                    <div class="container-fluid mt-3">
                        <h4 class="mb-2">Thông tin</h4>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <label for="myEmail">Tên</label>
                                    <input class="form-control" type="text" placeholder="Nguyễn Văn A" aria-label="Disabled input example" disabled>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="mymon">Môn</label>
                                    <input type="mymon" class="form-control" id="mon" placeholder="Tất cả" aria-label="Disabled input example" disabled>
                                </div>
                            </div>
                            <h4 class="mb-2">Phân công giáo viên</h4>
                            <div class="form-group">
                                <label for="myState">
                                    <h6>Lớp học</h6>
                                </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Lớp 6.1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Lớp 6.2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Lớp 6.3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Lớp 6.4
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Lớp 6.5
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Lớp 7.1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Lớp 7.2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Lớp 7.3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Lớp 7.4
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Lớp 8.1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Lớp 9.1
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="myCheck">
                                    <label class="form-check-label" for="myCheck">
                                        <h5>Đồng ý thay đổi</h5>

                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--body-->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>