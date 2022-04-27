<header>
    <nav class="navbar navbar--header navbar-inverse fixed-top">
        <div class="container">
            <div class="navbar-header">
                <span class="text-header"><i class="fas fa-city"></i> Quản Trị Thành Phố
                </span>
            </div>
            <?php
            if (isset($_SESSION['LoginSuccess'])) {
                if ($_SESSION['LoginSuccess'] == true) {
                    echo "<a href='?logout' class='nav-link text-white'><span>Đăng Xuất</span></a>";
                } else {
                    echo "<a style='color:white;' href='?dn'>Đăng Nhập</a>";
                }
            }
            ?>
        </div>
    </nav>
</header>