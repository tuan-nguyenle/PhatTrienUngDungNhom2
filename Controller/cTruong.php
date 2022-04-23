<?php
include_once './Model/mTruong.php';
class truong
{
    private $maTruong;
    function __construct($maTruong) {
        $this->maTruong = $maTruong;
    }
    // get Thong Tin Truong
    public function getThongTinTruong()
    {
        $truong = new mTruong();
        return $truong->getThongTinTruongQuaID($this->maTruong);
    }
    // get Khoi
    public function getAllKhoi()
    {
        $truong = new mTruong();
        return $truong->getThongTinKhoi();
    }
    // get Loai De
    public function getAllLoaiDe()
    {
        $loaiDe = new mTruong();
        return $loaiDe->getThongTinCacLoaiHinhThuc();
    }
}
