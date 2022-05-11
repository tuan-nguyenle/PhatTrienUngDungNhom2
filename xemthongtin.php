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
    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm bg-light">
            <ul class="navbar-nav" style="text-align:center">
                <li class="nav-item">
                    <a class="nav-link" href="#">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="danhsachmonkt.php">Các Bài Kiểm Tra</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="xemthongtin.php">Chi Tiết Môn</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="giaodiennopbai.php">Chi Tiết Bài Nộp</a>
                </li>
            </ul>
        </nav>
        <div class="thongtinmonhoc">
            <div class="container">
                <form class="row g-3">
                    <div class="col-md-2">
                        <label for="inputState" class="form-label">Chọn Môn Học</label>
                        <select id="inputState" class="form-select">
                            <option selected>Toán</option>
                            <option selected>Vật Lý</option>
                            <option selected>Hóa Học</option>
                            <option selected>Tiếng Anh</option>
                            <option selected>Sinh Học </option>
                            <option selected>Lịch sử</option>
                            <option selected>Ngữ Văn</option>
                            <option selected>Khoa học tự nhiên</option>
                            <option selected>Công nghệ</option>
                            <option selected>Tin học</option>
                            <option selected>Giáo dục thể chất</option>
                            <option selected>Nghệ thuật</option>
                            <option selected>Chọn...</option>
                        </select>
                    </div>
                </form>

                </br>
                <div class="row">
                    <div class="col-6">
                        <h5 style="color:#C00">Bài Kiểm Tra Tự Luận</h5>

                        <ul class="list--info">
                            <li><a href="giaodiennopbai.php"> Giao động cơ học (25/5/2022): 15 Phút</a></li>
                            <li><a href="">Nhiệt học (1/4/2022): 1 Tiết </a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list--info">
                            </br>
                            </br>
                            <li>
                                <form name="form1" method="post" action="">
                                    <input type="checkbox" name="chk1" id="chk1">
                                    <label for="chk1"></label>
                                </form>
                            </li>
                            <li>
                                <form name="form2" method="post" action="">
                                    <input type="checkbox" name="chk2" id="chk2">
                                    <label for="chk2"></label>
                                </form>
                            </li>

                        </ul>
                    </div>
                </div>
                </br>
                <div class="row">
                    <div class="col-6">
                        <h5 style="color:#C00">Bài Kiểm Tra Trắc Nghiệm </h5>

                        <ul class="list--info">
                            <li><a href=""> Sức căng bề mặt(5/2/2022) </a></li>
                            <li><a href=""> Quang học (10/2/2022) </a></li>
                            <li><a href=""> Nhiệt học (1/2/2022) </a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list--info">
                            </br>
                            </br>
                            <li>
                                <form name="form3" method="post" action="">
                                    <input type="checkbox" name="chk3" id="chk3">
                                    <label for="chk1"></label>
                                </form>
                            </li>
                            <li>
                                <form name="form4" method="post" action="">
                                    <input type="checkbox" name="chk4" id="chk4">
                                    <label for="chk4"></label>
                                </form>
                            </li>
                            <li>
                                <form name="form5" method="post" action="">
                                    <input type="checkbox" name="chk5" id="chk5">
                                    <label for="chk5"></label>
                                </form>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php include_once './Views/footer.php'; ?>
</body>

</html>