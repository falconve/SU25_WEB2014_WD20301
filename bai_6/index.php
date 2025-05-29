<?php 
// Đưa code của header.php vào index.php
include 'Views/header.php';

//$trangChu = $_GET['page'];

// Điều hướng để hiển thị giao diện của views
if (!isset($_GET['page'])) {
    // Hiển thị giao diện trang chủ
    include 'Views/home.php';
} else {
    // Hiển thị giao diện trang tương ứng
    include "Views/" . $_GET['page'] . ".php";
}

include "Views/footer.php"


?>