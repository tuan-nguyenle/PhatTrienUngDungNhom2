<?php
include_once './Model/mGiaoVien.php';
class giaoVien
{
    /**
     * summary
     */
    protected $maGiaoVien, $tenGiaoVien, $anhDaiDien, $ngaySinh, $diaChi, $CCCD, $email, $SDT, $gioiTinh, $maMonHoc, $maTaiKhoan, $maTruong, $IDChucVu;
    //Define class giaoVien
    public function __construct($maTaiKhoan, $maTruong, $IDChucVu)
    {
        $this->maTaiKhoan = $maTaiKhoan;
        $this->maTruong = $maTruong;
        $this->IDChucVu = $IDChucVu;
    }
    // get All thong tin
    public function getAllThongTinGiaoVienQuaUsername()
    {
        $modelGiaoVien = new mGiaoVien();
        $dataGV = $modelGiaoVien->getAllThongTinGiaoVienQuaUsername($this->maTaiKhoan);
        return $dataGV;
    }
    // get Ma Giao Vien
    public function getMaGiaoVien()
    {
        $modelGiaoVien = new mGiaoVien();
        $maGiaoVien = $modelGiaoVien->getMaGiaoVien($this->maTaiKhoan);
        return mysqli_fetch_assoc($maGiaoVien)['maGiaoVien'];
    }
    // get ten Giao Vien
    public function getTenGiaoVien()
    {
        $modelGiaoVien = new mGiaoVien();
        $tenGiaoVien = $modelGiaoVien->getTenGiaoVien($this->maTaiKhoan);
        return mysqli_fetch_assoc($tenGiaoVien)['tenGiaoVien'];
    }
    // getMaMonHoc
    public function getMaMonHoc()
    {
        $modelGiaoVien = new mGiaoVien();
        $maMonHoc = $modelGiaoVien->getMaMonHoc($this->maTaiKhoan);
        return mysqli_fetch_assoc($maMonHoc)['maMonHoc'];
    }
    // get Ten Mon Hoc
    public function getTenMon()
    {
        $modelGiaoVien = new mGiaoVien();
        $tenMonHoc = $modelGiaoVien->getTenMonHoc($this->getMaMonHoc());
        return mysqli_fetch_assoc($tenMonHoc)['tenMonHoc'];
    }
    // getAnhDaidien
    public function getAnhDaiDien()
    {
        $modelGiaoVien = new mGiaoVien();
        $anhDaiDien = $modelGiaoVien->getAnhDaiDien($this->maTaiKhoan);
        return mysqli_fetch_assoc($anhDaiDien)['anhDaiDien'];
    }
    // getNgaySinh
    public function getNgaySinh()
    {
        $modelGiaoVien = new mGiaoVien();
        $ngaySinh = $modelGiaoVien->getNgaySinh($this->maTaiKhoan);
        return mysqli_fetch_assoc($ngaySinh)['ngaySinh'];
    }
    // getDiaChi
    public function getDiaChi()
    {
        $modelGiaoVien = new mGiaoVien();
        $diaChi = $modelGiaoVien->getDiaChi($this->maTaiKhoan);
        return mysqli_fetch_assoc($diaChi)['diaChi'];
    }
    // getCCCD
    public function getCCCD()
    {
        $modelGiaoVien = new mGiaoVien();
        $CCCD = $modelGiaoVien->getCCCD($this->maTaiKhoan);
        return mysqli_fetch_assoc($CCCD)['CCCD'];
    }
    // getEmail
    public function getEmail()
    {
        $modelGiaoVien = new mGiaoVien();
        $email = $modelGiaoVien->getEmail($this->maTaiKhoan);
        return mysqli_fetch_assoc($email)['email'];
    }
    // getSDT
    public function getSDT()
    {
        $modelGiaoVien = new mGiaoVien();
        $SDT = $modelGiaoVien->getSDT($this->maTaiKhoan);
        return mysqli_fetch_assoc($SDT)['SDT'];
    }
    // getGioiTinh
    public function getGioiTinh()
    {
        $modelGiaoVien = new mGiaoVien();
        $gioiTinh = $modelGiaoVien->getGioiTinh($this->maTaiKhoan);
        return mysqli_fetch_assoc($gioiTinh)['gioiTinh'];
    }
    // get Tat ca cac lop dam nhan
    public function getAllLopDamNhan()
    {
        $modelGiaoVien = new mGiaoVien();
        $dataGV = $modelGiaoVien->getAllLopDamNhan($this->getMaGiaoVien($this->maTaiKhoan));
        return $dataGV;
    }
    // get hoc sinh trong lop
    public function getDanhSachLop($maLop)
    {
        $modelGiaoVien = new mGiaoVien();
        return $modelGiaoVien->getAllDanhSachLop($maLop);
    }
    // get Diem Cua Lop Theo Mon
    public function getDiemLopTheoMon($maLop)
    {
        $modelGiaoVien = new mGiaoVien();
        return $modelGiaoVien->getAllDiemHocSinhTheoMon($maLop, $this->getMaMonHoc());
    }
    // tao Cau Hoi
    public function taoCauHoiTracNghiem($maKhoi, $chuong, $cauHoi, $doKho, $dapAnA, $dapAnB, $dapAnC, $dapAnD, $dapAnDung)
    {
        $modelGiaoVien = new mGiaoVien();
        return $modelGiaoVien->taoCauHoiTracNghiem($this->getMaMonHoc(), $maKhoi, $chuong, $cauHoi, $doKho, $dapAnA, $dapAnB, $dapAnC, $dapAnD, $dapAnDung);
    }
    // xem số lượng các câu hỏi chưa duyệt
    public function getSoLuongCauHoiChuaDuyet($maKhoi, $chuong, $doKho, $date)
    {
        $modelGiaoVien = new mGiaoVien();
        return $modelGiaoVien->getSoLuongCauHoiChuaDuyet($this->maTruong, $this->getMaMonHoc(), $maKhoi, $chuong, $doKho, $date);
    }
    // Xem tất cả các câu hỏi chưa được duyệt
    public function xemTatCaCauhoiChuaDuyet($maKhoi, $chuong, $doKho, $date, $start, $limit)
    {
        $modelGiaoVien = new mGiaoVien();
        return $modelGiaoVien->xemTatCaCauhoiChuaDuyet($this->maTruong, $this->getMaMonHoc(), $maKhoi, $chuong, $doKho, $date, $start, $limit);
    }
    // Duyệt câu hỏi
    public function duyetCauHoi($listCauHoi)
    {
        $modelGiaoVien = new mGiaoVien();
        echo "<script>alert('hi)</script>";

        return $modelGiaoVien->duyetCauHoi($listCauHoi);
    }
}
