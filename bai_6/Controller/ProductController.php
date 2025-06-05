<?php 
require_once("Model/ProductModel.php");

class ProductController {
    public function __construct()
    {
        
    }

    public function index() {
        
        // Khởi tạo đối tượng ProductModel
        $product = new ProductModel();
        // Sử dụng phương thức getProduct để lấy 
        // tất cả bản ghi trong bảng san_pham
        $products = $product -> getProduct();

        require_once('views/product.php');
    }
}
?>