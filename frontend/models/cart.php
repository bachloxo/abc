<?php
/**
 * lưu giỏ hàng vào $_SESSION['cart'] có dạng
 * $_SESSION['cart'] = array(
 *     1 => array(
 *         'id' => 1,
 *         'name' => 'Nokia 525',
 *         'image' => 'nokia-525.jpg',
 *         'number' => '3',
 *         'price' => '3500000'
 *     ),
 *     7 => array(
 *         'id' => 7,
 *         'name' => 'IPhone 4',
 *         'image' => 'iphone-4.jpg',
 *         'number' => '1',
 *         'price' => '4000000'
 *     )
 * );
 */

//khởi tạo giỏ hàng
if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array();

function cart_add($pid){
    if(isset($_SESSION['cart'][$pid])){
        //nếu đã có sp trong giỏ hàng thì số lượng lên 1
        $_SESSION['cart'][$pid]['number']++;
    } else {
        //lấy thông tin sản phẩm từ CSDL và lưu vào giỏ hàng
        $product = get_a_record('products', $pid);
        
        $_SESSION['cart'][$pid] = array(
            'id' => $pid,
            'name' => $product['name'],
            'image' => $product['image'],
            'number' => 1,
            'price' => $product['price']
        );
    }
}
/**
 * Cập nhật số lượng sản phẩm
 * @param int
 * @param int
 */
function cart_update($pid, $number){
    if($number==0){
        //xóa sp ra khỏi giỏ hàng
        unset($_SESSION['cart'][$pid]);
    } else {
        $_SESSION['cart'][$pid]['number'] = $number;
    }
}
/**
 * Xóa sản phẩm ra khỏi giỏ hàng
 * @param int
 */
function cart_delete($pid){
    unset($_SESSION['cart'][$pid]);
}
/**
 * Tổng giá trị giỏ hàng
 */
function cart_total(){
    $total = 0;
    foreach($_SESSION['cart'] as $product){
        $total += $product['price'] * $product['number'];
    }
    return $total;
}
/**
 * Số sản phẩm có trong giỏ hàng
 */
function cart_number(){
    $number = 0;
    foreach($_SESSION['cart'] as $product){
        $number += $product['number'];
    }
    return $number;
}
/**
 * Danh sách sản phẩm trong giỏ hàng
 */
function cart_list(){
    return $_SESSION['cart'];
}
/**
 * Xóa giỏ hàng
 */
function cart_destroy(){
    $_SESSION['cart'] = array();
}