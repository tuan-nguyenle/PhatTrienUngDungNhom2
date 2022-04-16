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
        // $this->maGiaoVien = $this->getAllThongTinGiaoVienQuaUsername()['maGiaoVien'];
        // $this->tenGiaoVien = $this->getAllThongTinGiaoVienQuaUsername()['tenGiaoVien'];
        // $this->anhDaiDien = $this->getAllThongTinGiaoVienQuaUsername()['anhDaiDien'];
        // $this->ngaySinh = $this->getAllThongTinGiaoVienQuaUsername()['ngaySinh'];
        // $this->diaChi = $this->getAllThongTinGiaoVienQuaUsername()['diaChi'];
        // $this->CCCD = $this->getAllThongTinGiaoVienQuaUsername()['CCCD'];
        // $this->email = $this->getAllThongTinGiaoVienQuaUsername()['email'];
        // $this->SDT = $this->getAllThongTinGiaoVienQuaUsername()['SDT'];
        // $this->gioiTinh = $this->getAllThongTinGiaoVienQuaUsername()['gioiTinh'];
        // $this->maMonHoc = $this->getAllThongTinGiaoVienQuaUsername()['maMonHoc'];
        $this->maTaiKhoan = $maTaiKhoan;
        $this->maTruong = $maTruong;
        $this->IDChucVu = $IDChucVu;
    }
    // get All thong tin
    public function getAllThongTinGiaoVienQuaUsername()
    {
        $modelGiaoVien = new mGiaoVien();
        $dataGV = $modelGiaoVien->getAllThongTinGiaoVienQuaUsername($this->maTaiKhoan);
        $row = mysqli_fetch_assoc($dataGV);
        return $row;
    }
}
