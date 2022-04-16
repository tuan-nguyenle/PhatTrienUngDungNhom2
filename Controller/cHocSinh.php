<?php
include_once '';
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
    protected $maHocSinh;
    protected $tenHocSinh;
    protected $anhDaiDien;
    protected $ngaySinh;
    protected $diaChi;
    protected $email;
    protected $SDT;
    protected $gioiTinh;
    protected $maTaiKhoan;
    protected $maTruong;

    //Define class HocSinh
    public function __construct($maHocSinh, $tenHocSinh, $anhDaiDien, $ngaySinh, $diaChi, $email, $SDT, $gioiTinh, $maTaiKhoan, $maTruong)
    {
        $this->maHocSinh = $maHocSinh;
        $this->tenHocSinh = $tenHocSinh;
        $this->anhDaiDien = $anhDaiDien;
        $this->ngaySinh = $ngaySinh;
        $this->diaChi = $diaChi;
        $this->email = $email;
        $this->SDT = $SDT;
        $this->gioiTinh = $gioiTinh;
        $this->maTaiKhoan = $maTaiKhoan;
        $this->maTruong = $maTruong;
    }
}
