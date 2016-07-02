<?php
//load model
require_once('backend/models/users.php');

//xử lý
if (!empty($_POST)) {
    $email = escape($_POST['email']);
    $password = md5($_POST['password']);
    user_login($email, $password);
}

if (isset($_SESSION['user'])) {
    header('location:admin.php');
}

//data
$title = 'Đăng nhập hệ thống';

//load view
require('backend/views/home/login.php');