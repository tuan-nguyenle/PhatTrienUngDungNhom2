<?php
include_once './Model/mQuanTriThanhPho.php';
class quanTriThanhPho
{
    protected $tenDangNhap, $tenNguoiQuanTri, $matKhau, $diaChi, $SDT;
    // public function __construct() {
    //     $this->var = $var;
    // }
    public function login($tenNguoiQuanTri, $matKhau)
    {
        $matKhau = md5($matKhau);
        $modelQuanTri = new mQuanTriThanhPho();
        $user = $modelQuanTri->login($tenNguoiQuanTri, $matKhau);
        $row = mysqli_fetch_assoc($user);
        if ($row >= 1) {
            $_SESSION['tenNguoiQuanTri'] = $row['tenNguoiQuanTri'];
            $_SESSION['LoginSuccess'] = true;
        } else {
            echo "<script>alert('Sai Thông tin đăng nhập')</script>";
        }
    }
    // get thong tin khoi
    public function getThongTinKhoi()
    {
        $modelQuanTriThanhPho = new mQuanTriThanhPho();
        return $modelQuanTriThanhPho->getThongTinKhoi();
    }
    // get mon dam nhan
    public function getMonDamNhan($maKhoi)
    {
        $modelQuanTriThanhPho = new mQuanTriThanhPho();
        return $modelQuanTriThanhPho->getMonDamNhan($maKhoi);
    }
    // get Mon chua day
    public function getMonChuaDay($maKhoi)
    {
        $modelQuanTriThanhPho = new mQuanTriThanhPho();
        return $modelQuanTriThanhPho->getMonChuaDay($maKhoi);
    }
    // them mon hoc cho khoi
    public function themMonHocMoiChoKhoi($maKhoi, $maMonHoc)
    {
        $modelQuanTriThanhPho = new mQuanTriThanhPho();
        return $modelQuanTriThanhPho->themMonHocMoiChoKhoi($maKhoi, $maMonHoc);
    }
    // xoa mon hoc cho khoi
    public function xoaMonHocMoiChoKhoi($maKhoi, $maMonHoc)
    {
        $modelQuanTriThanhPho = new mQuanTriThanhPho();
        return $modelQuanTriThanhPho->xoaMonHocMoiChoKhoi($maKhoi, $maMonHoc);
    }
}
