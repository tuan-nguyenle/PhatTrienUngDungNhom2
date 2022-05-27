<?php
include_once 'db.php';
class mGiaoVien
{
    // lay tat ca thong tin giao vien
    public function getAllThongTinGiaoVienQuaUsername($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `giaovien` WHERE `maTaiKhoan` = $username";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay ma giao vien
    public function getMaGiaoVien($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `maGiaoVien` FROM `giaovien` WHERE `maTaiKhoan` = $username";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay ten giao vien
    public function getTenGiaoVien($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `tenGiaoVien` FROM `giaovien` WHERE `maTaiKhoan` = $username";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay ma mon hoc
    public function getMaMonHoc($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `maMonHoc` FROM `giaovien` WHERE `maTaiKhoan` = $username";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // get Ten Mon Hoc
    public function getTenMonHoc($maMon)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `monhoc`.`tenMonHoc` FROM `monhoc` WHERE `monhoc`.`maMonHoc` = $maMon";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay anh dai dien
    public function getAnhDaiDien($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `anhDaiDien` FROM `giaovien` WHERE `maTaiKhoan` = $username";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay ngay sinh
    public function getNgaySinh($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `ngaySinh` FROM `giaovien` WHERE `maTaiKhoan` = $username";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay dia chi
    public function getDiaChi($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `diaChi` FROM `giaovien` WHERE `maTaiKhoan` = $username";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay cccd
    public function getCCCD($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `CCCD` FROM `giaovien` WHERE `maTaiKhoan` = $username";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay email
    public function getEmail($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `email` FROM `giaovien` WHERE `maTaiKhoan` = $username";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay sdt
    public function getSDT($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `SDT` FROM `giaovien` WHERE `maTaiKhoan` = $username";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay gioitinh
    public function getGioiTinh($username)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT `gioiTinh` FROM `giaovien` WHERE `maTaiKhoan` = $username";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay tat ca lop ma giao vien dam nhan
    public function getAllLopDamNhan($maGiaoVien)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `lopdamnhan`,`lop`,`truong`,`thanhpho` WHERE `lopdamnhan`.`maLop` = `lop`.`maLop` AND `lop`.`maTruong` = `truong`.`maTruong` AND `thanhpho`.`maThanhPho`=`truong`.`maThanhPho`
        AND `lopdamnhan`.`maGiaoVien` = $maGiaoVien";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay danh sach hoc sinh co trong lop
    public function getAllDanhSachLop($maLop)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `chitietlop`,`lop`,`hocsinh` WHERE `chitietlop`.`maLop` = `lop`.`maLop` AND `chitietlop`.`maHocSinh` = `hocsinh`.`maHocSinh` AND `chitietlop`.`maLop` = $maLop";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // xem Diem Hoc Sinh trong Lop theo mon
    public function getDiemLopTheoMonVaDe($maLop, $maMon, $maDe)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `diemlambai` 
        INNER JOIN `hocsinh` ON `diemlambai`.`maHocSinh`=`hocsinh`.`maHocSinh`
        INNER JOIN `de` ON `diemlambai`.`maDe` = `de`.`maDe`
        INNER JOIN `loaide` ON `de`.`maLoaiDe`=`loaide`.`maLoaiDe`
        INNER JOIN `lop` ON `lop`.`maLop` = `de`.`maLop`
        INNER JOIN `monhoc` ON `monhoc`.`maMonHoc`=`de`.`maMonHoc`
        WHERE `de`.`maLop` = '$maLop' AND `monhoc`.`maMonHoc`= '$maMon' AND `de`.`maDe`='$maDe'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // them cau hoi
    public function taoCauHoiTracNghiem($mamonHoc, $maKhoi, $chuong, $cauHoi, $doKho, $dapAnA, $dapAnB, $dapAnC, $dapAnD, $dapAnDung)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "INSERT INTO `nganhangcauhoitracnghiem` (`maCauHoi`, `maMonHoc`, `maKhoi`, `chuong`, `cauHoi`, `doKho`, `trangThai`, `dapAnA`, `dapAnB`, `dapAnC`, `dapAnD`, `dapAnDung`) VALUES (NULL,'$mamonHoc', '$maKhoi','$chuong','$cauHoi','$doKho', b'0','$dapAnA','$dapAnB','$dapAnC','$dapAnD','$dapAnDung')";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // xem số lượng các câu hỏi chưa duyệt
    public function getSoLuongCauHoiChuaDuyet($maTruong, $mamonHoc, $maKhoi, $chuong, $doKho, $date)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT count(*) AS soLuong FROM `nganhangcauhoitracnghiem` WHERE `trangThai` = '0' AND `maTruong`='$maTruong' AND `maMonHoc` = '$mamonHoc' AND `maKhoi` = '$maKhoi' AND `chuong` = '$chuong' AND `doKho`='$doKho' AND `ngayTao` >= '$date'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // xem tất cả câu hỏi chưa duyệt
    public function xemTatCaCauhoiChuaDuyet($maTruong, $mamonHoc, $maKhoi, $chuong, $doKho, $date, $start, $limit)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `nganhangcauhoitracnghiem` WHERE `trangThai` = '0' AND `maTruong`='$maTruong' AND `maMonHoc` = '$mamonHoc' AND `maKhoi` = '$maKhoi' AND `chuong` = '$chuong' AND `doKho`='$doKho' AND `ngayTao` >= '$date' LIMIT $start,$limit";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // Duyệt câu hỏi
    public function duyetCauHoi($listCauHoi)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "UPDATE `nganhangcauhoitracnghiem` SET `trangThai`= b'1' WHERE `maCauHoi` IN ('" . implode("','", $listCauHoi) . "')";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // xem Tất cả số lượng các câu hỏi chưa duyệt theo mã trường
    public function getAllSoLuongCauHoiChuaDuyet($maTruong)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT count(*) AS soLuong FROM `nganhangcauhoitracnghiem` WHERE `trangThai` = '0' AND `maTruong`='$maTruong'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // Xem tất cả các câu hỏi chưa được duyệt theo mã trường
    public function xemTatCaCacCauhoiChuaDuyet($maTruong, $start, $limit)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `nganhangcauhoitracnghiem` WHERE `trangThai` = '0' AND `maTruong`='$maTruong' LIMIT $start,$limit";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // Xem tất cả các câu hỏi được duyệt theo mã trường
    public function xemTatCaCacCauhoiDaDuyet($maLop, $mamonHoc, $maTruong, $start, $limit)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `nganhangcauhoitracnghiem` WHERE `trangThai` = '1' AND `maKhoi`=(SELECT `maKhoi` FROM `lop` WHERE `maLop`='$maLop') AND `maMonHoc`='$mamonHoc' AND `maTruong`='$maTruong' LIMIT $start,$limit";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // xem Tất cả số lượng các câu hỏi chưa duyệt theo mã trường
    public function getAllSoLuongCauHoiDaDuyet($maLop, $mamonHoc, $maTruong)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT count(*) AS soLuong FROM `nganhangcauhoitracnghiem` WHERE `trangThai` = '1' AND `maKhoi`=(SELECT `maKhoi` FROM `lop` WHERE `maLop`='$maLop') AND `maMonHoc`='$mamonHoc' AND `maTruong`='$maTruong'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // xem Tất cả số các hình thức
    public function getAllHinhThuc()
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `LoaiDe`";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // xem số lượng các câu hỏi da duyệt va loc
    public function getSoLuongCauHoiDuyetAndLoc($maTruong, $maMonHoc, $maLop, $chuong, $doKho, $date)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT count(*) AS soLuong FROM `nganhangcauhoitracnghiem` WHERE `trangThai` = '1' AND `maTruong`='$maTruong' AND `maMonHoc` = '$maMonHoc' AND `maKhoi`=(SELECT `maKhoi` FROM `lop` WHERE `maLop`='$maLop') AND `chuong` = '$chuong' AND `doKho`='$doKho' AND `ngayTao` >= '$date'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // xem tất cả câu hỏi Da Duyet va loc
    public function xemTatCaCauhoiDaDuyetAndLoc($maTruong, $mamonHoc, $maLop, $chuong, $doKho, $date, $start, $limit)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `nganhangcauhoitracnghiem` WHERE `trangThai` = '1' AND `maTruong`='$maTruong' AND `maMonHoc` = '$mamonHoc' AND `maKhoi`=(SELECT `maKhoi` FROM `lop` WHERE `maLop`='$maLop') AND `chuong` = '$chuong' AND `doKho`='$doKho' AND `ngayTao` >= '$date' LIMIT $start,$limit";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // xem chi tiết câu hỏi
    public function selectChiTietCauHoi($maCauHoi)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `nganhangcauhoitracnghiem` WHERE `maCauHoi` = '$maCauHoi'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // Them Bai Trac Nghiem
    public function insertBaiKiemTraTracNghiem($tenDe, $ngayLam, $hanNop, $maMonHoc, $ThoiGianLam, $soCauHoi, $maLoaiDe, $maLop, $arrayCauHoi)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "INSERT INTO `de`(`tenDe`, `ngayLam`, `hanNop`, `maKhoi`, `maMonHoc`, `ThoiGianLam`,`soCauHoi`, `maLoaiDe`, `maLop`,`type`) VALUES ('$tenDe', '$ngayLam', '$hanNop', (SELECT `khoi`.`maKhoi` FROM `khoi` INNER JOIN `lop` ON `lop`.`maKhoi` = `khoi`.`maKhoi` WHERE `lop`.`maLop` ='$maLop'), '$maMonHoc', '$ThoiGianLam','$soCauHoi', '$maLoaiDe', '$maLop','Đề Trắc Nghiệm')";
        $result = mysqli_query($connectDB->connect, $sql);
        foreach ($arrayCauHoi as $cauHoi) {
            $sql = "INSERT INTO `chitietdekiemtratracnghiem`(`maDe`, `maCauHoi`) VALUES ((SELECT `de`.`maDe` FROM `de` ORDER BY `de`.`maDe` DESC LIMIT 0,1),'$cauHoi')";
            mysqli_query($connectDB->connect, $sql);
        }
        $connectDB->closeDatabase();
        return $result;
    }
    // lay de kiem tra da ra
    public function getAllDeKiemTraDaRa($maMonHoc, $maLop)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `de` INNER JOIN `loaide` ON `de`.`maLoaiDe`=`loaide`.`maLoaiDe` WHERE `maMonHoc` = '$maMonHoc' AND `maLop` = '$maLop'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // lay nhung hoc sinh chua lam bai
    public function getHocSinhChuaLamBai($maMonHoc, $maLop, $maDe)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `hocsinh` INNER JOIN `chitietlop` ON `chitietlop`.`maHocSinh` = `hocsinh`.`maHocSinh` WHERE NOT EXISTS (SELECT * FROM `diemlambai` INNER JOIN `de` ON `diemlambai`.`maDe`=`de`.`maDe` WHERE `de`.`maDe`='$maDe' AND `de`.`maMonHoc`= '$maMonHoc' AND `diemlambai`.`maHocSinh`=`hocsinh`.`maHocSinh`) AND `chitietlop`.`maLop`='$maLop'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // Chấm Điểm
    public function chamDiemBaiKiemTra($maHocSinh, $maDe, $diem)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "INSERT INTO `diemlambai`(`maHocSinh`, `maDe`, `diem`) VALUES ('$maHocSinh','$maDe','$diem')";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // Them Bai Tự Luận
    public function insertBaiKiemTraTuLuan($tenDe, $ngayLam, $hanNop, $maMonHoc, $ThoiGianLam, $maLoaiDe, $maLop, $cauHoiTuLuan)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "INSERT INTO `de`(`tenDe`, `ngayLam`, `hanNop`, `maKhoi`, `maMonHoc`, `ThoiGianLam`,`soCauHoi`, `maLoaiDe`, `maLop`,`type`) VALUES ('$tenDe', '$ngayLam', '$hanNop', (SELECT `khoi`.`maKhoi` FROM `khoi` INNER JOIN `lop` ON `lop`.`maKhoi` = `khoi`.`maKhoi` WHERE `lop`.`maLop` ='$maLop'), '$maMonHoc', '$ThoiGianLam','1', '$maLoaiDe', '$maLop','Đề Tự Luận')";
        $result = mysqli_query($connectDB->connect, $sql);
        mysqli_query($connectDB->connect, "INSERT INTO `detuluan`(`maDe`, `cauHoi`) VALUES ((SELECT `de`.`maDe` FROM `de` ORDER BY `de`.`maDe` DESC LIMIT 0,1),'$cauHoiTuLuan')");
        $connectDB->closeDatabase();
        return $result;
    }
    // Down bai tu luan
    public function taiBaiTuLuan($maHocSinh, $maDe)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `file` WHERE `maHocSinh` = '$maHocSinh' AND `maDe` ='$maDe'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // getPassWord
    public function getPassWord($maTaiKhoan)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "SELECT * FROM `taikhoan` WHERE `taikhoan`.`maTaiKhoan` = '$maTaiKhoan'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
    // update
    public function updateInfoUser($tenGiaoVien, $anh, $CCCD, $ngaySinh, $diaChi, $email, $SDT, $maTaiKhoan)
    {
        $connectDB = new database();
        $connectDB->connectDatabase();
        $sql = "UPDATE `giaovien` SET `tenGiaoVien`='$tenGiaoVien',`anhDaiDien`='$anh',`CCCD`='$CCCD',`ngaySinh`='$ngaySinh',`diaChi`='$diaChi',`email`='$email',`SDT`='$SDT' WHERE `maTaiKhoan`='$maTaiKhoan'";
        $result = mysqli_query($connectDB->connect, $sql);
        $connectDB->closeDatabase();
        return $result;
    }
}
