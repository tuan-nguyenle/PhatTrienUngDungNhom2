<?php
class database
{
    // tạo biến kết nối
    private $__conn;
    // hàm kết nối database
    function databaseConnect()
    {
        // kiểm tra kết nối nếu chưa có thì kết nối
        if (!$this->__conn) {
            $this->__conn = mysqli_connect("localhost", "root", "");
            // set font truy vấn
            mysqli_query($this->__conn, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
        } else {
            echo "<script>alert('Không kết nối được với cơ sở dữ liệu')</script>";
        }
    }

    // hàm ngắt kết nối
    function databaseDisconnect()
    {
        // nếu đang kết nối thì ngắt
        if ($this->__conn) {
            mysqli_close($this->__conn);
        }
    }

    // hàm Insert
    public function insertDB($table, $data)
    {
        // kết nối db
        $this->__conn; // Lưu trữ danh sách field
        $field_list = '';
        // Lưu trữ danh sách giá trị tương ứng với field
        $value_list = '';
        // Lặp qua data
        foreach ($data as $key => $value) {
            $field_list .= ",$key";
            $value_list .= ",'" . mysqli_real_escape_string($this->__conn, $value) . "'";
        }
        // Vì sau vòng lặp các biến $field_list và $value_list sẽ thừa một dấu , nên ta sẽ dùng hàm trim để xóa đi
        $sql = 'INSERT INTO ' . $table . '(' . trim($field_list, ',') . ') VALUES (' . trim($value_list, ',') . ')';
        return mysqli_query($this->__conn, $sql);
    }

    // hàm update
    function update($table, $data, $where)
    {
        // Kết nối
        $this->databaseConnect();
        $sql = '';
        // Lặp qua data
        foreach ($data as $key => $value) {
            $sql .= "$key = '" . mysqli_real_escape_string($this->__conn, $value) . "',";
        }
        // Vì sau vòng lặp biến $sql sẽ thừa một dấu , nên ta sẽ dùng hàm trim để xóa đi
        $sql = 'UPDATE ' . $table . ' SET ' . trim($sql, ',') . ' WHERE ' . $where;
        return mysqli_query($this->__conn, $sql);
    }

    // Hàm delete
    function remove($table, $where)
    {
        // Kết nối
        $this->databaseConnect();
        // Delete
        $sql = "DELETE FROM $table WHERE $where";
        return mysqli_query($this->__conn, $sql);
    }

    // Hàm lấy danh sách
    function get_list($sql)
    {
        // Kết nối
        $this->databaseConnect();
        $result = mysqli_query($this->__conn, $sql);
        if (!$result) {
            die('Câu truy vấn bị sai');
        }
        $return = array();
        // Lặp qua kết quả để đưa vào mảng
        while ($row = mysqli_fetch_assoc($result)) {
            $return[] = $row;
        }
        // Xóa kết quả khỏi bộ nhớ
        mysqli_free_result($result);
        return $return;
    }

    // Lấy 1 đối tượng
    function get_row($sql)
    {
        // Kết nối
        $this->databaseConnect();
        $result = mysqli_query($this->__conn, $sql);
        if (!$result) {
            die('Câu truy vấn bị sai');
        }
        $row = mysqli_fetch_assoc($result);
        // Xóa kết quả khỏi bộ nhớ
        mysqli_free_result($result);
        if ($row) {
            return $row;
        }
        return false;
    }
}
