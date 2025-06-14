<?php 

require_once('DB.php');

class ProductModel extends DB {
    // Hiển thị tất cả bản ghi trong bảng san_pham
    public function getProduct() {
        // là câu lệnh dùng để lấy tất cả bản ghi trong bảng san_pham
        $query = "SELECT * FROM san_pham";
        return $this -> getData($query); // trả về tất cả bản ghi của bảng san_pham
    }

    // Thêm sản phẩm vào bảng san_pham
    public function insertProduct($tenSP, $giaSP, $soLuongSP)
    {
        
        $query = "INSERT INTO san_pham(ten_san_pham, gia_tien, so_luong) VALUES (?, ?, ?)";

        return $this -> insertData($query, $tenSP, $giaSP, $soLuongSP);
    }

    // Lấy thông tin sản phẩm theo id 
    public function getProductById($productId) {
        $query = "SELECT * FROM san_pham WHERE id = ?";

        return $this -> getDataById($query, $productId);

    }

    // Cập nhật thông tin sản phẩm theo id 
    public function updateProductById($productId, $tenSP, $giaSP, $soLuongSP) {
        $query = "UPDATE san_pham SET ten_san_pham = ?, gia_tien = ?, so_luong = ? WHERE id = ?";
        return $this -> updateDataById($query, $productId, $tenSP, $giaSP, $soLuongSP);
    }

    // Xoá sản phẩm 
    public function deleteProduct($productId) {
        $query = "DELETE FROM san_pham WHERE id = ?";
        return $this -> deleteProductById($query, $productId);
    }
}

?>
