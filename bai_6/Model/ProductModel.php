<?php 

require_once('DB.php');

class ProductModel extends DB {
    public function getProduct() {
        $sql = "SELECT * FROM san_pham";
        return $this -> getData($sql);
    }
}

?>
