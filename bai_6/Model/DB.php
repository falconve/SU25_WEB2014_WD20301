<?php 
require_once('env.php');

class DB {
    public $connection;


    // Hàm luôn được chạy khi gọi tới class DB
    public function __construct()
    {
        // Chuỗi kết nối
        $this -> connection = new PDO(
            "mysql:host=" . db_host . ";dbname=" . db_name , db_user , db_password);
    }

    // Thực hiện truy vấn lấy bản ghi trong CSDL
    public function getData($query, $getAll = true) {
        // Chuẩn bị thực thi câu lệnh SQL
        $stmt = $this -> connection -> prepare($query);
        // Thực thi 
        $stmt -> execute();

        if($getAll) {
            // Lấy tất cả 
            return $stmt -> fetchAll();
        }

        return $stmt -> fetch();
    }

}
?>