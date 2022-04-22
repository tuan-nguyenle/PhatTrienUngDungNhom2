<?php
include_once './Model/mTruong.php';
class truong
{
    private $maTruong;
    function __construct($maTruong) {
        $this->maTruong = $maTruong;
    }
    public function getThongTinTruong()
    {
        $truong = new mTruong();
        return $truong->getThongTinTruongQuaID($this->maTruong);
    }
}
