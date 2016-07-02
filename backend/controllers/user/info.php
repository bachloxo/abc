<?php
//load model
require_once('backend/models/model.php');
require_once('backend/models/users.php');

//if form submit 
if (!empty($_POST)) {
	$user = array(
		'id' => intval($_POST['id']),
		'email' => escape($_POST['email']),
		'name' => escape($_POST['name']),
		'address' => escape($_POST['address']),
		'phone' => escape($_POST['phone'])
	);
	if (!empty($_POST['password'])) {
		$user['password'] = md5($_POST['password']);
	}
	save('users', $user);

	$_SESSION['user'] = $user;

	header('location:admin.php?controller=user&action=info');
}

//data
$title = 'Thông tin cá nhân';
$user = $_SESSION['user'];

//load view
require('backend/views/user/info.php');