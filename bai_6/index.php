<?php 
// // Đưa code của header.php vào index.php
//include 'Views/header.php';

// //$trangChu = $_GET['page'];

// // Điều hướng để hiển thị giao diện của views
// if (!isset($_GET['page'])) {
//     // Hiển thị giao diện trang chủ
//     include 'Views/home.php';
// } else{
//     // Hiển thị giao diện trang tương ứng
//     include "Views/" . $_GET['page'] . ".php";
// }

// include "Views/footer.php";

// Hàm thêm file vào file đang thao tác 
// include: Thêm nhiều lần (thêm khi mỗi lần gọi include)
//include 'Views/header.php';
// require_once: Chỉ thêm duy nhất 1 lần khi được gọi 
//require_once('Views/header.php');

// Gọi HomeController
require_once('Controller/HomeController.php');
require_once('Controller/ProductController.php');
require_once('Controller/ContactController.php');

$url = isset($_GET['page']) == true ?  $_GET['page'] : '/' ;
//echo $url;

switch ($url) {
    // Trang sản phẩm
    case 'product':
        $ProductController = new ProductController();
        $ProductController -> index();
        //echo 'Trang sản phẩm';
        break;
    // Trang liên hệ 
    case 'contact':
        //echo 'Trang liên hệ';
        $ContactController = new ContactController();
        $ContactController -> index();
        break;
    case 'add-product':
        $ProductController = new ProductController();
        $ProductController -> addProduct();
        break;
    case 'post-product':
        $ProductController = new ProductController();
        $ProductController -> postProduct();
        break;
    case 'update-product':
        $ProductController = new ProductController();
        $ProductController -> updateProduct();
        break;
    case 'edit-product':
        $ProductController = new ProductController();
        $ProductController -> editProduct();
        break;
    default:
        //echo 'Trang chủ';

        // Khởi tạo đối HomeController
        $HomeController = new HomeController();

        // Sử dụng phương thức index trong HomeController
        $HomeController -> index();
        break;
}


?>