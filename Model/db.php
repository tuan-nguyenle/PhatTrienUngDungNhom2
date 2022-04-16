<?php
class database
{
    // tao bien ket noi
    public $connect;
    // tao bien ket qua tra ve khi truy van
    public function connectDatabase()
    {
        $this->connect = mysqli_connect("localhost", "root", "", "e-learning");
        if (!$this->connect) {
            echo "<script>alert('Kết Nối thất bại')</script>";
        } else {
            mysqli_set_charset($this->connect, 'utf-8');
        }
        return $this->connect;
    }
    // dong database
    public function closeDatabase()
    {
        mysqli_close($this->connect);
    }
}
