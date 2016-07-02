<?php
//load model
require_once('backend/models/orders.php');

if (isset($_POST['oid'])) {
	foreach ($_POST['oid'] as $oid) {
		$oid = intval($oid);
		orders_delete($oid);
	}
}

if(isset($_GET['page'])) $page = intval($_GET['page']); 
        else $page = 1;
        
$page = ($page>0) ? $page : 1;
$limit = 10;
$offset = ($page - 1) * $limit;

$options = array(
    'limit' => $limit,
    'offset' => $offset,
    'order_by' => 'status ASC, id DESC'
);

$url = 'admin.php?controller=order';
$total_rows = get_total('orders', $options);
$total = ceil($total_rows/$limit);

//data
$title = 'Đơn hàng';
$user = $_SESSION['user'];
$orders = get_all('orders', $options);
$pagination = pagination($url, $page, $total);
$pagination_backend = pagination($url, $page, $total);
$status = array(
	0 => 'Chưa xử lý',
	1 => 'Đã xử lý'
);

//load view
require('backend/views/order/index.php');