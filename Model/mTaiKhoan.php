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
}
