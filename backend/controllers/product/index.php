<?php
//load model
require_once('backend/models/products.php');

if (isset($_POST['search'])) {
	header('location:admin.php?controller=product&search='.$_POST['search']);
}

if (isset($_POST['pid'])) {
	foreach ($_POST['pid'] as $pid) {
		$pid = intval($pid);
		products_delete($pid);
	}
}

if(isset($_GET['page'])) $page = intval($_GET['page']); 
        else $page = 1;
        
$page = ($page>0) ? $page : 1;
$limit = 25;
$offset = ($page - 1) * $limit;

$options = array(
    'limit' => $limit,
    'offset' => $offset,
    'order_by' => 'id DESC'
);

$url = 'admin.php?controller=product';

if (isset($_GET['search'])) {
	$search = escape($_GET['search']);
	$options['where'] = "name LIKE '%$search%'";
	$url = 'admin.php?controller=product&search='.$_GET['search'];
}

$total_rows = get_total('products', $options);
$total = ceil($total_rows/$limit);

//data
$title = 'Sản phẩm';
$user = $_SESSION['user'];
$products = get_all('products', $options);
$pagination = pagination($url, $page, $total);
$pagination_backend = pagination_backend($url, $page, $total);

//load view
require('backend/views/product/index.php');