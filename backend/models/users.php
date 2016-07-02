<?php
/**
 * Đăng nhập hệ thống
 * @param  string
 * @param  string
 * @return boolean
 */
function user_login($email, $password) {
	global $db;
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 0,1";
    $query = mysqli_query($db,$sql) or die(mysqli_error());
    if (mysqli_num_rows($query)>0) {
        $_SESSION['user'] = mysqli_fetch_assoc($query);
        return true;
    }
    return false;
}