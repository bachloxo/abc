<?php
//load model
//phân trang
$title = 'Tìm kiếm ở Siêu thị thú nuôi - thức ăn, vật dụng, đồ chơi cho thú cưng';

if (isset($_REQUEST['ok']))
{
	// Gán hàm addslashes để chống sql injection
    $search = escape($_GET['search']);
    if(isset($_GET['page'])) $page = intval($_GET['page']); 
        else $page = 1;
    $limit = 20;
	$page = ($page>0) ? $page : 1;
	$offset = ($page - 1) * $limit;
  	$options_search = array(
  		'limit' => $limit,
  		'where' => 'name like '%$search%'', 
  		'offset' => $offset,
  		'order_by' => 'id ASC'

  	);
  	$total_rows = get_total('products', $options_search);
	$total = ceil($total_rows/$limit);
  	$products = get_all('products', $options_search);
  	$pagination = pagination($url, $page, $total, '?');
}

$categories = get_all('categories', array(
	'select' => 'id, parent_id, name',
	'order_by' => 'parent_id ASC, position ASC'
));

$limit_blog = 20;
$options_blog = array(
    'limit' => $limit_blog,
    'order_by' => 'id DESC'
);
$blogs = get_all('blog', $options_blog);
//load view
require('frontend/views/search/index.php');
