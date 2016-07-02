<?php
session_start();
// Lấy thông tin captcha, usernam, email/sđt, commnet nữa

$user_name = isset($_POST['user_name']) ? $_POST['user_name'] : false;
$email = isset($_POST['email']) ? $_POST['email'] : false;
$content = isset($_POST['content']) ? $_POST['content'] : false;
$captcha = isset($_POST['captcha']) ? $_POST['captcha'] : false;
$product_id = isset($_POST['product_id']) ? $_POST['product_id'] : false;
$rating = isset($_POST['rating']) ? $_POST['rating'] : false;
$status= '0';

// Nếu cả hai thông tin username và email đều không có thì dừng, thông báo lỗi
if (!$user_name && !$email && !$comment && !$captcha && !$rating){
    die ('{error:"bad_request"}');
}

// Kết nối database
$conn = mysqli_connect("mysql.hostinger.vn", "u650584132_bach", "tdnt4d10kt") or die('{error:"bad_request"}');
mysqli_select_db( $conn,"u650584132_sttt") or die('{error:"bad_request"}');
mysqli_set_charset( $conn,'utf8');

// Khai báo biến lưu lỗi
$error = array(
    'error' => 'success',
   	'user_name' => '',
   	'email' => '',
    'comment' => '',
    'rating' => '',
    'captcha' => ''
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
			$query = mysqli_query($conn, "insert into products_review(content, rating, product_id, status, user_name, email) value ('$content','$rating','$product_id','$status','$user_name', '$email')");
	    }
	    else{
	        $error['captcha'] = 'Mã lệnh không hợp lệ';
	    }
	}
}
    
// Trả kết quả về cho client
die (json_encode($error));


?>
