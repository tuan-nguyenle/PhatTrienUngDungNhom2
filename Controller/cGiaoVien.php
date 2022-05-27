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
    public function getDiemLopTheoMonVaDe($maLop, $maDe)
    {
        $modelGiaoVien = new mGiaoVien();
        return $modelGiaoVien->getDiemLopTheoMonVaDe($maLop, $this->getMaMonHoc(), $maDe);
    }
    // tao Cau Hoi
    public function taoCauHoiTracNghiem($maKhoi, $chuong, $cauHoi, $doKho, $dapAnA, $dapAnB, $dapAnC, $dapAnD, $dapAnDung)
    {
        $modelGiaoVien = new mGiaoVien();
        return $modelGiaoVien->taoCauHoiTracNghiem($this->getMaMonHoc(), $maKhoi, $chuong, $cauHoi, $doKho, $dapAnA, $dapAnB, $dapAnC, $dapAnD, $dapAnDung);
    }
    // xem số lượng các câu hỏi chưa duyệt da loc
    public function getSoLuongCauHoiChuaDuyet($maKhoi, $chuong, $doKho, $date)
    {
        $modelGiaoVien = new mGiaoVien();
        return $modelGiaoVien->getSoLuongCauHoiChuaDuyet($this->maTruong, $this->getMaMonHoc(), $maKhoi, $chuong, $doKho, $date);
    }
    // Xem tất cả các câu hỏi chưa được duyệt da loc
    public function xemTatCaCauhoiChuaDuyet($maKhoi, $chuong, $doKho, $date, $start, $limit)
    {
        $modelGiaoVien = new mGiaoVien();
        return $modelGiaoVien->xemTatCaCauhoiChuaDuyet($this->maTruong, $this->getMaMonHoc(), $maKhoi, $chuong, $doKho, $date, $start, $limit);
    }
    // xem Tất cả số lượng các câu hỏi chưa duyệt theo mã trường
    public function getAllSoLuongCauHoiChuaDuyet()
    {
        $modelGiaoVien = new mGiaoVien();
        return $modelGiaoVien->getAllSoLuongCauHoiChuaDuyet($this->maTruong);
    }
    // Xem tất cả các câu hỏi chưa được duyệt theo mã trường
    public function xemTatCaCacCauhoiChuaDuyet($start, $limit)
    {
        $modelGiaoVien = new mGiaoVien();
        return $modelGiaoVien->xemTatCaCacCauhoiChuaDuyet($this->maTruong, $start, $limit);
    }
    // Xem tất cả các câu hỏi chưa được duyệt theo mã trường và môn
    public function xemTatCaCacCauhoiDaDuyet($maLop, $start, $limit)
    {
        $modelGiaoVien = new mGiaoVien();
        return $modelGiaoVien->xemTatCaCacCauhoiDaDuyet($maLop, $this->getMaMonHoc(), $this->maTruong, $start, $limit);
    }
    // Xem Số lượng các câu hỏi chưa được duyệt theo mã trường
    public function getAllSoLuongCauHoiDaDuyet($maLop)
    {
        $modelGiaoVien = new mGiaoVien();
        return $modelGiaoVien->getAllSoLuongCauHoiDaDuyet($maLop, $this->getMaMonHoc(), $this->maTruong);
    }
    // Duyệt câu hỏi
    public function duyetCauHoi($listCauHoi)
    {
        $modelGiaoVien = new mGiaoVien();
        return $modelGiaoVien->duyetCauHoi($listCauHoi);
    }
    // xem tất cả các hình thức
    public function getAllHinhThuc()
    {
        $modelGiaoVien = new mGiaoVien();
        return $modelGiaoVien->getAllHinhThuc();
    }
    // xem số lượng các câu hỏi da duyệt va loc
    public function getSoLuongCauHoiDuyetAndLoc($maLop, $chuong, $doKho, $date)
    {
        $modelGiaoVien = new mGiaoVien();
        return $modelGiaoVien->getSoLuongCauHoiDuyetAndLoc($this->maTruong, $this->getMaMonHoc(), $maLop, $chuong, $doKho, $date);
    }
    public function xemTatCaCauhoiDaDuyetAndLoc($maLop, $chuong, $doKho, $date, $start, $limit)
    {
        $modelGiaoVien = new mGiaoVien();
        return $modelGiaoVien->xemTatCaCauhoiDaDuyetAndLoc($this->maTruong, $this->getMaMonHoc(), $maLop, $chuong, $doKho, $date, $start, $limit);
    }
    // xem chi tiết câu hỏi
    public function selectChiTietCauHoi($maCauHoi)
    {
        $modelGiaoVien = new mGiaoVien();
        return $modelGiaoVien->selectChiTietCauHoi($maCauHoi);
    }
    // taoBaiKiemTra
    public function insertBaiKiemTraTracNghiem($tenDe, $ngayLam, $hanNop, $ThoiGianLam, $soCauHoi, $maLoaiDe, $maLop, $arrayCauHoi)
    {
        $modelGiaoVien = new mGiaoVien();
        return $modelGiaoVien->insertBaiKiemTraTracNghiem($tenDe, $ngayLam, $hanNop, $this->getMaMonHoc(), $ThoiGianLam, $soCauHoi, $maLoaiDe, $maLop, $arrayCauHoi);
    }
    // taoBaiKiemTra
    public function insertBaiKiemTraTuLuan($tenDe, $ngayLam, $hanNop, $ThoiGianLam, $maLoaiDe, $maLop, $cauHoiTuLuan)
    {
        $modelGiaoVien = new mGiaoVien();
        return $modelGiaoVien->insertBaiKiemTraTuLuan($tenDe, $ngayLam, $hanNop, $this->getMaMonHoc(), $ThoiGianLam, $maLoaiDe, $maLop, $cauHoiTuLuan);
    }
    // lay de kiem tra da ra
    public function getAllDeKiemTraDaRa($maLop)
    {
        $modelGiaoVien = new mGiaoVien();
        return $modelGiaoVien->getAllDeKiemTraDaRa($this->getMaMonHoc(), $maLop);
    }
    // get cac Hoc Sinh Chưa làm bài trong lớp
    public function getHocSinhChuaLamBai($maLop, $maDe)
    {
        $modelGiaoVien = new mGiaoVien();
        return $modelGiaoVien->getHocSinhChuaLamBai($this->getMaMonHoc(), $maLop, $maDe);
    }
    // Chấm Điểm
    public function chamDiemBaiKiemTra($maHocSinh, $maDe, $diem)
    {
        $modelGiaoVien = new mGiaoVien();
        return $modelGiaoVien->chamDiemBaiKiemTra($maHocSinh, $maDe, $diem);
    }
    // Down bai tu luan
    public function taiBaiTuLuan($maHocSinh, $maDe)
    {
        $modelGiaoVien = new mGiaoVien();
        return $modelGiaoVien->taiBaiTuLuan($maHocSinh, $maDe);
    }
    // getPassWord
    public function getPassWord()
    {
        $modelGiaoVien = new mGiaoVien();
        return mysqli_fetch_assoc($modelGiaoVien->getPassWord($this->maTaiKhoan))['password'];
    }
    // update thong tin nguoi dung
    public function updateInfoUser($tenGiaoVien, $anh, $CCCD, $ngaySinh, $diaChi, $email, $SDT)
    {
        $mGiaoVien = new mGiaoVien();
        return $mGiaoVien->updateInfoUser($tenGiaoVien, $anh, $CCCD, $ngaySinh, $diaChi, $email, $SDT, $this->maTaiKhoan);
    }
}
