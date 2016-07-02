<?php
//load model

//data
$bid = intval($_GET['bid']);
$blog = get_a_record('blog', $bid);
$category = get_a_record('categories',$product['category_id']);

$limit = 4;
$options = array(
    'limit' => $limit,
    'order_by' => 'id DESC'
);

$blogs = get_all('blog', $options);
if (!$blog) {
	show_404();
}

//data 
$title = $blog['title'];
$description = $blog['description'];

$categories = get_all('categories', array(
	'select' => 'id, parent_id, name',
	'order_by' => 'parent_id ASC, position ASC'
));

//load view
require('frontend/views/blog/view.php');