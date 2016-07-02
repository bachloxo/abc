<?php
//load model
require_once('backend/models/users.php');

if (isset($_POST['search'])) {
	header('location:admin.php?controller=user&search='.$_POST['search']);
}

if (isset($_POST['uid'])) {
	foreach ($_POST['uid'] as $uid) {
		$uid = intval($uid);
		user_delete($uid);
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
    'order_by' => 'id DESC'
);

$url = 'admin.php?controller=user';

if (isset($_GET['search'])) {
	$search = escape($_GET['search']);
	$options['where'] = "name LIKE '%$search%'";
	$url = 'admin.php?controller=user&search='.$_GET['search'];
}

$total_rows = get_total('users', $options);
$total = ceil($total_rows/$limit);

//data
$title = 'Users';
$user = $_SESSION['user'];
$users = get_all('users', $options);
$pagination = pagination($url, $page, $total);
$pagination_backend = pagination($url, $page, $total);
//load view
require('backend/views/user/index.php');