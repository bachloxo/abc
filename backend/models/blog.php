<?php
/**
 * Xóa bản ghi có khóa chính là $id
 */
function blog_delete($id) {
	global $db;
    $id = intval($id);
    $blog = get_a_record('blog', $id);
    $sql = "DELETE FROM blog WHERE id=$id";
    mysqli_query($db,$sql) or die(mysqli_error());
}