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
        $sql = "SELECT `taikhoan`.`maTaiKhoan`,`quantritruong`.`tenNguoiQuanTri` as `ten`,`quantritruong`.`email`,`quantritruong`.`SDT`,`quantritruong`.`diaChi`,`quantritruong`.`CCCD`,`quantritruong`.`ngaySinh` FROM `taikhoan` INNER JOIN `quantritruong` ON `taikhoan`.`maTaiKhoan`=`quantritruong`.`maTaiKhoan` WHERE `taikhoan`.`IDChucVu`= '4'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay Thong tin tai khoan qa chuc vu To Truong
    public function getAllUserByChucVuToTruong()
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `taikhoan`.`maTaiKhoan`,`giaovien`.`tenGiaoVien` as `ten`,`giaovien`.`email`,`giaovien`.`SDT`,`giaovien`.`diaChi`,`taikhoan`.`password`,`giaovien`.`CCCD`,`giaovien`.`ngaySinh`,`taikhoan`.`IDChucVu`,`monhoc`.`tenMonHoc` FROM `taikhoan` INNER JOIN `giaovien` ON `taikhoan`.`maTaiKhoan`=`giaovien`.`maTaiKhoan` INNER JOIN `monhoc` ON `giaovien`.`maMonHoc` = `monhoc`.`maMonHoc` WHERE `taikhoan`.`IDChucVu`= '1'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay Thong tin tai khoan qa chuc vu GiaoVien
    public function getAllUserByChucVuGiaoVien()
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `taikhoan`.`maTaiKhoan`,`giaovien`.`tenGiaoVien` as `ten`,`giaovien`.`email`,`giaovien`.`SDT`,`giaovien`.`diaChi`,`taikhoan`.`password`,`giaovien`.`CCCD`,`giaovien`.`ngaySinh`,`taikhoan`.`IDChucVu`,`monhoc`.`tenMonHoc` FROM `taikhoan` INNER JOIN `giaovien` ON `taikhoan`.`maTaiKhoan`=`giaovien`.`maTaiKhoan` INNER JOIN `monhoc` ON `giaovien`.`maMonHoc` = `monhoc`.`maMonHoc` WHERE `taikhoan`.`IDChucVu`= '2'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay Thong tin tai khoan qa chuc vu HocSinh
    public function getAllUserByChucVuHocSinh()
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `taikhoan`.`maTaiKhoan`,`hocSinh`.`tenhocSinh` as `ten`,`hocSinh`.`email`,`hocSinh`.`SDT`,`hocSinh`.`diaChi`,`hocSinh`.`ngaySinh`,`hocSinh`.`CCCD` FROM `taikhoan` INNER JOIN `hocSinh` ON `taikhoan`.`maTaiKhoan`=`hocSinh`.`maTaiKhoan` WHERE `taikhoan`.`IDChucVu`= '3'";
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
        $sql = "UPDATE `giaovien` SET `tenGiaoVien`= '$hoTen',`ngaySinh`='$ngaySinh',`diaChi`='$diaChi',`CCCD`='$CCCD',`email`='$email',`SDT`='$SDT' WHERE `maTaiKhoan`='$maTaiKhoan'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // thay doi thong tin Hoc Sinh
    public function updateThongTinHocSinh($maTaiKhoan, $hoTen, $CCCD, $ngaySinh, $email, $SDT, $diaChi)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "UPDATE `hocsinh` SET `tenHocSinh`= '$hoTen',`ngaySinh`='$ngaySinh',`diaChi`='$diaChi',`CCCD`='$CCCD',`email`='$email',`SDT`='$SDT' WHERE `maTaiKhoan`='$maTaiKhoan'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // thay doi thong tin Quan Tri Truong
    public function updateThongTinQuanTriTruong($maTaiKhoan, $hoTen, $CCCD, $ngaySinh, $email, $SDT, $diaChi)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "UPDATE `quantritruong` SET `tenNguoiQuantri`= '$hoTen',`ngaySinh`='$ngaySinh',`diaChi`='$diaChi',`CCCD`='$CCCD',`email`='$email',`SDT`='$SDT' WHERE `maTaiKhoan`='$maTaiKhoan'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // Thêm Giảng Viên
    public function themGiaoVien($maTaiKhoan, $tenGiaoVien, $CCCD, $ngaySinh, $email, $SDT, $diaChi, $gioiTinh, $maTruong, $chucVu, $maMonHoc)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        mysqli_query($connectDB->connect, "INSERT INTO `taikhoan` (`maTaiKhoan`, `password`, `IDChucVu`, `comment`, `maTruong`) VALUES (NULL, MD5('1111'), '$chucVu', '1111', '$maTruong')");
        $sql = "INSERT INTO `giaovien` (`tenGiaoVien`,`ngaySinh`, `gioiTinh`, `diaChi`, `CCCD`, `email`, `SDT`, `maTaiKhoan`, `maTruong`,`maMonHoc`) VALUES ('$tenGiaoVien','$ngaySinh', b'$gioiTinh', '$diaChi', '$CCCD', '$email', '$SDT', '$maTaiKhoan', '$maTruong','$maMonHoc')";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }

    // Thêm Học Sinh
    public function themHocSinh($maTaiKhoan, $tenHocSinh, $CCCD, $ngaySinh, $email, $SDT, $diaChi, $gioiTinh, $maTruong, $chucVu)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        mysqli_query($connectDB->connect, "INSERT INTO `taikhoan` (`maTaiKhoan`, `password`, `IDChucVu`, `comment`, `maTruong`) VALUES (NULL, MD5('1111'), '$chucVu', '1111', '$maTruong')");
        $sql = "INSERT INTO `hocsinh` (`tenHocSinh`,`ngaySinh`, `gioiTinh`, `diaChi`, `CCCD`, `email`, `SDT`, `maTaiKhoan`, `maTruong`) VALUES ('$tenHocSinh','$ngaySinh', b'$gioiTinh', '$diaChi', '$CCCD', '$email', '$SDT', '$maTaiKhoan', '$maTruong')";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // Thêm Quan Tri Truong
    public function themQuanTriTruong($maTaiKhoan, $tenNguoiQuanTri, $CCCD, $ngaySinh, $email, $SDT, $diaChi, $gioiTinh, $maTruong, $chucVu)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        mysqli_query($connectDB->connect, "INSERT INTO `taikhoan` (`maTaiKhoan`, `password`, `IDChucVu`, `comment`, `maTruong`) VALUES (NULL, MD5('1111'), '$chucVu', '1111', '$maTruong')");
        $sql = "INSERT INTO `quantritruong` (`tenNguoiQuanTri`,`ngaySinh`, `gioiTinh`, `diaChi`, `CCCD`, `email`, `SDT`, `maTaiKhoan`, `maTruong`) VALUES ('$tenNguoiQuanTri','$ngaySinh', b'$gioiTinh', '$diaChi', '$CCCD', '$email', '$SDT', '$maTaiKhoan', '$maTruong')";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // Xem Tài Khoản chưa có người dùng cuoi cung
    public function xemTaiKhoanCuoiCung()
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `taikhoan` ORDER BY `maTaiKhoan` DESC  LIMIT 1";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // xem tat ca cac mon hoc
    public function xemTatCaCacMonCoTrongHeThong()
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `monhoc`";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // Xoa giáo Viên
    public function xoaGiaoVien($maTaiKhoan)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        mysqli_query($connectDB->connect, "DELETE FROM `taikhoan` WHERE `maTaiKhoan` = '$maTaiKhoan'");
        $sql = "DELETE FROM `giaovien` WHERE `maTaiKhoan` = '$maTaiKhoan'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // Xoa Học Sinh
    public function xoaHocSinh($maTaiKhoan)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        mysqli_query($connectDB->connect, "DELETE FROM `taikhoan` WHERE `maTaiKhoan` = '$maTaiKhoan'");
        $sql = "DELETE FROM `hocsinh` WHERE `maTaiKhoan` = '$maTaiKhoan'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // Xoa Quản Trị Trường
    public function xoaQuanTriTruong($maTaiKhoan)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        mysqli_query($connectDB->connect, "DELETE FROM `taikhoan` WHERE `maTaiKhoan` = '$maTaiKhoan'");
        $sql = "DELETE FROM `quantritruong` WHERE `maTaiKhoan` = '$maTaiKhoan'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay toan bo thong tin giao vien trong truong
    public function getAllGiaoVienTheoTruong($maTruong)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `giaovien` INNER JOIN `taikhoan` ON `giaovien`.`maTaiKhoan` = `taikhoan`.`maTaiKhoan` INNER JOIN `monhoc` ON `giaovien`.`maMonHoc` = `monhoc`.`maMonHoc` WHERE `giaovien`.`maTruong` = '$maTruong'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay tat ca thong tin lop trong truong
    public function getAllLopGiaoVienKhongDay($maGiaoVien, $maTruong)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `lop` WHERE NOT EXISTS (SELECT `lopdamnhan`.`maLop` FROM `lopdamnhan` WHERE `lopdamnhan`.`maGiaoVien`= '$maGiaoVien' AND `lop`.`maLop` = `lopdamnhan`.`maLop` AND `lop`.`maTruong`='$maTruong')";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay thong tin chi tiet giao vien trong truong theo ma truong
    public function getChiTietGiaoVienTheoTruong($maGiaoVien, $maTruong)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `giaovien` WHERE `maGiaoVien`='$maGiaoVien' AND `maTruong` = '$maTruong'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay thong tin lop Giao Vien Dam Nham trong truong theo ma truong
    public function getChiTietLopGiaoVienDamNhamTheoTruong($maGiaoVien, $maTruong)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `lop` WHERE EXISTS (SELECT `lopdamnhan`.`maLop` FROM `lopdamnhan` WHERE `lopdamnhan`.`maGiaoVien`= '$maGiaoVien' AND `lop`.`maLop` = `lopdamnhan`.`maLop` AND `lop`.`maTruong`='$maTruong')";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // huy Lop Da Phan Cong
    public function huyLopGiaoVienDaPhanCong($maGiaoVien, $arrayLopDamNhan)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "DELETE FROM `lopdamnhan` WHERE `maGiaoVien` = '$maGiaoVien' AND `maLop` IN('" . implode("','", $arrayLopDamNhan) . "')";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // Phan Cong Vao Lop
    public function phanCongGiaoVien($maGiaoVien, $arrayLopMuonThem)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        foreach ($arrayLopMuonThem as $lop) {
            $sql = "INSERT INTO `lopdamnhan` (`maGiaoVien`,`maLop`) VALUES ('$maGiaoVien','$lop')";
            $result = mysqli_query($connectDB->connect, $sql);
        }
        $connectDB->closeDatabase();
        return $result;
    }
}
