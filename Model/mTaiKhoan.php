<?php
include 'db.php';
class mTaiKhoan
{
    public function login($maTaiKhoan, $matKhau)
    {
        $db = new database();
        if ($db->databaseConnect($conn)) {
            $query = "SELECT * FROM `taikhoan` WHERE `maTaiKhoan` = '$maTaiKhoan' and `password` = '$matKhau'";
            $con = mysqli_query($conn, $query);
            $db->databaseClose($conn);
            return $con;
        } else {
            return false;
        }
    }
}
