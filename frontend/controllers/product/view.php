<?php
//load model

//data
$pid = intval($_GET['pid']);
$product = get_a_record('products', $pid);
$category = get_a_record('categories',$product['category_id']);

if (!$product) {
	show_404();
}

$title = $product['name'];
$categories = get_all('categories', array(
	'select' => 'id, parent_id, name',
	'order_by' => 'parent_id ASC, position ASC'
));

$products_review_id = (string)$product['id'];
//thực hiện phép nối chuỗi với biến $b
$products_review_id = "`product_id`=".$product['id'];
$products_review = get_all('products_review', array(
  'where' => $products_review_id,
));

//load view
require('frontend/views/product/view.php');