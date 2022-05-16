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
    // thay doi thong tin giang vien
    public function updateThongTinGiaoVien($maTaiKhoan, $hoTen, $CCCD, $ngaySinh, $email, $SDT, $diaChi)
    {
        $modelQuanTriTruong = new mQuanTriTruong();
        return $modelQuanTriTruong->updateThongTinGiaoVien($maTaiKhoan, $hoTen, $CCCD, $ngaySinh, $email, $SDT, $diaChi);
    }
    // thay doi thong tin HocSinh
    public function updateThongTinHocSinh($maTaiKhoan, $hoTen, $CCCD, $ngaySinh, $email, $SDT, $diaChi)
    {
        $modelQuanTriTruong = new mQuanTriTruong();
        return $modelQuanTriTruong->updateThongTinHocSinh($maTaiKhoan, $hoTen, $CCCD, $ngaySinh, $email, $SDT, $diaChi);
    }
    // thay doi thong tin quan Tri Truong
    public function updateThongTinQuanTriTruong($maTaiKhoan, $hoTen, $CCCD, $ngaySinh, $email, $SDT, $diaChi)
    {
        $modelQuanTriTruong = new mQuanTriTruong();
        return $modelQuanTriTruong->updateThongTinQuanTriTruong($maTaiKhoan, $hoTen, $CCCD, $ngaySinh, $email, $SDT, $diaChi);
    }
    // Thêm Giáo Viên
    public function themGiaoVien($maTaiKhoan, $tenGiaoVien, $CCCD, $ngaySinh, $email, $SDT, $diaChi, $gioiTinh, $maTruong, $chucVu, $maMonHoc)
    {
        $modelQuanTriTruong = new mQuanTriTruong();
        return $modelQuanTriTruong->themGiaoVien($maTaiKhoan, $tenGiaoVien, $CCCD, $ngaySinh, $email, $SDT, $diaChi, $gioiTinh, $maTruong, $chucVu, $maMonHoc);
    }
    // Thêm Học Sinh
    public function themHocSinh($maTaiKhoan, $tenHocSinh, $CCCD, $ngaySinh, $email, $SDT, $diaChi, $gioiTinh, $maTruong, $chucVu)
    {
        $modelQuanTriTruong = new mQuanTriTruong();
        return $modelQuanTriTruong->themHocSinh($maTaiKhoan, $tenHocSinh, $CCCD, $ngaySinh, $email, $SDT, $diaChi, $gioiTinh, $maTruong, $chucVu);
    }
    // Thêm Quan Tri
    public function themQuanTriTruong($maTaiKhoan, $tenNguoiQuanTri, $CCCD, $ngaySinh, $email, $SDT, $diaChi, $gioiTinh, $maTruong, $chucVu)
    {
        $modelQuanTriTruong = new mQuanTriTruong();
        return $modelQuanTriTruong->themQuanTriTruong($maTaiKhoan, $tenNguoiQuanTri, $CCCD, $ngaySinh, $email, $SDT, $diaChi, $gioiTinh, $maTruong, $chucVu);
    }
    // Xem Tài Khoản chưa có người dùng
    public function xemTaiKhoanCuoiCung()
    {
        $modelQuanTriTruong = new mQuanTriTruong();
        return $modelQuanTriTruong->xemTaiKhoanCuoiCung();
    }
    // xem tat ca cac mon hoc
    public function xemTatCaCacMonCoTrongHeThong()
    {
        $modelQuanTriTruong = new mQuanTriTruong();
        return $modelQuanTriTruong->xemTatCaCacMonCoTrongHeThong();
    }
    // xóa giáo viên
    public function xoaGiaoVien($maTaiKhoan)
    {
        $modelQuanTriTruong = new mQuanTriTruong();
        return $modelQuanTriTruong->xoaGiaoVien($maTaiKhoan);
    }
    // xóa học sinh
    public function xoaHocSinh($maTaiKhoan)
    {
        $modelQuanTriTruong = new mQuanTriTruong();
        return $modelQuanTriTruong->xoaHocSinh($maTaiKhoan);
    }
    // xóa quản trị trường
    public function xoaQuanTriTruong($maTaiKhoan)
    {
        $modelQuanTriTruong = new mQuanTriTruong();
        return $modelQuanTriTruong->xoaQuanTriTruong($maTaiKhoan);
    }
    // lay thong tin giao vien trong truong theo ma truong
    public function getAllGiaoVienTheoTruong($maTruong)
    {
        $modelQuanTriTruong = new mQuanTriTruong();
        return $modelQuanTriTruong->getAllGiaoVienTheoTruong($maTruong);
    }
    // lay thong tin chi tiet giao vien trong truong theo ma truong
    public function getChiTietGiaoVienTheoTruong($maGiaoVien, $maTruong)
    {
        $modelQuanTriTruong = new mQuanTriTruong();
        return $modelQuanTriTruong->getChiTietGiaoVienTheoTruong($maGiaoVien, $maTruong);
    }
    // lay tat ca thong tin lop trong truong
    public function getAllLopGiaoVienKhongDay($maGiaoVien, $maTruong)
    {
        $modelQuanTriTruong = new mQuanTriTruong();
        return $modelQuanTriTruong->getAllLopGiaoVienKhongDay($maGiaoVien, $maTruong);
    }
    // lay thong tin lop Giao Vien Dam Nham trong truong theo ma truong
    public function getChiTietLopGiaoVienDamNhamTheoTruong($maGiaoVien, $maTruong)
    {
        $modelQuanTriTruong = new mQuanTriTruong();
        return $modelQuanTriTruong->getChiTietLopGiaoVienDamNhamTheoTruong($maGiaoVien, $maTruong);
    }
    // huy lop da phan cong
    public function huyLopGiaoVienDaPhanCong($maGiaoVien, $arrayLopDamNhan)
    {
        $modelQuanTriTruong = new mQuanTriTruong();
        return $modelQuanTriTruong->huyLopGiaoVienDaPhanCong($maGiaoVien, $arrayLopDamNhan);
    }
    // phan cong giao vien
    public function phanCongGiaoVien($maGiaoVien, $arrayLopMuonThem)
    {
        $modelQuanTriTruong = new mQuanTriTruong();
        return $modelQuanTriTruong->phanCongGiaoVien($maGiaoVien, $arrayLopMuonThem);
    }
}
