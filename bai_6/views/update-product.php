<h1>Trang cập nhật sản phẩm</h1>
<form action="http://localhost/WEB2014/bai_6/index.php?page=edit-product" method="POST">
    <input type="text" name="id_sp" value="<?php echo $productById['id'] ?>" />
    <div class="ten-sp">
        <label for="">Tên sản phẩm</label>
        <input type="text" name="ten_sp" id="" value="<?php echo $productById['ten_san_pham'] ?>">
    </div>
    <div class="gia-sp">
        <label for="">Giá sản phẩm</label>
        <input type="text" name="gia_sp" id="" value="<?php echo $productById['gia_tien'] ?>">
    </div>
    <div class="so-luong-sp">
        <label for="">Số lượng sản phẩm</label>
        <input type="text" name="so_luong_sp" id="" value="<?php echo $productById['so_luong'] ?>">
    </div>

    <button type="submit">Cập nhật sản phẩm</button>

</form>