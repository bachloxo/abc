<?php
//load model
require_once('backend/models/orders.php');

if (isset($_GET['oid'])) $oid = intval($_GET['oid']); else $oid=0;

$order = get_a_record('orders', $oid);

if (!$order) {
	show_404();
}

//data
$title = 'Chi tiết đơn hàng';
$user = $_SESSION['user'];
$order_detail = order_detail($oid);

//load view
require('backend/views/order/view.php');