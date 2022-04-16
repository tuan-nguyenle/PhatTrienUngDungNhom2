<?php
class database
{
    // tao bien ket noi
    public $connect;
    // tao bien ket qua tra ve khi truy van
    public function connectDatabase()
    {
        $this->connect = mysqli_connect("localhost", "root", "", "e-learning");
        mysqli_set_charset($this->connect, 'utf8');
        if (!$this->connect) {
            echo "<script>alert('Kết Nối thất bại')</script>";
        }
        return $this->connect;
    }
    // dong database
    public function closeDatabase()
    {
        mysqli_close($this->connect);
    }
}
