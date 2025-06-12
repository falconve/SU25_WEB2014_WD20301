<?php 
require_once("Model/ProductModel.php");

class ProductController {
    public function __construct()
    {
        
    }

    // Hiển thị dữ liệu từ model sang view
    public function index() {
        
        // Khởi tạo đối tượng ProductModel
        $product = new ProductModel();
        // Sử dụng phương thức getProduct để lấy 
        // MẢNG chứa tất cả bản ghi trong bảng san_pham
        $products = $product -> getProduct();

        // giao diện trang sản phẩm
        require_once('views/product.php');
    }

    // Trang thêm sản phẩm
    public function addProduct() {
        // giao diện trang thêm sản phẩm
        require_once('views/add_product.php');
    }

    
    public function postProduct() {
        $tenSP = $_POST['ten_sp']; // ao phao
        $giaSP = $_POST['gia_sp']; // 5
        $soLuongSP = $_POST['so_luong_sp']; // 100000


        $product = new ProductModel();
        // Thêm sản phẩm
        $product -> insertProduct($tenSP, $giaSP, $soLuongSP);
        // điều hướng về trang danh sách sản phẩm sau khi thêm mới
        header('Location: index.php?page=product');
    }

    // Hiển thị chi tiết của 1 sản phẩm 
    public function updateProduct() {
        // Lấy id của product từ thanh url 
        $productId = $_GET['productId'];

        $product = new ProductModel();

        // Lấy thông tin của bản ghi trong bảng san_pham theo id
        $productById = $product -> getProductById($productId);
        require_once('views/update-product.php');
    }

    // Cập nhật lại thông tin sản phẩm
    public function editProduct() {
        // Lấy id của product từ thanh url 
        //$productId = $_GET['productId'];

        // Lấy ra thông tin cần sửa
        $productId = $_POST['id_sp']; 
        $tenSP = $_POST['ten_sp']; 
        $giaSP = $_POST['gia_sp']; 
        $soLuongSP = $_POST['so_luong_sp']; 


        $product = new ProductModel();

        // Lấy thông tin của bản ghi trong bảng san_pham theo id
        $productById = $product -> updateProductById($productId, $tenSP, $giaSP, $soLuongSP);

        // Điều hướng người dùng về trang danh sách sản phẩm 
        header('Location: index.php?page=product');
    }
}
?>