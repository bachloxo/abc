<?php
session_start();
// Lấy thông tin captcha, usernam, email/sđt, commnet nữa

$product_id = isset($_POST['product_id']) ? $_POST['product_id'] : false;
$products_option1 = isset($_POST['products_option1']) ? $_POST['products_option1'] : false;
$products_option_value1 = isset($_POST['products_option_value1']) ? $_POST['products_option_value1'] : false;
$products_option2 = isset($_POST['products_option2']) ? $_POST['products_option2'] : false;
$products_option_value2 = isset($_POST['products_option_value2']) ? $_POST['products_option_value2'] : false;

// Nếu cả hai thông tin username và email đều không có thì dừng, thông báo lỗi
if (!$product_id && ((!$products_option1 && !$products_option_value1) || (!$products_option2 && !$products_option_value2)) ){
    die ('{error:"bad_request"}');
}

// Kết nối database
$conn = mysqli_connect("mysql.hostinger.vn", "u650584132_bach", "tdnt4d10kt") or die('{error:"bad_request"}');
mysqli_select_db( $conn,"u650584132_sttt") or die('{error:"bad_request"}');
mysqli_set_charset( $conn,'utf8');

// Khai báo biến lưu lỗi
$error = array(
    'error' => 'success',
   	'products_option1' => '',
   	'products_option_value1' => '',
   	'products_option2' => '',
   	'products_option_value2' => '',
);

$query = mysqli_query($conn, "insert into products_options(product_id, option, value) value ('$product_id','$products_option1','products_option_value1','$product_id','$status','$user_name', '$email')");

$query = mysqli_query($conn, "insert into products_options(product_id, option, value) value ('$product_id','$products_option2','products_option_value2','$product_id','$status','$user_name', '$email')");

// Trả kết quả về cho client
die (json_encode($error));


?>
