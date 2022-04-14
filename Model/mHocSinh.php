<?php
include 'db.php';
class mHocSinh {
    public function getMaTaiKhoan($maTaiKhoan)
    {
        $db = new database();
        if ($db->databaseConnect($conn)) {
            $query = "SELECT * FROM `hocSinh` WHERE `maTaiKhoan` = '$maTaiKhoan'";
            $con = mysqli_query($conn, $query);
            $db->databaseClose($conn);
            return $con;
        } else {
            return false;
        }
    }
    
}
?>