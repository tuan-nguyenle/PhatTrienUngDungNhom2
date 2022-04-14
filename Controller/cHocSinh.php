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


    /**
     * Get summary
     */
    public function getMaHocSinh()
    {
        return $this->maHocSinh;
    }

    /**
     * Set summary
     *
     * @return  self
     */
    public function setMaHocSinh($maHocSinh)
    {
        $this->maHocSinh = $maHocSinh;

        return $this;
    }

    /**
     * Get the value of tenHocSinh
     */
    public function getTenHocSinh()
    {
        return $this->tenHocSinh;
    }

    /**
     * Set the value of tenHocSinh
     *
     * @return  self
     */
    public function setTenHocSinh($tenHocSinh)
    {
        $this->tenHocSinh = $tenHocSinh;

        return $this;
    }

    /**
     * Get the value of anhDaiDien
     */
    public function getAnhDaiDien()
    {
        return $this->anhDaiDien;
    }

    /**
     * Set the value of anhDaiDien
     *
     * @return  self
     */
    public function setAnhDaiDien($anhDaiDien)
    {
        $this->anhDaiDien = $anhDaiDien;

        return $this;
    }

    /**
     * Get the value of ngaySinh
     */
    public function getNgaySinh()
    {
        return $this->ngaySinh;
    }

    /**
     * Set the value of ngaySinh
     *
     * @return  self
     */
    public function setNgaySinh($ngaySinh)
    {
        $this->ngaySinh = $ngaySinh;

        return $this;
    }

    /**
     * Get the value of diaChi
     */
    public function getDiaChi()
    {
        return $this->diaChi;
    }

    /**
     * Set the value of diaChi
     *
     * @return  self
     */
    public function setDiaChi($diaChi)
    {
        $this->diaChi = $diaChi;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of SDT
     */
    public function getSDT()
    {
        return $this->SDT;
    }

    /**
     * Set the value of SDT
     *
     * @return  self
     */
    public function setSDT($SDT)
    {
        $this->SDT = $SDT;

        return $this;
    }

    /**
     * Get the value of gioiTinh
     */
    public function getGioiTinh()
    {
        return $this->gioiTinh;
    }

    /**
     * Set the value of gioiTinh
     *
     * @return  self
     */
    public function setGioiTinh($gioiTinh)
    {
        $this->gioiTinh = $gioiTinh;

        return $this;
    }

    /**
     * Get the value of maTaiKhoan
     */
    public function getMaTaiKhoan()
    {
        $cHocSinh = new 
        return $this->maTaiKhoan;
    }

    /**
     * Set the value of maTaiKhoan
     *
     * @return  self
     */
    public function setMaTaiKhoan($maTaiKhoan)
    {
        $this->maTaiKhoan = $maTaiKhoan;

        return $this;
    }

    /**
     * Get the value of maTruong
     */
    public function getMaTruong()
    {
        return $this->maTruong;
    }

    /**
     * Set the value of maTruong
     *
     * @return  self
     */
    public function setMaTruong($maTruong)
    {
        $this->maTruong = $maTruong;

        return $this;
    }
}
