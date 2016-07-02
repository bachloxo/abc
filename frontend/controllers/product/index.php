<?php
//load model (nếu cần)

//data 
$title = 'Siêu thị thú nuôi - thức ăn, vật dụng, đồ chơi cho thú cưng';
$categories = get_all('categories', array(
	'select' => 'id, parent_id, name',
	'order_by' => 'parent_id ASC, position ASC'
));

//phân trang
if(isset($_GET['page'])) $page = intval($_GET['page']); 
        else $page = 1;
        
$page = ($page>0) ? $page : 1;
$limit_blog = 4;
$limit = 12;
$offset = ($page - 1) * $limit;

$options_blog = array(
    'limit' => $limit_blog,
    'offset' => $offset,
    'order_by' => 'id DESC'
);
$options = array(
    'limit' => $limit,
    'offset' => $offset,
    'order_by' => 'id ASC'
);

$url = 'san-pham.html';
$total_rows = get_total('products', $options);
$total = ceil($total_rows/$limit);

//sản phẩm & phân trang
$products = get_all('products', $options);
$pagination = pagination($url, $page, $total, '?');
/// Bài viết Blog
$blogs = get_all('blog', $options_blog);
// Tao them vao de phan danh muc trong trang chu
// category 1
$limit_category = 4;
$offset_category = 0;
$category_1 = '`category_id` =54 ||  `category_id` =55 || `category_id` =56';
$options_category1 = array(
    'limit' => $limit_category,
    'where' => $category_1,
    'offset' => $offset_category,
    'order_by' => 'id DESC'
);
$products_category1 = get_all('products', $options_category1);
// category 2
$category_2 = '`category_id` =58 ||  `category_id` =57 || `category_id` =63';
$options_category2 = array(
    'limit' => $limit_category,
    'where' => $category_2,
    'offset' => $offset_category,
    'order_by' => 'id DESC'
);
$products_category2 = get_all('products', $options_category2);
// category 3
$category_3 = '`category_id` =59 ||  `category_id` =60 || `category_id` =61';
$options_category3 = array(
    'limit' => $limit_category,
    'where' => $category_3,
    'offset' => $offset_category,
    'order_by' => 'id DESC'
);
$products_category3 = get_all('products', $options_category3);
// category 4
$category_4 = '`category_id` =53 ||  `category_id` =62 || `category_id` =64';
$options_category4 = array(
    'limit' => $limit_category,
    'where' => $category_4,
    'offset' => $offset_category,
    'order_by' => 'id DESC'
);
$products_category4 = get_all('products', $options_category4);
//load view
require('frontend/views/product/index.php');