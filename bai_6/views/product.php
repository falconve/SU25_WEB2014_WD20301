<h1>Đây là trang sản phẩm</h1>
<table>
    <tr>
        <td>ID</td>
        <td>Tên sản phẩm</td>
        <td>Số lượng</td>
        <td>Giá tiền</td>
    </tr>
    <?php foreach ($products as $key => $value) {
    ?>
    <tr>
        <td><?php echo $value['id']; ?></td>
        <td><?php echo $value['ten_san_pham']; ?></td>
        <td><?php echo $value['so_luong']; ?></td>
        <td><?php echo $value['gia_tien']; ?></td>
    </tr>
    <?php } ?>
</table>
<?php 
include 'Views/sidebar.php';
?>