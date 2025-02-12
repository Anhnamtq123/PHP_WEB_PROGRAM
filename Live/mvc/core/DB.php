<?php
class DB{

    public $conn;
    protected $host = "localhost";
    protected $username= "root";
    protected $password= "";
    protected $dbname = "mvc";

    function __construct()
    {
        try {
            // Tạo kết nối PDO
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->username, $this->password);
            
            // Cấu hình lỗi PDO để hiển thị Exception khi có lỗi
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // echo "Kết nối thành công!";
        } catch (PDOException $e) {
            // echo "Kết nối thất bại:" . $e->getMessage();
        }
    }
}
?>