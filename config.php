<?php
/** Tắt thông báo lỗi **/
#error_reporting(0);

/** setting **/
define('BASEURL' , 'http://localhost/sieuthithunuoi.com/');
define('BASEPATH', dirname(__FILE__) . '/');

/** kết nối MySQL **/
$db = mysqli_connect("localhost", "root", "") or die('Could not connect to Server');
mysqli_select_db( $db,"sieuthithunuoi") or die('Could not connect to Database');
mysqli_set_charset( $db,'utf8');