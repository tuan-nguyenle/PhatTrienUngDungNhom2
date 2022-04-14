<?php
class database
{
    function databaseConnect(&$conn)
    {
        $conn = mysqli_connect("localhost", "root", "");
        if ($conn) {
            $conn->set_charset("utf8");
            return mysqli_select_db($conn, "e-learning");
        } else {
            echo "<script>alert('Không kết nối được với cơ sở dữ liệu')</script>";
        }
    }
    function databaseClose($conn)
    {
        mysqli_close($conn);
    }
}
