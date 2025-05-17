<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <label for="hoten">Họ và tên</label>
        <input type="text" name="ho_ten" id="hoten">
        <label for="tuoi">Tuổi</label>
        <input type="text" name="tuoi" id="tuoi">
        <button type="submit">Gửi</button>
    </form>

    <?php 
        if(isset($_POST['ho_ten'])) {
            $hoTen = $_POST['ho_ten'];
            $tuoi = $_POST['tuoi'];

            echo '<p>Họ và tên: ' . $hoTen . '</p>';
            echo '<p>Tuổi: ' . $tuoi . '</p>';
        }

        // Hàm dùng để tái sử dụng một đoạn code nhiều lần

        // Hàm không có tham số và không có trả về
        function xinChao() {
            echo 'Xin chào...' . '<br>';
        }
        xinChao();

        // Hàm trả về nhưng không có tham số
        function layTenWebsite() {
            return 'https://google.com.vn';
        }

        $tenTrangWeb = layTenWebsite();
        echo '<h3>' .$tenTrangWeb . '</h3>'; 

        // Hàm trả về có tham số 
        function hienThiThanhPho($thanhPho) {
            return $thanhPho;
        }

        $thanhPhoHienTai = hienThiThanhPho('Hải Phòng');
        echo $thanhPhoHienTai . '<br>';

        // Viết hàm tính tổng 2 số và hiển thị kết quả
        function tinhTong($x, $y) {
            return $x + $y;
        }

        $tong2So = tinhTong(3, 5); // 8
        
        echo $tong2So . '<br>';

        // Hàm với tham số mặc định
        function tamBiet($bye = ' bye bye...'){
            return 'Tạm biệt' . $bye;
        }

        $tamBiet = tamBiet('Hoàng Thắng');

        echo $tamBiet; 
        
    ?>
</body>
</html>