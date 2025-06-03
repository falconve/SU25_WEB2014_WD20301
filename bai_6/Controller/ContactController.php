<?php 
class ContactController {
    // Hàm construct 
    public function __construct() 
    {
        
    }

    // Hàm index: Hiển thị nội dung trang chủ 
    public function index() {
        // Hiển thị giao diện trang chủ từ thư mục views
        require_once('views/contact.php');
    }
}
?>