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
    // get tât ca mon kiem tra TuLuan
    public function getCacBaiKiemTraTuLuan($maHocSinh, $maMonHoc)
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
    // get tât ca mon kiem tra TracNghiem
    public function getCacBaiKiemTraTracNghiem($maHocSinh, $maMonHoc)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT DISTINCT `de`.`tenDe`,`de`.`maDe`,`loaide`.`moTa` FROM `chitietdekiemtratracnghiem` INNER JOIN `de` ON `chitietdekiemtratracnghiem`.`maDe`=`de`.`maDe` INNER JOIN `loaide` ON `de`.`maLoaiDe` = `loaide`.`maLoaiDe` INNER JOIN `lop` ON `de`.`maLop`=`lop`.`maLop` INNER JOIN `chitietlop` ON `lop`.`maLop`=`chitietlop`.`maLop` INNER JOIN `hocsinh` ON `chitietlop`.`maHocSinh` = `hocsinh`.`maHocSinh`
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
    // get thong tin de kiem tra trac Nghiem
    public function getThongTinBaiKiemTraTracNghiem($maDe)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `de` INNER JOIN `monhoc` ON `de`.`maMonHoc`=`monhoc`.`maMonHoc` INNER JOIN `loaide` ON `loaide`.`maLoaiDe` = `de`.`maLoaiDe` WHERE `de`.`maDe`='$maDe'";
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
    // xem Diem TracNghiem
    public function xemDiemTracNghiem($maDe, $maHocSinh)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `diemlambai` WHERE `diemlambai`.`maHocSinh` = '$maHocSinh' AND `diemlambai`.`maDe`='$maDe'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // xem cau hoi bai kiem tra
    public function getChiTietDeKiemTraTracNghiem($maDe)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `chitietdekiemtratracnghiem` INNER JOIN `nganhangcauhoitracnghiem` ON `chitietdekiemtratracnghiem`.`maCauHoi`=`nganhangcauhoitracnghiem`.`maCauHoi` WHERE `chitietdekiemtratracnghiem`.`maDe` = '$maDe'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // tinh Diem
    public function tinhDiem($maHocSinh, $maDe, $diem)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "INSERT INTO `diemlambai`(`maHocSinh`, `maDe`, `diem`) VALUES ('$maHocSinh','$maDe','$diem')";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // getPassWord
    public function getPassWord($maTaiKhoan)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `taikhoan` WHERE `taikhoan`.`maTaiKhoan` = '$maTaiKhoan'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // update thong tin nguoi dung
    public function updateInfoUser($tenHocSinh, $anh, $CCCD, $ngaySinh, $diaChi, $email, $SDT, $maTaiKhoan)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "UPDATE `hocsinh` SET `tenHocSinh`='$tenHocSinh',`anhDaiDien`='$anh',`CCCD`='$CCCD',`ngaySinh`='$ngaySinh',`diaChi`='$diaChi',`email`='$email',`SDT`='$SDT' WHERE `maTaiKhoan`='$maTaiKhoan'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
}
