<?php
//load model

//data
$title = 'Đơn hàng';
$cart = cart_list();

if (empty($cart)) {
	header('location:.');
}
$categories = get_all('categories', array(
	'select' => 'id, parent_id, name',
	'order_by' => 'parent_id ASC, position ASC'
));
//load view
require('frontend/views/cart/order.php');