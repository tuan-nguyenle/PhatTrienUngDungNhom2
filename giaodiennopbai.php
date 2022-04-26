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
        <div class="thongtinmonhoc">
            <div class="container">
                </br>
                <h3 style="color:#C00">Giao động cơ học</h3>
                <div class="row">
                    <div class="col-6">
                        <ul class="list--info">
                            <li>Tên môn học: Vật Lý</li>
                            <li>Mã môn học: 123456</li>
                            <li>Tên học sinh: Lê Nguyễn Tuân</li>
                            <li>Lớp: 8a2</li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list--info">
                            <li>Kiểm tra: 15 phút</li>
                            <li>Thời gian nộp: 25/5/2022</li>
                            <li>Thời gian còn lại: </li>
                            <li>Năm học: 2021-2022</li>
                        </ul>
                    </div>
                </div>
                </br>
                <div class="row">
                    <div class="col-6">
                        <h3 style="color:#C00">Nộp bài tại đây</h3>
                        <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
                            <ul class="list--info" style="border: 1px solid green; width: 1000px;">
                                </br>
                                <li>Chọn file bài nộp</li>
                                <label for="textfile"></label>
                                </br>
                                <label for="fileupload"></label>
                                <input type="file" name="fileupload" id="fileupload" />
                                </br>
                                <li> Lưu file thành tên</li>
                                <form name="form1" method="post" action=""><label for="txttext"></label>
                                    <input type="text" name="txttext" id="txttext">
                                    <input type="submit" name="button" id="btn" value=" Nộp bài" />
                                    <input type="reset" name="button2" id="btn2" value="Hủy bài nộp" />
                                </form>
                                <p>&nbsp;</p>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="checkbox" name="check1" id="check1">
    <?php include_once './Views/footer.php'; ?>
</body>

</html>