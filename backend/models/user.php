<?php
/**
 * Đăng nhập hệ thống
 * @param  string
 * @param  string
 * @return boolean
 */
function user_delete($id) {
	global $db;
    $id = intval($id);
    $user = get_a_record('users', $id);
    $sql = "DELETE FROM users WHERE id=$id";
    mysqli_query($db,$sql) or die(mysqli_error());
}