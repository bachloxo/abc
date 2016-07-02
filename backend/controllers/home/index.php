<?php
//data
$title = 'Quản trị hệ thống';
$user = $_SESSION['user'];

//load model
require_once('backend/models/orders.php');

$options = array(
    'order_by' => 'status ASC, id DESC'
);
$total_orders = get_total('orders', $options);

$options_sales = array(
	'where' => '`status`=1',
    'order_by' => 'status ASC, id DESC'
);
$total_sales = get_total('orders', $options_sales);

$options_review = array(
    'order_by' => 'status ASC, id DESC'
);
$total_products_review = get_total('products_review', $options_review);

//load view
require('backend/views/home/index.php');