<?php
include 'db.php';
class mGiaoVien
{
    // lay tat ca thong tin giao vien
    public function getAllThongTinGiaoVienQuaUsername($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `giaovien` WHERE `maTaiKhoan` = $username";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay ma giao vien
    public function getMaGiaoVien($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `maGiaoVien` FROM `giaovien` WHERE `maTaiKhoan` = $username";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay ten giao vien
    public function getTenGiaoVien($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `tenGiaoVien` FROM `giaovien` WHERE `maTaiKhoan` = $username";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay ma mon hoc
    public function getMaMonHoc($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `maMonHoc` FROM `giaovien` WHERE `maTaiKhoan` = $username";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay anh dai dien
    public function getAnhDaiDien($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `anhDaiDien` FROM `giaovien` WHERE `maTaiKhoan` = $username";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay ngay sinh
    public function getNgaySinh($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `ngaySinh` FROM `giaovien` WHERE `maTaiKhoan` = $username";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay dia chi
    public function getDiaChi($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `diaChi` FROM `giaovien` WHERE `maTaiKhoan` = $username";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay cccd
    public function getCCCD($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `CCCD` FROM `giaovien` WHERE `maTaiKhoan` = $username";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay email
    public function getEmail($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `email` FROM `giaovien` WHERE `maTaiKhoan` = $username";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay sdt
    public function getSDT($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `SDT` FROM `giaovien` WHERE `maTaiKhoan` = $username";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay gioitinh
    public function getGioiTinh($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `gioiTinh` FROM `giaovien` WHERE `maTaiKhoan` = $username";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay tat ca lop ma giao vien dam nhan
    public function getAllLopDamNhan($maGiaoVien)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `lopdamnhan`,`lop`,`truong`,`thanhpho` WHERE `lopdamnhan`.`maLop` = `lop`.`maLop` AND `lop`.`maTruong` = `truong`.`maTruong` AND `thanhpho`.`maThanhPho`=`truong`.`maThanhPho`
        AND `lopdamnhan`.`maGiaoVien` = $maGiaoVien";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay danh sach hoc sinh co trong lop
    public function getAllDanhSachLop($maLop)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `chitietlop`,`lop`,`hocsinh` WHERE `chitietlop`.`maLop` = `lop`.`maLop` AND `chitietlop`.`maHocSinh` = `hocsinh`.`maHocSinh` AND `chitietlop`.`maLop` = $maLop";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // xem Diem Hoc Sinh trong Lop theo mon
    public function getAllDiemHocSinhTheoMon($maLop, $maMon)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `diemlambai` 
        INNER JOIN `hocsinh` ON `diemlambai`.`maHocSinh`=`hocsinh`.`maHocSinh`
        INNER JOIN `de` ON `diemlambai`.`maDe` = `de`.`maDe`
        INNER JOIN `loaide` ON `de`.`maLoaiDe`=`loaide`.`maLoaiDe`
        INNER JOIN `lop` ON `lop`.`maLop` = `de`.`maLop`
        INNER JOIN `monhoc` ON `monhoc`.`maMonHoc`=`de`.`maMonHoc`
        WHERE `de`.`maLop` = $maLop AND `monhoc`.`maMonHoc`= $maMon";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
}
