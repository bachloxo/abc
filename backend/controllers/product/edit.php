<?php
//load model
require_once('backend/models/products.php');

//if form submit 
if (!empty($_POST)) {
    $name = escape($_POST['name']);

    $product = array(
        'id' => intval($_POST['id']),
        'status' => intval($_POST['status']),
        'category_id' => intval($_POST['category_id']),
        'name' => $name,
        'brand' => escape($_POST['brand']),
        'description' => escape($_POST['description']),
        'summary' => $_POST['summary'],
	    'info_detail' => $_POST['info_detail'],
        'product_related_1' => escape($_POST['product_related_1']),
        'product_related_2' => escape($_POST['product_related_2']),
        'product_related_3' => escape($_POST['product_related_3']),
        'number' => escape($_POST['number']),
        'price' => intval(str_replace('.', '', $_POST['price']))
    );
    $pid = save('products', $product);

    //upload ảnh    
    $image_name = $pid.'-'.alias($name);
        $config = array(
        'name' => $image_name,
        'upload_path'  => 'public/upload/product/',
        'allowed_exts' => 'jpg|jpeg|png|gif',
    );
     $image_name1 = $pid.'-'.alias($name).'-1';
        $config1 = array(
        'name' => $image_name1,
        'upload_path'  => 'public/upload/product/',
        'allowed_exts' => 'jpg|jpeg|png|gif',
    );
    $image_name2 = $pid.'-'.alias($name).'-2';
        $config2 = array(
        'name' => $image_name2,
        'upload_path'  => 'public/upload/product/',
        'allowed_exts' => 'jpg|jpeg|png|gif',
    );
    $image = upload('image', $config);
    $image1 = upload('image1', $config1);
    $image2 = upload('image2', $config2);
    
    //cập nhật ảnh mới
    if(($image) || ($image1) || ($image2)){
        $product = array(
            'id' => $pid,
            'image' => $image,
            'image1' => $image1,
            'image2' => $image2,
        );
        //resize ảnh
        require('librarys/CImage.php');
        $image = new CImage('public/upload/product/'.$image);
        $image->resizeTo(470, 470);
        $image->save();

        $image1 = new CImage('public/upload/product/'.$image1);
        $image1->resizeTo(470, 470);
        $image1->save();

        $image2 = new CImage('public/upload/product/'.$image2);
        $image2->resizeTo(470, 470);
        $image2->save();

        $pid = save('products', $product);
    }
    
    //chuyển hướng
    header('location:admin.php?controller=product');
}

if (isset($_GET['pid'])) $pid = intval($_GET['pid']); else $pid=0;

//data
$title = ($pid==0) ? 'Thêm sản phẩm' : 'Sửa sản phẩm';
$user = $_SESSION['user'];
$product = get_a_record('products', $pid);

$categories = get_all('categories', array(
    'select'=>'id, parent_id, name',
    'order_by' => 'parent_id ASC, position ASC'
));


//load view
require('backend/views/product/edit.php');