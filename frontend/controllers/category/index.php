<?php
//load model (nếu cần)

//dữ liệu truyền qua view
$cid = intval($_GET['cid']);
$category = get_a_record('categories', $cid);

if (!$category) {
	show_404();
}

$title = $category['name'];

$categories = get_all('categories', array(
	'select' => 'id, parent_id, name',
	'order_by' => 'parent_id ASC, position ASC'
));

//lấy tất cả sản phẩm trong danh mục này và danh mục con của nó
$in_categories = categories_child(menu_list($categories), $cid);
$in_categories[] = $cid;

//phân trang
if(isset($_GET['page'])) $page = intval($_GET['page']); 
        else $page = 1;
        
$page = ($page>0) ? $page : 1;
$limit = 20;
$offset = ($page - 1) * $limit;

$options = array(
	'where' => 'category_id IN ('.implode(',', $in_categories).')',
    'limit' => $limit,
    'offset' => $offset,
    'order_by' => 'id DESC'
);

$url = alias($category['name']).'-c'.$category['id'].'.html';
$total_rows = get_total('products', $options);
$total = ceil($total_rows/$limit);

//sản phẩm & phân trang
$products = get_all('products', $options);
$pagination = pagination($url, $page, $total, '?');

//load view
require('frontend/views/category/index.php');