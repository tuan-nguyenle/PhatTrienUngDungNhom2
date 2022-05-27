<?php
include_once 'db.php';
class mTaiKhoan
{
    public function login($username, $password)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `taikhoan` WHERE `maTaiKhoan` = $username and `password` like '$password'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // get MK
    public function getMK($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `taikhoan` WHERE `maTaiKhoan` = $username";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    public function updatePassword($username, $password)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $passwordMH = md5($password);
        $sql = "UPDATE `taikhoan` SET `password`='$passwordMH',`comment`='$password' WHERE `maTaiKhoan`='$username'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
}
