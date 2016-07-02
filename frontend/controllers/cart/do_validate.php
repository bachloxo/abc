<?php

require_once('config.php');
require_once('librarys/functions.php');
require_once('frontend/models/model.php');
require_once('frontend/models/cart.php');

// Lấy thông tin captcha, usernam, email/sđt, commnet nữa
$name = isset($_POST['name']) ? $_POST['name '] : false;
$email = isset($_POST['email']) ? $_POST['email'] : false;
$address = isset($_POST['address']) ? $_POST['address'] : false;
$phone = isset($_POST['phone']) ? $_POST['phone'] : false;
$captcha = isset($_POST['captcha']) ? $_POST['captcha'] : false;

if (!$name && !$email && !$address && !$phone && !$captcha){
    die ('{error:"bad_request"}');
}

// Khai báo biến lưu lỗi
$error = array(
    'error' => 'success',
   	'name' => '',
   	'email' => '',
    'address' => '',
    'phone' => '',
    'captcha' => '',
);

// Kiểm tra captcha
if ($captcha)
{
	if ($captcha == NULL ) {
		$error['captcha'] = 'Bạn chưa điền mã bảo mật';
	} else {
		if ($captcha == $_SESSION['security_code']){
    		$error['captcha'] = '';
			// Tiến hành lưu vào CSDL
			$order = array(
				'id' => 0,
				'name' => escape($name),
				'email' => escape($email ),
				'address' => escape($address),
				'phone' => escape($phone ),
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
	    }
	    else{
	        $error['captcha'] = 'Mã lệnh không hợp lệ';
	    }
	}
}
    
// Trả kết quả về cho client
die (json_encode($error));

mysqli_close($db);
?>
