<?php
//if form submit 
if (!empty($_POST)) {
	$order = array(
		'id' => intval($_POST['oid']),
		'status' => 1
	);
	save('orders', $order);	
}
header('location:admin.php?controller=order');