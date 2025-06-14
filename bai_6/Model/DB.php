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

    // Thực hiện truy vấn lấy tất cả bản ghi trong CSDL
    public function getData($query, $getAll = true) {
        // Chuẩn bị thực thi câu lệnh SQL
        $stmt = $this -> connection -> prepare($query);
        // Thực thi 
        $stmt -> execute(); // thực thi 

        if($getAll) {
            // Lấy tất cả 
            return $stmt -> fetchAll(); // trả về 1 mảng gồm tất cả bản ghi của bảng
        }

        return $stmt -> fetch();
    }

    // 
    public function insertData($query, $tenSP, $giaSP, $soLuongSP) {
        // Chuẩn bị thực thi câu lệnh SQL
        // INSERT INTO san_pham (ten_san_pham, gia_tien, so_luong) VALUES (ao phao, 5, 100000)
        $stmt = $this->connection->prepare($query);
        //echo $query;
        return $stmt->execute([$tenSP, $giaSP, $soLuongSP]);
    }

    public function getDataById($query, $productId) {
        $stmt = $this->connection->prepare($query);
        $stmt->execute([$productId]);

        return $stmt -> fetch();
    }

    public function updateDataById($query, $productId, $tenSP, $giaSP, $soLuongSP) {
        $stmt = $this -> connection -> prepare($query);
        return $stmt -> execute([$tenSP, $giaSP, $soLuongSP, $productId]);
    }

    public function deleteProductById($query, $productId) {
        $stmt = $this -> connection -> prepare($query);
        return $stmt -> execute([$productId]);
    }

}
?>