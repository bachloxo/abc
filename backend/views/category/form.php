<!-- ======== CONTENT ====== -->
<section id="content">
    <div class="page page-forms-common">
        <div class="pageheader">
            <h2>Chỉnh sửa danh mục </h2>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li><a href="admin.php"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li><a href="admin.php?controller=category&action=edit&cid=<?php echo $category ? $category['id'] : '0'; ?>">Chỉnh sửa danh mục </a></li>
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
                                    <li><a role="button" tabindex="0" class="tile-refresh"><i class="fa fa-refresh"></i> Refresh</a>
                                    </li>
                                    <li><a role="button" tabindex="0" class="tile-fullscreen"><i class="fa fa-expand"></i> Fullscreen</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                        </ul>
                    </div>
                    <!-- /tile header -->
                    <!-- tile body -->
                    <div class="tile-body">
                        <form class="form-horizontal" role="form" method="post" action="admin.php?controller=category&amp;action=edit" enctype="multipart/form-data" >
                            <input name="id" type="hidden" value="<?php echo $category ? $category['id'] : '0'; ?>"/>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Danh mục cha</label>
                                <div class="col-sm-10">
                                    <select name="parent_id" class="form-control mb-10">
                                        <option value="0">Danh mục gốc</option>
                                        <?php
                                        $parent_id = $category ? $category['parent_id'] : '0';
                                        echo menu_option(menu_list($categories), $parent_id); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Tên Danh Mục</label>
                                <div class="col-sm-10">
                                     <input name="name" type="text" value="<?php echo $category ? $category['name'] : ''; ?>" class="form-control" id="name" placeholder="Tên danh mục" required=""/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-2 control-label">Thứ tự</label>
                                <div class="col-sm-10">
                                    <input name="position" type="text" value="<?php echo $category ? $category['position'] : 0; ?>" class="form-control" id="position" placeholder="0" pattern="[0-9]+" required=""/>
                                </div>
                            </div>
                            <hr class="line-dashed line-full"/>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <a class="btn btn-lightred" href="admin.php?controller=category">Trở Về</a>
                                    <button type="submit" class="btn btn-default"><?php echo $category ? 'Cập nhật' : 'Thêm mới' ;?></button>
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
         