<?php
//load model
require_once('backend/models/blog.php');

//if form submit 
if (!empty($_POST)) {
    $name = escape($_POST['name']);

    $blog = array(
        'id' => intval($_POST['id']),
        'title' => $name,
        'description' => escape($_POST['description']),
	   'content' => $_POST['info_detail'],
    );
    $bid = save('blog', $blog);
    
    //chuyển hướng
    header('location:admin.php?controller=blog');
}

if (isset($_GET['id'])) $bid = intval($_GET['id']); else $bid=0;

//data
$title = ($bid==0) ? 'Thêm bài viết' : 'Chỉnh sửa bài viết';
$user = $_SESSION['user'];
$blog = get_a_record('blog', $bid);

//load view
require('backend/views/blog/edit.php');