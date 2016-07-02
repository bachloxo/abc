<?php
//load model
require_once('backend/models/categories.php');

//if form submit 
if (!empty($_POST)) {
	$category = array(
		'id' => intval($_POST['id']),
		'parent_id' => intval($_POST['parent_id']),
		'name' => escape($_POST['name']),
		'position' => intval($_POST['position'])
	);
	save('categories', $category);
	header('location:admin.php?controller=category');
}

if (isset($_GET['cid'])) $cid = intval($_GET['cid']); else $cid=0;

//data
$title = ($cid==0) ? 'Thêm danh mục' : 'Sửa danh mục';
$user = $_SESSION['user'];
$category = get_a_record('categories', $cid);

$categories = get_all('categories', array(
	'select'=>'id, parent_id, name',
	'order_by' => 'parent_id ASC, position ASC'
));

//load view
require('backend/views/category/edit.php');