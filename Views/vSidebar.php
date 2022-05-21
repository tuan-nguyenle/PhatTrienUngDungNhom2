<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <b class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-black text-decoration-none">
            <span class="fs-5 d-none d-sm-inline">Menu</span>
        </b>
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
                <a href="index.php" class="nav-link align-middle px-0">
                    <i class="fas fa-home"></i><span class="ms-1 d-none d-sm-inline">Trang Chủ</span>
                </a>
            </li>

            <li>
                <a href="?dsachlop" class="nav-link px-0 align-middle">
                    <i class="fas fa-list"></i> <span class="ms-1 d-none d-sm-inline">Danh sách lớp</span></a>
            </li>
            <li class="nav-item">
                <a href="?taoCauHoi" class="nav-link align-middle px-0">
                    <i class="fas fa-book"></i> <span class="ms-1 d-none d-sm-inline">Tạo Câu Hỏi</span>
                </a>
            </li>
            <li>
                <a href="?taoBaiKiemTra" class="nav-link px-0 align-middle">
                    <i class="fas fa-plus-square"></i> <span class="ms-1 d-none d-sm-inline">Tạo bài kiểm
                        tra Trắc nghiệm</span>
                </a>
            </li>
            <?php if ($_SESSION['IDChucVu'] == 1) {
            ?>
                <li>
                    <a href="?duyetCauHoi" class="nav-link px-0 align-middle">
                        <i class="fas fa-check-double"></i> <span class="ms-1 d-none d-sm-inline">Duyệt Câu Hỏi</span>
                    </a>
                </li>
            <?php
            } ?>
        </ul>
        <hr>
    </div>
</div>