<?php
/**
 * Xóa bản ghi có khóa chính là $id
 */
function categories_delete($id) {
    global $db;
    $id = intval($id);

    //xóa sản phẩm
    require_once('backend/models/products.php');

    $options = array(
        'select' => 'id',
        'where' => 'category_id='.$id
    );
    $products = get_all('products', $options);

    foreach ($products as $product) {
        products_delete($product['id']);
    }

    //xóa danh mục
    $sql = "DELETE FROM categories WHERE id=$id";
    mysqli_query($db,$sql) or die(mysqli_error());
}