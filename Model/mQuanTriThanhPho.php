<?php
include 'db.php';
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
}
