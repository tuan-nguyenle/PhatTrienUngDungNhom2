<?php
include_once 'db.php';
class mHocSinh
{
    // lay tat ca thong tin Hoc Sinh
    public function getAllThongTinHocSinhQuaUsername($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `hocSinh` WHERE `maTaiKhoan` = '$username'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }

    // lay ma HocSinh
    public function getMaHocSinh($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `maHocSinh` FROM `HocSinh` WHERE `maTaiKhoan` ='$username'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay ten HocSinh
    public function getTenHocSinh($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `tenHocSinh` FROM `HocSinh` WHERE `maTaiKhoan` ='$username'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay anh dai dien
    public function getAnhDaiDien($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `anhDaiDien` FROM `HocSinh` WHERE `maTaiKhoan` ='$username'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay ngay sinh
    public function getNgaySinh($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `ngaySinh` FROM `HocSinh` WHERE `maTaiKhoan` ='$username'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay dia chi
    public function getDiaChi($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `diaChi` FROM `HocSinh` WHERE `maTaiKhoan` ='$username'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay cccd
    public function getCCCD($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `CCCD` FROM `HocSinh` WHERE `maTaiKhoan` ='$username'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay email
    public function getEmail($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `email` FROM `HocSinh` WHERE `maTaiKhoan` ='$username'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay sdt
    public function getSDT($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `SDT` FROM `HocSinh` WHERE `maTaiKhoan` ='$username'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay gioitinh
    public function getGioiTinh($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `gioiTinh` FROM `HocSinh` WHERE `maTaiKhoan` ='$username'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // get tat ca mon dang hoc
    public function getCacMonDangHoc($maHocSinh)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT DISTINCT `monhoc`.`tenMonHoc`,`monhoc`.`maMonHoc` FROM `monbatbuoc` 
        INNER JOIN `khoi` ON `monbatbuoc`.`maKhoi`=`khoi`.`maKhoi` 
        INNER JOIN `lop` ON `khoi`.`maKhoi`=`lop`.`maKhoi` 
        INNER JOIN `chitietlop` ON `lop`.`maLop` = `chitietlop`.`maLop` 
        INNER JOIN `hocsinh` ON `chitietlop`.`maHocSinh` = `hocsinh`.`maHocSinh`
        INNER JOIN `monhoc` ON `monbatbuoc`.`maMonHoc`=`monhoc`.`maMonHoc` 
        WHERE `hocsinh`.`maHocSinh` = '$maHocSinh'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // get tât ca mon kiem tra
    public function getCacBaiKiemTra($maHocSinh, $maMonHoc)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT DISTINCT `de`.`tenDe`,`de`.`maDe`,`detuluan`.`cauHoi`,`loaide`.`moTa` FROM `detuluan` 
        INNER JOIN `de` ON `detuluan`.`maDe`=`de`.`maDe` 
        INNER JOIN `loaide` ON `de`.`maLoaiDe` = `loaide`.`maLoaiDe` 
        INNER JOIN `lop` ON `de`.`maLop`=`lop`.`maLop` 
        INNER JOIN `chitietlop` ON `lop`.`maLop`=`chitietlop`.`maLop` 
        INNER JOIN `hocsinh` ON `chitietlop`.`maHocSinh` = `hocsinh`.`maHocSinh`
        WHERE `hocsinh`.`maHocSinh` = '$maHocSinh' AND `maMonHoc`= '$maMonHoc'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // get thong tin de kiem tra
    public function getThongTinBaiKiemTraTuLuan($maDe)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `de` INNER JOIN `detuluan` ON `de`.`maDe`=`detuluan`.`maDe` INNER JOIN `monhoc` ON `de`.`maMonHoc`=`monhoc`.`maMonHoc` INNER JOIN `loaide` ON `loaide`.`maLoaiDe` = `de`.`maLoaiDe` WHERE `de`.`maDe`='$maDe'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // nop bai kiem tra
    public function nopBaiKiemTraTuLuan($maDe, $duongDan, $tinhTrang, $maHocSinh)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "INSERT INTO `file`(`maDe`, `duongDan`, `tinhTrangNop`, `maHocSinh`) VALUES ('$maDe','$duongDan','$tinhTrang','$maHocSinh')";
        echo $sql;
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // nop bai kiem tra
    public function capNhapDuongDan($maDe, $duongDan, $tinhTrang, $maHocSinh)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "UPDATE `file` SET `duongDan` = '$duongDan',`tinhTrangNop` = '$tinhTrang' WHERE `file`.`maHocSinh` = '$maHocSinh' AND `file`.`maDe`='$maDe'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // xem bai da nop
    public function xemBaiDaNop($maDe, $maHocSinh)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `file` INNER JOIN `de` ON `file`.`maDe`=`de`.`maDe` WHERE `file`.`maHocSinh` = '$maHocSinh' AND `file`.`maDe`='$maDe'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
}
