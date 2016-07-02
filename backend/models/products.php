<?php
/*** Xóa bản ghi có khóa chính là $id ***/
function products_delete($id) {
	global $db;
    $id = intval($id);
    $product = get_a_record('products', $id);
    $image = 'public/upload/product/'.$product['image'];
    $image1 = 'public/upload/product/'.$product['image1'];
    $image2 = 'public/upload/product/'.$product['image2'];
    if (is_file($image)) {
    	unlink($image);
    }
     if (is_file($image1)) {
    	unlink($image1);
    }
    if (is_file($image2)) {
    	unlink($image2);
    }
    $sql = "DELETE FROM products WHERE id=$id";
    mysqli_query($db,$sql) or die(mysqli_error());
}