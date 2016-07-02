<?php
//load model
require_once('backend/models/model.php');
require_once('backend/models/blog.php');

$bid = intval($_GET['bid']);
blog_delete($bid);

header('location:admin.php?controller=blog');