<?php
//load model (nếu cần)

//dữ liệu truyền qua view
$cid = intval($_GET['c_bid']);
$category_brand = get_a_record('categories_brand', $c_bid);

if (!$category) {
	show_404();
}

$title = $category_brand['name'];

$categories_brand = get_all('categories_brand', array(
	'select' => 'id, parent_id, name',
	'order_by' => 'parent_id ASC, position ASC'
));

//lấy tất cả sản phẩm trong danh mục này và danh mục con của nó
$in_categories = categories_child(menu_list($categories_brand), $c_bid);
$in_categories[] = $c_bid;

//phân trang
if(isset($_GET['page'])) $page = intval($_GET['page']); 
        else $page = 1;
        
$page = ($page>0) ? $page : 1;
$limit = 20;
$offset = ($page - 1) * $limit;

$options = array(
	'where' => 'category_brand_id IN ('.implode(',', $in_categories).')',
    'limit' => $limit,
    'offset' => $offset,
    'order_by' => 'id DESC'
);

$url = alias($category_brand['name']).'-c'.$category_brand['id'].'.html';
$total_rows = get_total('products', $options);
$total = ceil($total_rows/$limit);

//sản phẩm & phân trang
$products = get_all('products', $options);
$pagination = pagination($url, $page, $total, '?');

//load view
require('frontend/views/category_brand/index.php');