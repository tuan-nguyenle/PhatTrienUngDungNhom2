<header>
    <nav class="navbar navbar--header navbar-inverse fixed-top">
        <div class="container">
            <div class="navbar-header">
                <span class="text-header"><i class="fas fa-school"></i> Tên Trường :
                    <?php
                    if (isset($_SESSION['LoginSuccess'])) {
                        if ($_SESSION['LoginSuccess'] == true) {
                            echo $thongTinTruong['tenTruong'];
                        }
                    }
                    ?>
                    <!-- THCS Võ Thị Sáu -->
                    &emsp;<i class="fa fa-envelope"></i>E-mail :<a href="mailto:19503891.tuan@student.iuh.edu.vn">19503891.tuan@student.iuh.com.vn</a>
                </span>
            </div>
            <?php
            if (isset($_SESSION['LoginSuccess'])) {
                if ($_SESSION['LoginSuccess'] == true) {
            ?>
                    <div class="dropdown"><a role="button" class="nav-link dropdown-toggle text-light" data-toggle="dropdown" id="dropdownMenuButton">
                            <img style="max-width: 35px;max-height: 35px;" src='<?= $giaoVien->getAnhDaiDien() ?>'></img>&emsp;<?= $giaoVien->getTenGiaoVien()?></a>
                        <div class="dropdown-menu text-center menu--user" labelledby="dropdownMenuButton">
                            <a href="index.php" class="dropdown-item"><i class="fa fa-house-user" style="color: #95b87b;"></i> <span>Nhà</span></a>
                            <a href="?myInfo" class="dropdown-item"><i class="fa fa-user-circle" style="color: #95b87b;"></i> <span>Hồ Sơ</span></a>
                            <a href="?logout" class="dropdown-item"><i class="fas fa-sign-out-alt" style="color: #95b87b;"></i> <span>Đăng Xuất</span></a>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "<a style='color:white;' href='?dn'>Đăng Nhập</a>";
            }
            ?>
        </div>
    </nav>
</header>