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
        <h3 style="color:#C00">VẬT LÝ</h3>
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
              <li>Giáo viên: Lê Ngọc Trâm</li>
              <li>Tiết học: 2-3 Thứ 3 </li>
              <li>Học kỳ: 2</li>
              <li>Năm học: 2021-2022</li>
            </ul>
          </div>
        </div>
        </br>
        <div class="row">
          <div class="col-6">
            <h3 style="color:#C00">Nộp bài tập kiểm tra</h3>

            <ul class="list--info">
              <li><a href="giaodiennopbai.php">Kiểm tra 15 phút: Giao động cơ học (25/5/2022) </a></li>
              <li><a href="">Kiểm tra 1 tiết: Nhiệt học (1/4/2022) </a></li>
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
            <h3 style="color:#C00">Nộp bài tập về nhà</h1>

              <ul class="list--info">
                <li><a href=""> Bài soạn: Sức căng bề mặt(5/2/2022) </a></li>
                <li><a href=""> Quang học (1/2/2022) </a></li>
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