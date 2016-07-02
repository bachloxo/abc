<?php
//load model
require_once('backend/models/blog.php');

if (isset($_POST['search'])) {
	header('location:admin.php?controller=blog&search='.$_POST['search']);
}

if (isset($_POST['bid'])) {
	foreach ($_POST['bid'] as $bid) {
		$bid = intval($bid);
		blog_delete($bid);
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

$url = 'admin.php?controller=blog';

if (isset($_GET['search'])) {
	$search = escape($_GET['search']);
	$options['where'] = "name LIKE '%$search%'";
	$url = 'admin.php?controller=blog&search='.$_GET['search'];
}

$total_rows = get_total('blog', $options);
$total = ceil($total_rows/$limit);

//data
$title = 'Blog';
$user = $_SESSION['user'];
$blogs = get_all('blog', $options);
$pagination = pagination($url, $page, $total);
$pagination_backend = pagination_backend($url, $page, $total);
//load view
require('backend/views/blog/index.php');