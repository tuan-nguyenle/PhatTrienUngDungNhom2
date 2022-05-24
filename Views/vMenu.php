<div id="navbar">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <!--               <a class="navbar-brand" href="#">Navbar</a>
--> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse navbar-center" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="index.php">Trang chủ</a>
          <?php
          if ($_SESSION['IDChucVu'] == 1 or $_SESSION['IDChucVu'] == 2) {
            echo "<a class='nav-link active' href='?dsachlop'>Danh Sách Lớp Đảm Nhận</a>";
            echo "<a class='nav-link active' href='?taoBaiKiemTra'>Tạo bài kiểm tra Trắc nghiệm</a>";
            echo "<a class='nav-link active' href='?taoBaiKiemTraTuLuan'>Tạo bài kiểm tra Tự Luận</a>";
          }
          if ($_SESSION['IDChucVu'] == 1) {
            echo "<a class='nav-link active' href='?duyetCauHoi'>Duyệt Câu Hỏi</a>";
          }
          if ($_SESSION['IDChucVu'] == 3) {
            echo "<a class='nav-link active' href='?xemThongTinMonHoc'>Xem Thông Tin bài học</a>";
          }
          if ($_SESSION['IDChucVu'] == 4) {
            echo "<a class='nav-link active' href='?quanLyTaiKhoan&&chucVu=2'>Quản Lý Tài Khoản</a>";
            echo "<a class='nav-link active' href='?thongKeThanhTich'>Thống kê thành tích</a>";
          }
          ?>
        </div>
      </div>
    </div>
  </nav>
</div>