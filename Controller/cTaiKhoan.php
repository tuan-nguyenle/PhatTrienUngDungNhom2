<?php
include_once './Model/mTaikhoan.php';
class cTaiKhoan
{
    function login($username, $password)
    {
        $password = md5($password);
        $modelTaiKhoan = new mTaiKhoan();
        $user = $modelTaiKhoan->login($username, $password);
        $row = mysqli_fetch_assoc($user);
        if ($row >= 1) {
            $_SESSION['maTaiKhoan'] = $row['maTaiKhoan'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['maTruong'] = $row['maTruong'];
            $_SESSION['IDChucVu'] = $row['IDChucVu'];
            $_SESSION['LoginSuccess'] = true;
        } else {
            echo "<script>alert('Sai Thông tin đăng nhập')</script>";
        }
    }
}
