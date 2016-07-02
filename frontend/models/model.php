<?php
/**
 * Lưu dữ liệu vào CSDL
 * $data là mảng chứa dữ liệu.
 */
function save($table, $data = array()) {
    global $db;
    //xử lý dữ liệu $data
    $values = array();
    foreach ($data as $key => $value) {
        $value = mysqli_real_escape_string($db,$value);
        $values[] = "`$key`='$value'";
    }
    //lưu dữ liệu: INSERT/UPDATE
    $id = intval($data['id']);
    if ($id > 0) {
        $sql = "UPDATE `$table` SET " . implode(',', $values) . " WHERE id=$id";
    } else {
        $sql = "INSERT INTO `$table` SET " . implode(',', $values);
    }
    mysqli_query($db,$sql) or die(mysql_error());
    $id = ($id>0) ? $id : mysqli_insert_id($db);
    return $id;
}

/**
 * Xóa bản ghi có khóa chính là $id
 */
function delete($table, $id) {
    global $db;
    $id = intval($id);
    $sql = "DELETE FROM `$table` WHERE id=$id";
    mysqli_query($db,$sql) or die(mysqli_error());
}

/**
 * Trả về bản ghi có khóa chính là $id
 */
function get_a_record($table, $id, $select = '*') {
    global $db;
    //truy vấn
    $id = intval($id);
    $sql = "SELECT $select FROM `$table` WHERE id=$id";
    $query = mysqli_query($db, $sql) or die(mysql_error());
    //dữ liệu trả về
    $data = NULL;
    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_assoc($query);
        mysqli_free_result($query);
    }
    return $data;
}
/**
 * Trả về tất cả bản ghi thỏa mãn điều kiện trong $option. 
 */
function get_all($table, $options = array()) {
    global $db;
    //xử lý $options
    $select = isset($options['select']) ? $options['select'] : '*';
    $where = isset($options['where']) ? 'WHERE ' . $options['where'] : '';
    $order_by = isset($options['order_by']) ? 'ORDER BY ' . $options['order_by'] : '';
    $limit = isset($options['offset']) && isset($options['limit']) ? 'LIMIT ' . $options['offset'] . ',' . $options['limit'] : '';

    //truy vấn
    $sql = "SELECT $select FROM `$table` $where $order_by $limit";
    $query = mysqli_query($db,$sql) or die(mysql_error());

    //dữ liệu trả về
    $data = array();
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;
        }
        mysqli_free_result($query);
    }

    return $data;
}
/**
 * Trả về tổng số bản ghi thỏa mãn điều kiện trong $option.
 */
function get_total($table, $options = array()) {
    global $db;
    //xử lý $options
    $where = isset($options['where']) ? 'WHERE ' . $options['where'] : '';

    //truy vấn        
    $sql = "SELECT COUNT(*) as total FROM `$table` $where";
    $query = mysqli_query($db,$sql) or die(mysql_error());

    //dữ liệu trả về
    $row = mysqli_fetch_assoc($query);

    return $row['total'];
}
