<!-- ================= CONTENT =============================== -->
<section id="content">
    <div class="page page-forms-common">
        <div class="pageheader">
            <h2>Chỉnh sửa danh mục </h2>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li><a href="admin.php"><i class="fa fa-home"></i> Tổng quan</a></li>
                    <li><a href="admin.php?controller=product"> Products</a>
                    </li>
                    <li><a href="admin.php?controller=product&action=edit&pid=<?php echo $product ? $product['id'] : '0'; ?>"> Product #<?php echo $product ? $product['id'] : '0'; ?></a></li>
                </ul>                
            </div>
        </div>
        <div class="pagecontent">
            <div class="add-nav">
                <div class="nav-heading">
                    <h3>Product Details : <strong class="text-greensea">#<?php echo $product ? $product['id'] : '0'; ?></strong></h3>
                    <span class="controls pull-right">
                      <a href="admin.php?controller=product" class="btn btn-ef btn-ef-1 btn-ef-1-default btn-ef-1a btn-rounded-20 mr-5" data-toggle="tooltip" title="Back"><i class="fa fa-times"></i></a>
                      <a href="javascript:;" class="btn btn-ef btn-ef-1 btn-ef-1-success btn-ef-1a btn-rounded-20 mr-5" data-toggle="tooltip" title="Save"><i class="fa fa-check"></i></a>
                      <a href="admin.php?controller=product&amp;action=delete&amp;pid=<?php echo $product['id'];?>" class="btn btn-ef btn-ef-1 btn-ef-1-danger btn-ef-1a btn-rounded-20 mr-5" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                      <a href="javascript:;" class="btn btn-ef btn-ef-1 btn-ef-1-default btn-ef-1a btn-rounded-20 mr-5" data-toggle="tooltip" title="More"><i class="fa fa-ellipsis-h"></i></a>
                    </span>
                </div>
                <div role="tabpanel">                    
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#general" aria-controls="general" role="tab" data-toggle="tab">General</a></li>
                        <li role="presentation"><a href="#meta" aria-controls="meta" role="tab" data-toggle="tab">Meta</a></li>
                         <li role="presentation"><a href="#options" aria-controls="options" role="tab" data-toggle="tab">Product_options</a></li>
                        <li role="presentation"><a href="#images" aria-controls="images" role="tab" data-toggle="tab">Images</a></li>
                        <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews</a></li>
                        <li role="presentation"><a href="#historyTab" aria-controls="history" role="tab" data-toggle="tab">History</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="general">
                            <!-- row -->
                            <div class="row">
                                <!-- col -->
                                <div class="col-md-12">
                                    <!-- tile -->
                                    <section class="tile">
                                        <!-- tile header -->
                                        <div class="tile-header dvd dvd-btm">
                                            <h1 class="custom-font"><strong>Edit </strong> General Informations</h1>
                                        </div>
                                        <!-- /tile header -->
                                        <!-- tile body -->
                                        <div class="tile-body">
                                            <form class="form-horizontal" role="form"  method="post" action="admin.php?controller=product&amp;action=edit" enctype="multipart/form-data" >
                                                <input name="id" type="hidden" value="<?php echo $product ? $product['id'] : '0'; ?>"/>
                                                <div class="form-group">
                                                    <label for="status" class="col-sm-2 control-label">Trạng thái : <span class="text-lightred text-md">*</span></label>
                                                    <div class="col-sm-10">
                                                        <select name="status" tabindex="3" id="status" class="form-control mb-10">
                                                            <option value="Còn hàng">Còn hàng</option>
                                                            <option value="Hết hàng">Hết hàng</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Danh mục </label>
                                                    <div class="col-sm-10">
                                                        <select name="category_id" class="form-control mb-10">
                                                             <option value="0">Danh mục gốc</option>
                                                          <?php
                                                            $category_id = $product ? $product['category_id'] : '0';
                                                            echo menu_option(menu_list($categories), $category_id); ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-2 control-label">Sản phẩm</label>
                                                    <div class="col-sm-10">
                                                         <input name="name" type="text" value="<?php echo $product ? $product['name'] : ''; ?>" class="form-control" id="name" placeholder="Tên sản phẩm" required=""/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="brand" class="col-sm-2 control-label">Thương Hiệu</label>
                                                    <div class="col-sm-10">
                                                        <input name="brand" type="text" value="<?php echo $product ? $product['brand'] : ''; ?>" class="form-control" id="name" placeholder="Thương hiệu" required=""/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="description" class="col-sm-2 control-label">Meta description</label>
                                                    <div class="col-sm-10">
                                                        <input name="description" type="text" value="<?php echo $product ? $product['description'] : ''; ?>" class="form-control" id="description" placeholder="Meta description 180 ki tu"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="summary" class="col-sm-2 control-label">Tóm tắt Thông tin</label>
                                                    <div class="col-sm-10">
                                                        <textarea name="summary" rows="10" class="form-control ckeditor" placeholder="Thông tin sản phẩm" /><?php echo $product ? $product['summary'] : ''; ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="info_detail" class="col-sm-2 control-label">Giới thiệu chi tiết sản phẩm</label>
                                                    <div id="summernote" class="col-sm-10">
                                                        <textarea id="info_detail" name="info_detail" rows="30" class="form-control ckeditor" placeholder="Giới thiệu chi tiết sản phẩm" /><?php echo $product ? $product['info_detail'] : ''; ?></textarea>
                                                    </div>
                                                </div>   
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-2 control-label">Số lượng sản phẩm</label>
                                                    <div class="col-sm-10">
                                                        <input name="number" type="text" value="<?php echo $product ? $product['number'] : ''; ?>" class="form-control" placeholder="Số lượng sản phẩm" required=""/>
                                                    </div>
                                                </div>                         
                                                <div class="form-group">
                                                    <label for="price" class="col-sm-2 control-label">Giá</label>
                                                    <div class="col-sm-10">
                                                        <input name="price" type="text" value="<?php echo $product ? number_format($product['price'],0,',','.') : 0; ?>" class="form-control" id="price" placeholder="0" pattern="[0-9\.]+" required=""/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="image" class="col-sm-2 control-label">Ảnh Chính</label>
                                                    <div class="col-sm-10">
                                                        <input name="image" type="file" class="form-control" id="price" accept="image/*"/>
                                                        <?php if ($product && is_file('public/upload/product/'.$product['image'])) {
                                                            echo '<image src="public/upload/product/'.$product['image'].'?time='.time().'" style="max-width:470px;" />';
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="image" class="col-sm-2 control-label">Ảnh phụ 1</label>
                                                    <div class="col-sm-10">
                                                        <input name="image1" type="file" class="form-control" id="price1" accept="image1/*"/>
                                                        <?php if ($product && is_file('public/upload/product/'.$product['image1'])) {
                                                            echo '<image src="public/upload/product/'.$product['image1'].'?time='.time().'" style="max-width:143px;" />';
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="image" class="col-sm-2 control-label">Ảnh phụ 2</label>
                                                    <div class="col-sm-10">
                                                        <input name="image2" type="file" class="form-control" id="price2" accept="image2/*"/>
                                                        <?php if ($product && is_file('public/upload/product/'.$product['image2'])) {
                                                            echo '<image src="public/upload/product/'.$product['image2'].'?time='.time().'" style="max-width:143px;" />';
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label class="col-sm-2 control-label">Sản phẩm liên quan 1</label>
                                                    <div class="col-sm-10">
                                                        <input name="product_related_1" type="text" value="<?php echo $product ? $product['product_related_1'] : ''; ?>" class="form-control" placeholder="ID sản phẩm liên quan 1" required=""/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Sản phẩm liên quan 2</label>
                                                    <div class="col-sm-10">
                                                        <input name="product_related_2" type="text" value="<?php echo $product ? $product['product_related_2'] : ''; ?>" class="form-control" placeholder="ID sản phẩm liên quan 2" required=""/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Sản phẩm liên quan 3</label>
                                                    <div class="col-sm-10">
                                                        <input name="product_related_3" type="text" value="<?php echo $product ? $product['product_related_3'] : ''; ?>" class="form-control" placeholder="ID sản phẩm liên quan 3" required=""/>
                                                    </div>
                                                </div>
                                                    <hr class="line-dashed line-full"/>

                                                    <div class="form-group">
                                                        <div class="col-sm-4 col-sm-offset-2">
                                                            <a  href="admin.php?controller=product" type="reset" class="btn btn-lightred">Cancel</a>
                                                            <button type="submit" class="btn btn-default"><?php echo $product ? 'Cập nhật' : 'Thêm mới' ;?></button>
                                                        </div>
                                                    </div>
                                            </form>


                                        </div>
                                        <!-- /tile body -->
                                    </section>
                                    <!-- /tile -->
                                </div>
                                <!-- /col -->
                            </div>
                            <!-- /row -->
                        </div>
                        <!-- tab in tabs -->
                        <div role="tabpanel" class="tab-pane" id="meta">
                            <!-- row -->
                            <div class="row">
                                <!-- col -->
                                <div class="col-md-12">
                                    <!-- tile -->
                                    <section class="tile">
                                        <!-- tile header -->
                                        <div class="tile-header dvd dvd-btm">
                                            <h1 class="custom-font"><strong>Edit </strong> Meta Informations</h1>
                                        </div>
                                        <!-- /tile header -->
                                        <!-- tile body -->
                                        <div class="tile-body">
                                            <form class="form-horizontal ng-pristine ng-valid" role="form">
                                                <div class="form-group">
                                                    <label for="title" class="col-sm-2 control-label">Title:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="title" placeholder="Meta Title" value="Onions">
                                                        <span class="help-block">max 100 chars</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="keywords" class="col-sm-2 control-label">Keywords:</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" id="keywords" placeholder="Meta Keywords" rows="8">vegetables, onions, healthly</textarea>
                                                        <span class="help-block">max 1000 chars</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="mdescription" class="col-sm-2 control-label">Description:</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" id="mdescription" placeholder="Meta Description" rows="8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</textarea>
                                                        <span class="help-block">max 255 chars</span>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /tile body -->
                                    </section>
                                    <!-- /tile -->
                                </div>
                                <!-- /col -->
                            </div>
                            <!-- /row -->
                        </div>
                        <!-- tab in tabs -->
                        <div role="tabpanel" class="tab-pane" id="options">
                            <!-- row -->
                            <div class="row">
                                <!-- col -->
                                <div class="col-md-12">
                                  <!-- tile -->
                                    <section class="tile">
                                        <!-- tile header -->
                                        <div class="tile-header dvd dvd-btm">
                                            <h1 class="custom-font"><strong>Edit </strong> Product Options</h1>
                                        </div>
                                        <!-- /tile header -->
                                        <!-- tile body -->
                                        <div class="tile-body">   
                                        	<form class="form-horizontal" role="form" method="post" action="">
                                        		<input type="hidden" id="product_id" value="<?php echo ($product['id']); ?>">
                                            	<?php if (empty($products_options)) : ?>
                                            		<p>Thêm option đầu tiên cho product</p>
                                            		<div class="form-group">
					                            		<label for="options" class="col-sm-2 control-label">Options</label>
	                                                    <div class="col-sm-2">
	                                                        <input id="products_option1" value="<?php echo $products_option['options']; ?>"></input>
	                                                    </div>
	                                                    <label for="options" class="col-sm-2 control-label">Value</label>
	                                                    <div class="col-sm-2">
	                                                        <input id="products_option_value1" value="<?php echo $products_option['value']; ?>"></input>
	                                                    </div>
                                                	</div> 
                                            	<?php endif; ?>
                                            	<?php foreach($products_options as $products_option): ?>
					                            	<div class="form-group">
					                            		<label for="options" class="col-sm-2 control-label">Options</label>
	                                                    <div class="col-sm-2">
	                                                        <input id="products_option2" value="<?php echo $products_option['options']; ?>"></input>
	                                                    </div>
	                                                    <label for="options" class="col-sm-2 control-label">Value</label>
	                                                    <div class="col-sm-2">
	                                                        <input id="products_option_value2" value="<?php echo $products_option['value']; ?>"></input>
	                                                    </div>
	                                                    <div class="col-sm-4"></div>
                                                	</div>
                                                <?php endforeach; ?>
                                                <div id="result" class="col-xs-12 text-danger"></div>
                                                <div id="loadding" style="display: none;"><img src="/public/images/loading_gif_small.gif"></div>
                                                <div class="form-group col-xs-4">
                                                	<div class="pull-right">
                                                		<input class="btn btn-default" id="load_product_options" type="submit"  value="Submit" />
                                                	</div>
												</div>
                                            </form>                                       
                                        </div>
                                        <!-- /tile body -->
                                    </section>
                                    <!-- /tile -->
                                </div>
                                <!-- /col -->
                            </div>
                            <!-- /row -->
                        </div>
                        <!-- tab in tabs -->
                        <div role="tabpanel" class="tab-pane" id="images">
                            <!-- row -->
                            <div class="row">
                                <!-- col -->
                                <div class="col-md-12">


                                    <!-- tile -->
                                    <section class="tile">

                                        <!-- tile header -->
                                        <div class="tile-header dvd dvd-btm">
                                            <h1 class="custom-font"><strong>Edit </strong> Images</h1>
                                            <ul class="controls">
                                                <li><a href="javascript:;"><i class="fa fa-plus"></i> Add Image</a></li>
                                            </ul>
                                        </div>
                                        <!-- /tile header -->


                                        <!-- tile body -->
                                        <div class="tile-body">

                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th style="width: 110px">Image</th>
                                                        <th>Label</th>
                                                        <th style="width: 130px">Order</th>
                                                        <th>Base Image</th>
                                                        <th>Small Image</th>
                                                        <th>Thumbnail</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody data-lightbox="gallery">
                                                    <tr>
                                                        <td>
                                                            <a href="http://placekitten.com/g/800/600" class="img-link" data-lightbox="gallery-item">
                                                                <img src="http://placekitten.com/g/800/600" alt="" class="thumb thumb-lg">
                                                            </a>
                                                        </td>
                                                        <td><input type="text" class="form-control" placeholder="Image Label" value="Product thumbnail"></td>
                                                        <td><input type="text" value="1" class="form-control touchspin" data-min='0' data-max="100" data-boostat="5" data-maxboostedstep="10"></td>
                                                        <td>
                                                            <label class="checkbox checkbox-custom-alt checkbox-custom-sm">
                                                                <input name="product1" type="radio"><i></i>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label class="checkbox checkbox-custom-alt checkbox-custom-sm">
                                                                <input name="product1" type="radio"><i></i>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label class="checkbox checkbox-custom-alt checkbox-custom-sm">
                                                                <input name="product1" type="radio" checked=""><i></i>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-xs btn-lightred"><i class="fa fa-times"></i> Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="http://placekitten.com/g/800/601" class="img-link" data-lightbox="gallery-item">
                                                                <img src="http://placekitten.com/g/800/601" alt="" class="thumb thumb-lg">
                                                            </a>
                                                        </td>
                                                        <td><input type="text" class="form-control" placeholder="Image Label" value="Product Image 1"></td>
                                                        <td><input type="text" value="1" class="form-control touchspin" data-min='0' data-max="100" data-boostat="5" data-maxboostedstep="10"></td></td>
                                                        <td>
                                                            <label class="checkbox checkbox-custom-alt checkbox-custom-sm">
                                                                <input name="product2" type="radio" checked=""><i></i>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label class="checkbox checkbox-custom-alt checkbox-custom-sm">
                                                                <input name="product2" type="radio"><i></i>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label class="checkbox checkbox-custom-alt checkbox-custom-sm">
                                                                <input name="product2" type="radio"><i></i>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-xs btn-lightred"><i class="fa fa-times"></i> Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="http://placekitten.com/g/800/602" class="img-link" data-lightbox="gallery-item">
                                                                <img src="http://placekitten.com/g/800/602" alt="" class="thumb thumb-lg">
                                                            </a>
                                                        </td>
                                                        <td><input type="text" class="form-control" placeholder="Image Label" value="Product Image 2"></td>
                                                        <td><input type="text" value="1" class="form-control touchspin" data-min='0' data-max="100" data-boostat="5" data-maxboostedstep="10"></td></td>
                                                        <td>
                                                            <label class="checkbox checkbox-custom-alt checkbox-custom-sm">
                                                                <input name="product3" type="radio"><i></i>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label class="checkbox checkbox-custom-alt checkbox-custom-sm">
                                                                <input name="product3" type="radio" checked=""><i></i>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label class="checkbox checkbox-custom-alt checkbox-custom-sm">
                                                                <input name="product3" type="radio"><i></i>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-xs btn-lightred"><i class="fa fa-times"></i> Delete</a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /tile body -->
                                    </section>
                                    <!-- /tile -->
                                </div>
                                <!-- /col -->
                            </div>
                            <!-- /row -->
                        </div>
                        <!-- tab in tabs -->
                        <div role="tabpanel" class="tab-pane" id="reviews">
                            <!-- row -->
                            <div class="row">
                                <!-- col -->
                                <div class="col-md-12">
                                    <!-- tile -->
                                    <section class="tile">
                                        <!-- tile header -->
                                        <div class="tile-header dvd dvd-btm">
                                            <h1 class="custom-font"><strong>Product </strong> Reviews</h1>
                                        </div>
                                        <!-- /tile header -->
                                        <!-- tile body -->
                                        <div class="tile-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Rating</th>
                                                        <th>Review Date</th>
                                                        <th>Customer</th>
                                                        <th>Content</th>
                                                        <th>Status</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><a href="javascript:;">1</a></td>
                                                        <td><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star-half-o text-orange"></i><i class="fa fa-star-o"></i></td>
                                                        <td>Jan 20, 2015</td>
                                                        <td>Customer 1</td>
                                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                                                        <td><span class="label label-success">approved</span></td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-xs btn-default"><i class="fa fa-search"></i> View</a>
                                                            <a href="javascript:;" class="btn btn-xs btn-lightred"><i class="fa fa-times"></i> Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:;">2</a></td>
                                                        <td><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star-half-o text-orange"></i><i class="fa fa-star-o"></i></td>
                                                        <td>Jan 20, 2015</td>
                                                        <td>Customer 2</td>
                                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                                                        <td><span class="label label-success">approved</span></td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-xs btn-default"><i class="fa fa-search"></i> View</a>
                                                            <a href="javascript:;" class="btn btn-xs btn-lightred"><i class="fa fa-times"></i> Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:;">3</a></td>
                                                        <td><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star-half-o text-orange"></i><i class="fa fa-star-o"></i></td>
                                                        <td>Jan 21, 2015</td>
                                                        <td>Customer 3</td>
                                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                                                        <td><span class="label label-warning">pending</span></td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-xs btn-default"><i class="fa fa-search"></i> View</a>
                                                            <a href="javascript:;" class="btn btn-xs btn-lightred"><i class="fa fa-times"></i> Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:;">4</a></td>
                                                        <td><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star-half-o text-orange"></i><i class="fa fa-star-o"></i></td>
                                                        <td>Jan 21, 2015</td>
                                                        <td>Customer 4</td>
                                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                                                        <td><span class="label label-danger">rejected</span></td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-xs btn-default"><i class="fa fa-search"></i> View</a>
                                                            <a href="javascript:;" class="btn btn-xs btn-lightred"><i class="fa fa-times"></i> Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:;">5</a></td>
                                                        <td><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star-half-o text-orange"></i><i class="fa fa-star-o"></i></td>
                                                        <td>Jan 21, 2015</td>
                                                        <td>Customer 5</td>
                                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                                                        <td><span class="label label-danger">rejected</span></td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-xs btn-default"><i class="fa fa-search"></i> View</a>
                                                            <a href="javascript:;" class="btn btn-xs btn-lightred"><i class="fa fa-times"></i> Delete</a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /tile body -->
                                    </section>
                                    <!-- /tile -->
                                </div>
                                <!-- /col -->
                            </div>
                            <!-- /row -->
                        </div>
                        <!-- tab in tabs -->
                        <div role="tabpanel" class="tab-pane" id="historyTab">
                            <!-- row -->
                            <div class="row">
                                <!-- col -->
                                <div class="col-md-12">
                                    <!-- tile -->
                                    <section class="tile tile">
                                        <!-- tile header -->
                                        <div class="tile-header dvd dvd-btm">
                                            <h1 class="custom-font"><strong>Product </strong> History</h1>
                                        </div>
                                        <!-- /tile header -->
                                        <!-- tile body -->
                                        <div class="tile-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Desription</th>
                                                        <th>Date</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><a href="javascript:;">1</a></td>
                                                        <td>Product Created</td>
                                                        <td>Jan 20, 2015</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:;">2</a></td>
                                                        <td>Product is available</td>
                                                        <td>Jan 20, 2015</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:;">3</a></td>
                                                        <td>Product updated</td>
                                                        <td>Jan 21, 2015</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:;">4</a></td>
                                                        <td>Product is unavailable</td>
                                                        <td>Jan 21, 2015</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /tile body -->
                                    </section>
                                    <!-- /tile -->
                                </div>
                                <!-- /col -->
                            </div>
                            <!-- /row -->
                        </div><!-- end ngRepeat: tab in tabs -->
                    </div>
                </div>
            </div>
        </div>
    </div>               
</section>
<!--/ CONTENT -->
