<!-- 
- Lập trình OOP (Object oriented programming): Lập trình hướng đối tượng 
* Mô ta các sự vật có thật ở ngoài đời vào ngôn ngữ lập trình
* Class (Lớp): Mô tả các đối tượng cùng loại
1. Attribute (Thuộc tính)
2. Method (Phương thức) 
-->

<!-- CÚ PHÁP tạo class
class tên_lớp {}
-->
<?php 

// Xây dựng class Student để mô tả thông tin cơ bản của 1 sinh viên gồm: 
// Tên, Tuổi, MSV => Attribute (Thuộc tính) 
// Đi học => Method (Phương thức)
class Student {
    // $this: dùng để chỉ đối tượng hiện tại được đc xử lý bên trong class 
    // $this: dùng để truy cập thuộc tính và đối tượng 
    // LƯU Ý: $this chỉ sử dụng bên trong class

    // Khai báo thuộc tính
    public $ten;
    public $tuoi;
    public $msv;

    // Khai báo phương thức (hàm)
    public function diHoc() {
        $ten = $this -> ten;
        $msv = $this -> msv;
        echo "Bạn $ten - $msv đang đi học"; 
    }
}

// Khởi tạo đối tượng 
$sinhVien1 = new Student();
// Gán giá trị cho thuộc tính ten bên trong class Student
$sinhVien1 -> ten = "Quang";
// Gán giá trị cho thuộc tính ten bên trong class Student
$sinhVien1 -> tuoi = "27";
// Gán giá trị cho thuộc tinh msv bên trong class Student
$sinhVien1 -> msv = "PP00001";
// Sử dụng phương thức diHoc của class Student 
$sinhVien1 -> diHoc();

// BT: Tạo một class mô tả về chiếc xe máy gồm
// thuộc tính: hãng xe, tên xe, màu xe, phân khối 
// phương thức: phanh, di lai (echo dc tên xe, hãng xe )
class XeMay{
    public $hangXe;
    public $tenXe;
    public $mauXe;
    public $phanKhoi;

    public function phanh() {
        echo "Xe đứt phanh...";
    }

    public function diLai() {
        $tenXe = $this -> tenXe;
        $hangXe = $this -> hangXe;

        echo "Xe $tenXe - $hangXe đang đi";
    }
}

// Khởi tạo đối tượng XeMay
$xeMay = new XeMay();
$xeMay -> hangXe = 'Yamaha';
$xeMay -> tenXe = 'Iphone 16';
$xeMay -> mauXe = 'Hồng';
$xeMay -> phanKhoi = '1TB';
echo "<br>";
$xeMay -> diLai();

// Thêm 1 xe máy với hãng xe là Honda

// *Constructor (Hàm dựng sẵn)
class Car {
    public $hangXe; 

    // constructor: hàm dựng sẵn (hàm khởi tạo)
    // Hàm khởi tạo sẽ được chạy ngay khi khởi tạo đối tượng mới
    public function __construct($hangXe)
    {
        $this -> hangXe = $hangXe;
    }

    public function hienThiHangXe() {
        echo "Hãng xe là: " . $this -> hangXe;
    }
}
echo "<br>";
$xeOto = new Car('Toyota');
$xeOto -> hienThiHangXe();


?>
 
