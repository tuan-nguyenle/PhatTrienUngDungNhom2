<?php
include_once './Model/mQuanTriTruong.php';
class quanTriTruong
{
    /**
     * summary
     */
    protected $maTaiKhoan, $maTruong, $IDChucVu;
    //Define class nguoiQuan tri
    public function __construct($maTaiKhoan, $maTruong, $IDChucVu)
    {
        $this->maTaiKhoan = $maTaiKhoan;
        $this->maTruong = $maTruong;
        $this->IDChucVu = $IDChucVu;
    }
    // lay Tat Ca Thong tin nguoi Dung tu model
    public function getAllInfomationUser()
    {
        $modelQuanTriTruong = new mQuanTriTruong();
        return $modelQuanTriTruong->getAllInfomationUser($this->maTaiKhoan);
    }
    // lay Tat Ca Thong Tin Tai Khoan Co Chuc Vu la Quan Tri Truong
    public function getAllUserByChucVuQuanTriTruong()
    {
        $modelQuanTriTruong = new mQuanTriTruong();
        return $modelQuanTriTruong->getAllUserByChucVuQuanTriTruong();
    }
    // lay Tat Ca Thong Tin Tai Khoan Co Chuc Vu la To Truong
    public function getAllUserByChucVuToTruong()
    {
        $modelQuanTriTruong = new mQuanTriTruong();
        return $modelQuanTriTruong->getAllUserByChucVuToTruong();
    }
    // lay Tat Ca Thong Tin Tai Khoan Co Chuc Vu la Giao Vien
    public function getAllUserByChucVuGiaoVien()
    {
        $modelQuanTriTruong = new mQuanTriTruong();
        return $modelQuanTriTruong->getAllUserByChucVuGiaoVien();
    }
    // lay Tat Ca Thong Tin Tai Khoan Co Chuc Vu la Hoc Sinh
    public function getAllUserByChucVuHocSinh()
    {
        $modelQuanTriTruong = new mQuanTriTruong();
        return $modelQuanTriTruong->getAllUserByChucVuHocSinh();
    }
    // lay Tat Ca Chuc Vu co trong he thong
    public function getAllChucVu()
    {
        $modelQuanTriTruong = new mQuanTriTruong();
        return $modelQuanTriTruong->getAllChucVu();
    }
}
