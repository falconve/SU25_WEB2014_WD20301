<!-- 
MÔ HÌNH MVC (MODEL - VIEW - CONTROLLER)
1. MODEL: TƯƠNG TÁC VỚI CSDL
- CHỨA CÁC HÀM VÀ PHƯƠNG THỨC ĐỂ GIAO TIẾP
VỚI CSDL 
2. VIEW: NƠI CHỨA GIAO DIỆN 
- SẼ HIỂN THỊ DỮ LIỆU TIẾP NHẬN 
ĐƯỢC TỪ CONTROLLER
3. CONTROLLER: NƠI XỬ LÝ LOGIC
- TRUNG GIAN GIỮA MODEL VÀ VIEW. 
- TIẾP NHẬN CÁC REQUEST TỪ VIEW VÀ XỬ LÝ 
LOGIC, CÓ THỂ LẤY DỮ LIỆU TỪ MODEL. 
- SAU ĐÓ LÀ GỬI TỚI VIEW ĐỂ HIỂN THỊ

ƯU ĐIỂM: 
- DỄ DÀNG QUẢN LÍ CODE: BẢO TRÌ, PHÁT TRIỂN, ...
- CHIA RA THEO TỪNG PHẦN
NHƯỢC ĐIỂM: 
- NHIỀU FILE, QUẢN LÝ NHIỀU TỆP TIN
- TỐC ĐỘ CHẬM HƠN PHP THUẦN
-->

<!-- 
Hàm include dùng để thêm một file nào đó 
vào file đang thao tác
-->

<!-- BT:
- Tạo trang tin tức (news.php) có menu 
- Tạo trang về chúng tôi (about.php) có menu 
- Link 2 trang này lên menu
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include('views/menu.php') ?>
    <h1>Trang chủ</h1>
    <?php include('views/footer.php') ?>
</body>
</html>
