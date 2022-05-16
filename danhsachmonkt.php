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
    <script src="./bootrap/fontawesome-free-5.15.3-web/js/all.js"></script>
    <script src="./bootrap/JS/jquery.min.js"></script>
    <script src="./bootrap/JS/popper.min.js"></script>
    <script src="./bootrap/JS/bootstrap.min.js"></script>
    <title>Hệ thống học tập trực tuyến</title>
</head>

<body>
    <?php include_once './View/header.php'; ?>
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

        <div class="col py-3">
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
            <div id="main">
                <div class="subject" style="text-align: center">
                    <p class="h3" style="color:#F00">Các Bài Kiểm Tra</p>
                    </br>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr style="text-align:left">
                            <th scope="col">STT</th>
                            <th scope="col">Tên Môn</th>
                            <th scope="col">Bài</th>
                            <!-- <th scope="col">mail </th> -->
                            <th scope="col">Tên Giáo Viên Hướng Dẫn</th>
                            <th scope="col">Nội Dung Kiểm Tra</th>
                            <th scope="col">Thời Hạn </th>
                            <th scope="col">Trạng Thái </th>
                        </tr>
                    </thead>
                    <!--Table 1-->
                    <tbody>
                        <tr style="text-align:left">

                            <th>1</th>
                            <td>Vật Lý</td>
                            <td>Giao Động Cơ Học</td>
                            <td>Lê Ngọc Trâm</td>
                            <td>15 Phút </td>
                            <td>15/5/2022</td>
                            <td style="color:#F00">Chưa nộp</td>
                            <td><a href="giaodiennopbai.php"><button type="button" class="btn btn-primary">Xem</button></td>
                            <!-- <td>80%</td>
                             <td>80%</td> -->
                        </tr>
                        <th>2</th>
                        <td>Hóa Học</td>
                        <td>Các Hợp Chất Hữu Cơ</td>
                        <td>Nguyễn Ngọc Kiều</td>
                        <td>15 Phút </td>
                        <td>29/4/2022</td>
                        <td style="color:#F00">Chưa nộp</td>
                        <td><a href="#"><button type="button" class="btn btn-primary">Xem</button></td>
                        </tr>
                        <tr style="text-align:left">
                            <th>3</th>
                            <td>Hóa Học</td>
                            <td>Chất Khí</td>
                            <td>Nguyễn Ngọc Kiều</td>
                            <td>1 Tiết </td>
                            <td>2/4/2022</td>
                            <td>Đã Nộp</td>
                            <td><a href="#"><button type="button" class="btn btn-primary">Xem</button></td>
                            <!-- <td>15%</td>
                           <td>10%</td> -->
                        </tr>
                        <tr style="text-align:left">
                            <th>4</th>
                            <td>Toán </td>
                            <td>Diện Tích Hình Học</td>
                            <td>Trần Văn Học</td>
                            <td>15 Phút </td>
                            <td>1/4/2022</td>
                            <td>Đã Nộp</td>
                            <td><a href="#"><button type="button" class="btn btn-primary">Xem</button></td>
                            <!-- <td>5%</td>
                           <td>10%</td> -->
                        </tr>
                        <tr style="text-align:left">
                            <th>6</th>
                            <td>Toán </td>
                            <td>Hằng Đẳng Thức Đáng Nhớ</td>
                            <td>Trần Văn Học</td>
                            <td>1 Tiết </td>
                            <td>13/3/2022</td>
                            <td>Đã Nộp</td>
                            <td><a href="#"><button type="button" class="btn btn-primary">Xem</button></td>
                            <!-- <td>0%</td>
                           <td>0%</td> -->
                        </tr>
                        <!--Table 2-->

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

    </div>
    <?php include_once './View/footer.php'; ?>
</body>

</html>