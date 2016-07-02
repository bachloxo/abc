<?php
//load model
require_once('backend/models/model.php');
require_once('backend/models/products.php');

$pid = intval($_GET['pid']);
products_delete($pid);

header('location:admin.php?controller=product');