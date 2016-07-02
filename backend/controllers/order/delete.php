<?php
//load model
require_once('backend/models/orders.php');

$cid = intval($_GET['oid']);
order_delete($oid);

header('location:admin.php?controller=order');