<?php
include_once 'db.php';
class mTruong
{
    public function getThongTinTruongQuaID($maTruong)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `truong` WHERE `maTruong` = $maTruong";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // get thong tin khoi
    public function getThongTinKhoi()
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `khoi`";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // get thong tin cac loai hinh thuc kiem tra
    public function getThongTinCacLoaiHinhThuc()
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `loaide`";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
}
