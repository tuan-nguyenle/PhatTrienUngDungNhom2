<?php
include_once './Controller/cGiaoVien.php';
include_once './Controller/cTaiKhoan.php';
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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="./Image/lms-learning-management-system-concept-with-big-vector-27335395.jpg">
    <link rel="stylesheet" href="./bootrap/bootstrap.min.css">
    <link rel="stylesheet" href="./bootrap/fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="./bootrap/fontawesome-free-5.15.3-web/css/fontawesome.css">
    <link rel="stylesheet" href="./bootrap/fontawesome-free-5.15.3-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="./CSS/header_footer.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <script src="./bootrap/fontawesome-free-5.15.3-web/js/all.js"></script>
    <script src="./bootrap/JS/jquery.min.js"></script>
    <script src="./bootrap/JS/popper.min.js"></script>
    <script src="./bootrap/JS/bootstrap.min.js"></script>
    <title>Hệ thống học tập trực tuyến</title>
</head>

<body>
    <?php include_once './Views/header.php'; ?>
    <?php
    if (isset($_GET['dn']) or !isset($_SESSION['LoginSuccess'])) {
        include_once './Views/vDangNhap.php';
    }
    if (isset($_GET['myInfo'])) {
        include_once './Views/vMenu.php';
        echo "<div class='container-fluid'><div class='row flex-nowrap'>";
        include_once './Views/vSidebar.php';
        echo "<div class='col py-3'>";
        include_once './Views/vInfo.php';
        echo "</div></div></div>";
    }
    if (isset($_SESSION['IDChucVu'])) {
        switch ($_SESSION['IDChucVu']) {
            case '2':
                include_once './Views/vMenu.php';
                echo "<div class='container-fluid'><div class='row flex-nowrap'>";
                include_once './Views/vSidebar.php';
                echo "</div></div>";
                break;
            default:
                break;
        }
    }
    ?>
    <?php include_once './Views/footer.php'; ?>
</body>

</html>