<?php
include_once 'db.php';
class mQuanTriThanhPho
{
    public function login($username, $password)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `quantrithanhpho` WHERE `tenDangNhap` = '$username' and `matKhau` = '$password'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // get Thong Tin Khoi
    public function getThongTinKhoi()
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `khoi`";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // get cac mon dam nhan
    public function getMonDamNhan($maKhoi)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `monbatbuoc` INNER JOIN `monhoc` ON `monbatbuoc`.`maMonHoc` = `monhoc`.`maMonHoc` WHERE `maKhoi` = '$maKhoi'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay thong tin cac mon chua co
    public function getMonChuaDay($maKhoi)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `monhoc` WHERE NOT EXISTS (SELECT * FROM `monbatbuoc` WHERE `monbatbuoc`.`maMonHoc` = `monhoc`.`maMonHoc` AND `monbatbuoc`.`maKhoi`='$maKhoi')";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // them cac mon cho lop
    public function themMonHocMoiChoKhoi($maKhoi, $maMonHoc)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "INSERT INTO `monbatbuoc` VALUES ('$maKhoi', '$maMonHoc');";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // xoa cac mon cho lop
    public function xoaMonHocMoiChoKhoi($maKhoi, $maMonHoc)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "DELETE FROM `monbatbuoc` WHERE `maKhoi`='$maKhoi' AND `maMonHoc` ='$maMonHoc'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // get cac truong co trong he thong
    public function getAllTruong()
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT *, `truong`.`diaChi` AS 'DCT' FROM `truong` INNER JOIN `thanhpho` ON `truong`.`maThanhPho`=`thanhpho`.`maThanhPho` INNER JOIN `quantritruong` ON `quantritruong`.`maTruong` = `truong`.`maTruong`";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // get tat ca cac thanh pho
    public function getAllThanhPho()
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `thanhpho`";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // get tat ca cac thanh pho
    public function xemTaiKhoanCuoiCung()
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `taikhoan` ORDER BY `maTaiKhoan` DESC  LIMIT 1";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // get tat ca cac thanh pho
    public function xemTruongCuoiCung()
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `truong` ORDER BY `maTruong` DESC  LIMIT 1";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // them Truong Moi
    public function insertTruongMoi($tenTruong, $diaChi, $maThanhPho, $tenNguoiQuanTri, $email, $SDT, $diaChiNguoiQuanTri, $maTaiKhoan, $ngaySinh, $CCCD, $gioiTinh, $maTruong)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "INSERT INTO `truong`(`tenTruong`, `diaChi`, `maThanhPho`) VALUES ('$tenTruong', '$diaChi', '$maThanhPho')";
        $result = mysqli_query($connectDB->connect, $sql);

        $password = MD5('hahohi');
        mysqli_query($connectDB->connect, "INSERT INTO `taikhoan` (`password`, `IDChucVu`, `comment`, `maTruong`) VALUES ('$password', '4', 'hahohi', '$maTruong')");
        mysqli_query($connectDB->connect, "INSERT INTO `quantritruong`(`tenNguoiQuanTri`, `email`, `SDT`, `diaChi`, `maTaiKhoan`, `ngaySinh`, `CCCD`, `maTruong`, `gioiTinh`) VALUES ('$tenNguoiQuanTri','$email','$SDT','$diaChiNguoiQuanTri','$maTaiKhoan','$ngaySinh','$CCCD', '$maTruong',b'$gioiTinh')");
        $connectDB->closeDatabase();
        return $result;
    }
    // get 1 truong
    public function get1Truong($maTruong)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `truong` INNER JOIN `thanhpho` ON `truong`.`maThanhPho` = `thanhpho`.`maThanhPho` WHERE `maTruong`='$maTruong'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // update thong tin
    public function updateThongTinTruong($maTruong, $tenTruong, $diaChi)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "UPDATE `truong` SET `tenTruong`='$tenTruong',`diaChi`='$diaChi' WHERE `maTruong` = '$maTruong'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
}
