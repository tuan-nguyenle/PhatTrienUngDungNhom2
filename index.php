<?php
include_once './Controller/cGiaoVien.php';
include_once './Controller/cTaiKhoan.php';
include_once './Controller/cTruong.php';
session_start();
$account = new cTaiKhoan();
if (isset($_POST['username'])) {
    $us = $_POST['username'];
}
if (isset($_POST['password'])) {
    $pw = $_POST['password'];
}
if (isset($_POST['submit'])) {
    $account->login($us, $pw);
}
if (isset($_REQUEST['logout'])) {
    session_destroy();
    header("Refresh:0.2; url=index.php");
}
if (isset($_SESSION['LoginSuccess'])) {
    $truong = new truong($_SESSION['maTruong']);
    $thongTinTruong = mysqli_fetch_assoc($truong->getThongTinTruong());
    if ($_SESSION['LoginSuccess'] == true && ($_SESSION['IDChucVu'] == 2 or $_SESSION['IDChucVu'] == 1)) {
        $giaoVien = new giaoVien($_SESSION['maTaiKhoan'], $_SESSION['maTruong'], $_SESSION['IDChucVu']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="./Image/lms-learning-management-system-concept-with-big-vector-27335395.jpg">
    <!-- Latest compiled JavaScript -->
    <link rel="stylesheet" href="./bootrap/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootrap/fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="./bootrap/fontawesome-free-5.15.3-web/css/fontawesome.css">
    <link rel="stylesheet" href="./bootrap/fontawesome-free-5.15.3-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="./CSS/header_footer.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <script src="./bootrap/fontawesome-free-5.15.3-web/js/all.js"></script>
    <script src="./bootrap/JS/jquery.min.js"></script>
    <script src="./bootrap/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="./bootrap/JS/popper.min.js"></script>
    <script src="./bootrap/JS/bootstrap.min.js"></script>
    <script src="./bootrap/JS/ckeditor.js"></script>
    <title>Hệ thống học tập trực tuyến</title>
</head>

<body>
    <?php include_once './Views/header.php'; ?>
    <?php
    if (isset($_GET['dn']) or !isset($_SESSION['LoginSuccess'])) {
        include_once './Views/vDangNhap.php';
    } elseif (isset($_GET['myInfo'])) {
        include_once './Views/vMenu.php';
        echo "<div class='container-fluid'><div class='row flex-nowrap'>";
        include_once './Views/vSidebar.php';
        include_once './Views/vInfo.php';
        echo "</div></div>";
    } elseif (isset($_SESSION['IDChucVu'])) {
        switch ($_SESSION['IDChucVu']) {
            case '2' or '1':
                if (isset($_GET['thongKeBaiKiemTra']) && $_GET['thongKeBaiKiemTra'] != null) {
                    include_once './Views/vMenu.php';
                    echo "<div class='container-fluid'><div class='row flex-nowrap'>";
                    include_once './Views/vSidebar.php';
                    include_once './Views/vChiTietDiemHocSinh.php';
                    echo "</div></div>";
                } elseif (isset($_GET['taoBaiKiemTra'])) {
                    include_once './Views/vMenu.php';
                    echo "<div class='container-fluid'><div class='row flex-nowrap'>";
                    include_once './Views/vSidebar.php';
                    include_once './Views/vTaoBaiKiemTra.php';
                    echo "</div></div>";
                } elseif (isset($_GET['taoCauHoi'])) {
                    include_once './Views/vMenu.php';
                    echo "<div class='container-fluid'><div class='row flex-nowrap'>";
                    include_once './Views/vSidebar.php';
                    include_once './Views/vTaoCauHoi.php';
                    echo "</div></div>";
                } elseif (isset($_GET['dsachlop']) && ($_SESSION['IDChucVu'] == 2 or $_SESSION['IDChucVu'] == 1)) {
                    if ($_GET['dsachlop'] != null) {
                        include_once './Views/vMenu.php';
                        echo "<div class='container-fluid'><div class='row flex-nowrap'>";
                        include_once './Views/vSidebar.php';
                        include_once './Views/vDanhSachLop.php';
                        echo "</div></div>";
                    } else {
                        include_once './Views/vMenu.php';
                        echo "<div class='container-fluid'><div class='row flex-nowrap'>";
                        include_once './Views/vSidebar.php';
                        include_once './Views/vDanhSachLopDamNhan.php';
                        echo "</div></div>";
                    }
                } else {
                    include_once './Views/vMenu.php';
                    include_once './Views/vHomePage.php';
                }
                break;
            default:
                break;
        }
    }
    ?>
    <?php include_once './Views/footer.php'; ?>
    <script>
        var allEditors = document.querySelectorAll("#txtCauHoi, #txtDA1, #txtDA2, #txtDA3,#txtDA4,#txtDADung");
        for (var i = 0; i < allEditors.length; ++i) {
            ClassicEditor.create(allEditors[i]);
        }
    </script>
</body>

</html>