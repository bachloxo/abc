<?php
//load model

if (!empty($_POST)) {
	$order = array(
		'id' => 0,
		'name' => escape($_POST['name']),
		'email' => escape($_POST['email']),
		'address' => escape($_POST['address']),
		'phone' => escape($_POST['phone']),
		'create_time' => gmdate('Y-m-d H:i:s', time()+7*3600)
	);
	$order_id = save('orders', $order);

	$cart = cart_list();
	foreach ($cart as $product) {
		$order_detail = array(
			'id' => 0,
			'order_id' => $order_id,
			'product_id' => $product['id'],
			'number' => $product['number']
		);
		save('order_detail', $order_detail);
	}

	cart_destroy();

	//data
	$title = 'Đặt hàng thành công';

	//load view
	require('frontend/views/cart/send.php');
} else {
	header('location:.');
}