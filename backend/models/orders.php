<?php
/**
 * Chi tiết đơn hàng
 */
function order_detail($oid) {
    global $db;
    $sql = "SELECT products.id, name, image, price, order_detail.number 
            FROM order_detail
            INNER JOIN products ON products.id=order_detail.product_id
            WHERE order_detail.order_id=$oid";
    $query = mysqli_query( $db, $sql) or die(mysqli_error($db));

    //dữ liệu trả về
    $data = array();
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;

        }
        mysqli_free_result($query);
    }
    return $data;
}
/**
 * Xóa bản ghi có khóa chính là $id
 */
function order_delete($id) {
    global $db;
    $id = intval($id);

    //xóa sản phẩm
    require_once('backend/models/orders.php');

    $options = array(
        'select' => 'id',
        'where' => 'order_id='.$id
    );
    $orders = get_all('orders', $options);

    foreach ($orders as $order) {
        orders_delete($order['id']);
    }

    //xóa danh mục
    $sql = "DELETE FROM orders WHERE id=$id";
    mysqli_query($db,$sql) or die(mysqli_error());
}