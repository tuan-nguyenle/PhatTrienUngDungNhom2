<?php
include_once './Model/mHocSinh.php';
/**
 * Model:Học Sinh
 * Author : Tuân
 * Mail : Lê Nguyễn tuân
 */
class hocSinh
{
    /**
     * summary
     */
    protected $maHocSinh, $tenHocSinh, $anhDaiDien, $ngaySinh, $diaChi, $email, $SDT, $gioiTinh, $maTaiKhoan, $maTruong, $IDChucVu;

    //Define class HocSinh
    public function __construct($maTaiKhoan, $maTruong, $IDChucVu)
    {
        // $this->maHocSinh = $maHocSinh;
        // $this->tenHocSinh = $tenHocSinh;
        // $this->anhDaiDien = $anhDaiDien;
        // $this->ngaySinh = $ngaySinh;
        // $this->diaChi = $diaChi;
        // $this->email = $email;
        // $this->SDT = $SDT;
        $this->maTaiKhoan = $maTaiKhoan;
        $this->maTruong = $maTruong;
        $this->IDChucVu = $IDChucVu;
    }
    // get All thong tin
    public function getAllThongTinHocSinhQuaUsername()
    {
        $modelHocSinh = new mHocSinh();
        return $modelHocSinh->getAllThongTinHocSinhQuaUsername($this->maTaiKhoan);
    }
    // get Ma Giao Vien
    public function getMaHocSinh()
    {
        $modelHocSinh = new mHocSinh();
        $maHocSinh = $modelHocSinh->getMaHocSinh($this->maTaiKhoan);
        return mysqli_fetch_assoc($maHocSinh)['maHocSinh'];
    }
    // get ten Giao Vien
    public function getTenHocSinh()
    {
        $modelHocSinh = new mHocSinh();
        $tenHocSinh = $modelHocSinh->getTenHocSinh($this->maTaiKhoan);
        return mysqli_fetch_assoc($tenHocSinh)['tenHocSinh'];
    }
    // getAnhDaidien
    public function getAnhDaiDien()
    {
        $modelHocSinh = new mHocSinh();
        $anhDaiDien = $modelHocSinh->getAnhDaiDien($this->maTaiKhoan);
        return mysqli_fetch_assoc($anhDaiDien)['anhDaiDien'];
    }
    // getNgaySinh
    public function getNgaySinh()
    {
        $modelHocSinh = new mHocSinh();
        $ngaySinh = $modelHocSinh->getNgaySinh($this->maTaiKhoan);
        return mysqli_fetch_assoc($ngaySinh)['ngaySinh'];
    }
    // getDiaChi
    public function getDiaChi()
    {
        $modelHocSinh = new mHocSinh();
        $diaChi = $modelHocSinh->getDiaChi($this->maTaiKhoan);
        return mysqli_fetch_assoc($diaChi)['diaChi'];
    }
    // getEmail
    public function getEmail()
    {
        $modelHocSinh = new mHocSinh();
        $email = $modelHocSinh->getEmail($this->maTaiKhoan);
        return mysqli_fetch_assoc($email)['email'];
    }
    // getSDT
    public function getSDT()
    {
        $modelHocSinh = new mHocSinh();
        $SDT = $modelHocSinh->getSDT($this->maTaiKhoan);
        return mysqli_fetch_assoc($SDT)['SDT'];
    }
    // getGioiTinh
    public function getGioiTinh()
    {
        $modelHocSinh = new mHocSinh();
        $gioiTinh = $modelHocSinh->getGioiTinh($this->maTaiKhoan);
        return mysqli_fetch_assoc($gioiTinh)['gioiTinh'];
    }
    // lay cac mon dang hoc
    public function getCacMonDangHoc()
    {
        $modelHocSinh = new mHocSinh();
        $dangHoc = $modelHocSinh->getCacMonDangHoc($this->getMaHocSinh());
        return $dangHoc;
    }
    // lay cac bai kiểm tra Tu luan
    public function getCacBaiKiemTraTuLuan($maMonHoc)
    {
        $modelHocSinh = new mHocSinh();
        $dangHoc = $modelHocSinh->getCacBaiKiemTraTuLuan($this->getMaHocSinh(), $maMonHoc);
        return $dangHoc;
    }
    // lay cac bai kiểm tra TracNghiem
    public function getCacBaiKiemTraTracNghiem($maMonHoc)
    {
        $modelHocSinh = new mHocSinh();
        $dangHoc = $modelHocSinh->getCacBaiKiemTraTracNghiem($this->getMaHocSinh(), $maMonHoc);
        return $dangHoc;
    }
    // get thong tin de kiem tra
    public function getThongTinBaiKiemTraTuLuan($maDe)
    {
        $modelHocSinh = new mHocSinh();
        $de = $modelHocSinh->getThongTinBaiKiemTraTuLuan($maDe);
        return $de;
    }
    // get thong tin de kiem tra trac Nghiem
    public function getThongTinBaiKiemTraTracNghiem($maDe)
    {
        $modelHocSinh = new mHocSinh();
        $de = $modelHocSinh->getThongTinBaiKiemTraTracNghiem($maDe);
        return $de;
    }
    // nop bai kiem tra
    public function nopBaiKiemTraTuLuan($maDe, $duongDan, $tinhTrang, $maHocSinh)
    {
        $modelHocSinh = new mHocSinh();
        $file = $modelHocSinh->nopBaiKiemTraTuLuan($maDe, $duongDan, $tinhTrang, $maHocSinh);
        return $file;
    }
    // cap nhat duong dan
    public function capNhapDuongDan($maDe, $duongDan, $tinhTrang, $maHocSinh)
    {
        $modelHocSinh = new mHocSinh();
        $fileUpdate = $modelHocSinh->capNhapDuongDan($maDe, $duongDan, $tinhTrang, $maHocSinh);
        return $fileUpdate;
    }
    // xem bai da nop
    public function xemBaiDaNop($maDe, $maHocSinh)
    {
        $modelHocSinh = new mHocSinh();
        $fileUpdated = $modelHocSinh->xemBaiDaNop($maDe, $maHocSinh);
        return $fileUpdated;
    }
    // xem deim trac nghiem
    public function xemDiemTracNghiem($maDe)
    {
        $modelHocSinh = new mHocSinh();
        return $modelHocSinh->xemBaiDaNop($maDe, $this->getMaHocSinh());
    }
    // xem cau hoi bai kiem tra
    public function getChiTietDeKiemTraTracNghiem($maDe)
    {
        $modelHocSinh = new mHocSinh();
        return $modelHocSinh->getChiTietDeKiemTraTracNghiem($maDe);
    }
}
