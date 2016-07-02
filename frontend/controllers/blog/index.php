<?php
//load model (nếu cần)

//data 
$title = 'Cẩm nang chăm sóc thú cưng - thức ăn, vật dụng, đồ chơi cho thú cưng';
$description ='Blog cẩm nang chăm sóc thú cưng vật nuôi, Mang lại kiến thức cách chăm sóc thú cưng tốt nhất cho bạn.';
$categories = get_all('categories', array(
	'select' => 'id, parent_id, name',
	'order_by' => 'parent_id ASC, position ASC'
));

//phân trang
if(isset($_GET['page'])) $page = intval($_GET['page']); 
        else $page = 1;
        
$page = ($page>0) ? $page : 1;
$limit = 20;
$offset = ($page - 1) * $limit;

$options = array(
    'limit' => $limit,
    'offset' => $offset,
    'order_by' => 'id DESC'
);

$url = 'blog.html';
$total_rows = get_total('blog', $options);
$total = ceil($total_rows/$limit);

//sản phẩm & phân trang
$blogs = get_all('blog', $options);
$pagination = pagination($url, $page, $total, '?');

//load view
require('frontend/views/blog/index.php');