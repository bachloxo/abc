<!-- ====================================================
================= CONTENT ===============================
===================================================== -->
<section id="content">
    <div class="page page-forms-common">
        <div class="pageheader">
            <h2>Chỉnh sửa danh mục </h2>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li><a href="admin.php"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li><a href="admin.php?controller=category&action=edit&cid=<?php echo $category ? $category['id'] : '0'; ?>">Chỉnh sửa danh mục </a>
                    </li>
                </ul>                
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-md-12">
                <!-- tile -->
                <section class="tile">
                    <!-- tile header -->
                    <div class="tile-header dvd dvd-btm">
                        <h1 class="custom-font"><strong>Chỉnh sửa danh mục</strong></h1>
                        <ul class="controls">
                            <li class="dropdown">
                                <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                    <i class="fa fa-spinner fa-spin"></i>
                                </a>
                                <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                    <li>
                                        <a role="button" tabindex="0" class="tile-toggle">
                                            <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                            <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a role="button" tabindex="0" class="tile-refresh">
                                            <i class="fa fa-refresh"></i> Refresh
                                        </a>
                                    </li>
                                    <li>
                                        <a role="button" tabindex="0" class="tile-fullscreen">
                                            <i class="fa fa-expand"></i> Fullscreen
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                        </ul>
                    </div>
                    <!-- /tile header -->
                    <!-- tile body -->
                    <div class="tile-body">
                      <form id="product-form" class="form-horizontal" method="post" action="admin.php?controller=blog&amp;action=edit" enctype="multipart/form-data" role="form">
                            <input name="id" type="hidden" value="<?php echo $blog ? $blog['id'] : '0'; ?>"/>
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Tên bài viết</label>
                                <div class="col-sm-9">
                                    <input name="name" type="text" value="<?php echo $blog ? $blog['title'] : ''; ?>" class="form-control" id="name" placeholder="Tên bài viết" required=""/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-sm-3 control-label">Meta description</label>
                                <div class="col-sm-9">
                                    <input name="description" type="text" value="<?php echo $blog ? $blog['description'] : ''; ?>" class="form-control" id="description" placeholder="Meta description 180 ki tu"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="info_detail" class="col-sm-3 control-label">Chi tiết bài viết</label>
                                <div class="col-sm-9">
                                    <textarea id="info_detail" name="info_detail" rows="30" class="form-control ckeditor" placeholder="Chi tiết : Viết dài dài dùng con cái" /><?php echo $blog? $blog['content'] : ''; ?></textarea>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="description" class="col-sm-3 control-label">Tag</label>
                                <div class="col-sm-6">
                                    <input name="tag" type="text" value="<?php echo $blog ? $blog['tag'] : ''; ?>" class="form-control" id="tag" placeholder="Tag"/>
                                </div>
                                <div class="col-sm-3">
                                 <button type="add" class="btn btn-primary">Thêm</button>
                                 </div>
                            </div>   
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-primary"><?php echo $blog ? 'Cập nhật' : 'Thêm mới' ;?></button>
                                    <a class="btn btn-warning" href="admin.php?controller=blog">Trở về</a>
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
</section>
