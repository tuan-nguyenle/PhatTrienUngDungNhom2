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
        $this->maGiaoVien = $this->getMaGiaoVien($maTaiKhoan);
        $this->tenGiaoVien = $this->getTenGiaoVien($maTaiKhoan);
        // $this->anhDaiDien = $this->getAllThongTinGiaoVienQuaUsername()['anhDaiDien'];
        // $this->ngaySinh = $this->getAllThongTinGiaoVienQuaUsername()['ngaySinh'];
        // $this->diaChi = $this->getAllThongTinGiaoVienQuaUsername()['diaChi'];
        // $this->CCCD = $this->getAllThongTinGiaoVienQuaUsername()['CCCD'];
        // $this->email = $this->getAllThongTinGiaoVienQuaUsername()['email'];
        // $this->SDT = $this->getAllThongTinGiaoVienQuaUsername()['SDT'];
        // $this->gioiTinh = $this->getAllThongTinGiaoVienQuaUsername()['gioiTinh'];
        $this->maMonHoc = $this->getMaMonHoc($maTaiKhoan);
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
    public function getMaGiaoVien($username)
    {
        $modelGiaoVien = new mGiaoVien();
        $maGiaoVien = $modelGiaoVien->getMaGiaoVien($username)->fetch_assoc();
        return $maGiaoVien['maGiaoVien'];
    }
    // get ten Giao Vien
    public function getTenGiaoVien($username)
    {
        $modelGiaoVien = new mGiaoVien();
        $tenGiaoVien = $modelGiaoVien->getTenGiaoVien($username)->fetch_assoc();
        return $tenGiaoVien['tenGiaoVien'];
    }
    // getMaMonHoc
    public function getMaMonHoc($username)
    {
        $modelGiaoVien = new mGiaoVien();
        $maMonHoc = $modelGiaoVien->getMaMonHoc($username)->fetch_assoc();
        return $maMonHoc['maMonHoc'];
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
        return $modelGiaoVien->getAllDiemHocSinhTheoMon($maLop, $this->maMonHoc);
    }
}
