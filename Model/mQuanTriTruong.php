<?php
include_once 'db.php';
class mQuanTriTruong
{
    // get tat ca thong tin qua username
    public function getAllInfomationUser($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `quantritruong` WHERE `maTaiKhoan` = $username";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay Thong tin tai khoan qa chuc vu Quan Tri Truong
    public function getAllUserByChucVuQuanTriTruong()
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `taikhoan`.`maTaiKhoan`,`quantritruong`.`tenNguoiQuanTri` as `ten`,`quantritruong`.`email`,`quantritruong`.`SDT`,`quantritruong`.`diaChi` FROM `taikhoan` INNER JOIN `quantritruong` ON `taikhoan`.`maTaiKhoan`=`quantritruong`.`maTaiKhoan` WHERE `taikhoan`.`IDChucVu`= '4'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay Thong tin tai khoan qa chuc vu To Truong
    public function getAllUserByChucVuToTruong()
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `taikhoan`.`maTaiKhoan`,`giaovien`.`tenGiaoVien` as `ten`,`giaovien`.`email`,`giaovien`.`SDT`,`giaovien`.`diaChi`,`taikhoan`.`password`,`giaovien`.`CCCD`,`giaovien`.`ngaySinh`,`taikhoan`.`IDChucVu` FROM `taikhoan` INNER JOIN `giaovien` ON `taikhoan`.`maTaiKhoan`=`giaovien`.`maTaiKhoan` WHERE `taikhoan`.`IDChucVu`= '1'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay Thong tin tai khoan qa chuc vu GiaoVien
    public function getAllUserByChucVuGiaoVien()
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `taikhoan`.`maTaiKhoan`,`giaovien`.`tenGiaoVien` as `ten`,`giaovien`.`email`,`giaovien`.`SDT`,`giaovien`.`diaChi`,`taikhoan`.`password`,`giaovien`.`CCCD`,`giaovien`.`ngaySinh`,`taikhoan`.`IDChucVu` FROM `taikhoan` INNER JOIN `giaovien` ON `taikhoan`.`maTaiKhoan`=`giaovien`.`maTaiKhoan` WHERE `taikhoan`.`IDChucVu`= '2'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay Thong tin tai khoan qa chuc vu HocSinh
    public function getAllUserByChucVuHocSinh()
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `taikhoan`.`maTaiKhoan`,`hocSinh`.`tenhocSinh` as `ten`,`hocSinh`.`email`,`hocSinh`.`SDT`,`hocSinh`.`diaChi` FROM `taikhoan` INNER JOIN `hocSinh` ON `taikhoan`.`maTaiKhoan`=`hocSinh`.`maTaiKhoan` WHERE `taikhoan`.`IDChucVu`= '3'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay Thong tin tat ca chuc vu
    public function getAllChucVu()
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `chucvu`";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // thay doi thong tin giang vien
    public function updateThongTinGiaoVien($maTaiKhoan, $hoTen, $CCCD, $ngaySinh, $email, $SDT, $diaChi)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "UPDATE `giaovien` SET `tenGiaoVien`='$hoTen',`ngaySinh`='$ngaySinh',`diaChi`='$diaChi',`CCCD`='$CCCD',`email`='$email',`SDT`= '$SDT' WHERE `maTaiKhoan`='$maTaiKhoan'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
}
