<?php

$pid = intval($_GET['pid']);
cart_add($pid);

header('location:gio-hang.html');
