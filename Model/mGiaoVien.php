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
    public function getAllDiemHocSinhTheoMon($maLop,$maMon)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `diemlambai`,`hocsinh`,`de`,`loaide` WHERE `diemlambai`.`maHocSinh`=`hocsinh`.`maHocSinh` AND `diemlambai`.`maDe` = `de`.`maDe` AND `de`.`maLoaiDe`=`loaide`.`maLoaiDe` AND `de`.`maMonHoc` = $maMon AND `de`.`maLop` = $maLop";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
}
