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
}
