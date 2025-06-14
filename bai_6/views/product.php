<h1>Đây là trang sản phẩm</h1>
<a href="http://localhost/WEB2014/bai_6/index.php?page=add-product">
    Thêm sản phẩm
</a>
<table>
    <tr>
        <td>ID</td>
        <td>Tên sản phẩm</td>
        <td>Số lượng</td>
        <td>Giá tiền</td>
        <td>Hành động</td>
    </tr>
    <?php 
    foreach ($products as $key => $value) {
    ?>
    <tr>
        <td><?php echo $value['id']; ?></td>
        <td><?php echo $value['ten_san_pham']; ?></td>
        <td><?php echo $value['so_luong']; ?></td>
        <td><?php echo $value['gia_tien']; ?></td>
        <td>
            <a href="http://localhost/WEB2014/bai_6/index.php?page=update-product&productId=<?php echo $value['id']; ?>">Cập nhật</a>
        </td>
        <td>
            <a href="http://localhost/WEB2014/bai_6/index.php?page=detail-product&productId=<?php echo $value['id']; ?>">Chi tiết</a>
        </td>
        <td>
            <a onclick="return confirm('Bạn có muốn xoá không ?')" href="http://localhost/WEB2014/bai_6/index.php?page=delete-product&productId=<?php echo $value['id']; ?>">Xoá</a>
        </td>
    </tr>
    <?php } ?>
</table>
<?php 
include 'Views/sidebar.php';
?>