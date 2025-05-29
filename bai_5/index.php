<!-- 
=> 4 tính chất của OOP
1. Tính đóng gói 
2. Tính kế thừa
3. Tính trừu tượng 
4. Tính đa hình 
-->

<!-- 1. Tính đóng gói -->
<!-- VD: Khai báo 1 class conNguoi 
Có thuộc tính tên 
-->

<?php

class ConNguoi{
    private $ten;

    // Setter: cập nhật giá trị cho thuộc tính
    public function setName($ten) {
        $this -> ten = $ten;
    }

    // Getter: lấy/hiển th giá trị
    public function getName() {
        return $this -> ten;
    } 
}


$nguoi1 = new ConNguoi();
// Gọi tới setter: setName để cập nhật giá trị 
// cho thuộc tính $ten
$nguoi1 -> setName('An');

// Gọi tới getter: getName để hiển thị giá trị của 
// thuộc tính $ten
//echo $nguoi1 -> getName();

// 2. Tính kế thừa 
// VD: Khai báo 1 class DongVat
class DongVat {
    public function tiengKeu() {
        echo "Tôi là động vật... \n";
    }
}

// con chó
class ConCho extends DongVat {
    public function sua() {
        echo "Gâu Gâu... \n";
    }
}

$cho = new ConCho();
//$cho -> tiengKeu(); // Tôi là động vật... 
//$cho -> sua(); // Gâu Gâu...

// 3. Tính Trừu tượng
// để khai báo tính trừu tượng sử dụng từ khoá abstract trước class
abstract class PhuongTien {
    abstract function diChuyen();
}

// Class Oto
class Oto extends PhuongTien {
    public function diChuyen() {
        echo "Xe chạy...";
        echo "<br>";
    }
}
// Class MayBay
class MayBay extends PhuongTien {
    public function diChuyen() {
        echo "Máy bay đang bay...";
        echo "<br>";
    }
}

$oTo = new Oto();
$mayBay = new MayBay();

$oTo -> diChuyen();
$mayBay -> diChuyen();


// 4. TÍnh đa hình
// VD: Khai báo class HinhHoc
class HinhHoc {
    public function tenHinh() {
        echo "đây là tên hình học";
    }
}

// Khai báo class HinhVuong
class HinhVuong extends HinhHoc {
    public function tenHinh() {
        echo "đây là hình vuông\n";
        echo "<br>";
    }
}

// Khai báo class HinhTamGiac
class HinhTamGiac extends HinhHoc {
    public function tenHinh() {
        echo "đây là hình tam giác\n";
    }
} 

// Khai báo 1 mảng chứa các 2 hình phía trên 
$cacHinh = [new HinhVuong(), new HinhTamGiac()];

foreach ($cacHinh as $hinhHoc) {
    $hinhHoc -> tenHinh();
}

// BT về tính kế thừa & đóng gói  <LAB 1 + 2>

// Bài tập: Quản lý học sinh và học lực
// Bạn là một giáo viên. Bạn có lớp học gồm học sinh.
// Mỗi học sinh có điểm trung bình, nhưng bạn 
// không cho người ngoài xem trực tiếp điểm đó.
// Bạn có thể viết một class con để xếp loại học lực 
// học sinh dựa trên điểm trung bình.

// Yêu cầu:
//  1. Tạo class Student:
//  • Thuộc tính riêng tư (private) là $name và 
//  $avgScore (điểm trung bình)
//  • Hàm setInfo($name, $score) để gán giá trị
//  • Hàm getName() và getAvgScore() để lấy thông tin
//  2. Tạo class GradedStudent kế thừa từ Student:
//  • Thêm phương thức getAcademicLevel() 
//  để xếp loại học lực như sau:
//  • Giỏi: >= 8
//  • Khá: >= 6.5
//  • Trung bình: >= 5
//  • Yếu: dưới 5
//  3. Tạo 2 học sinh, in ra tên và học lực.
?>


