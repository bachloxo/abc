<!-- ====================================================
================= CONTENT ===============================
===================================================== -->
<section id="content">

    <div class="page page-forms-common">

        <div class="pageheader">

            <h2>Thông tin cá nhân </h2>

            <div class="page-bar">

                <ul class="page-breadcrumb">
                    <li>
                        <a href="admin.php"><i class="fa fa-home"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="admin.php?controller=user&action=info">Chỉnh sửa thông tin cá nhân </a>
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

                    <!-- tile body -->
                    <div class="tile-body">

                        <form id="user-form" class="form-horizontal" method="post" action="admin.php?controller=user&action=info" enctype="multipart/form-data" role="form">
                            <input name="id" type="hidden" value="<?php echo $user ? $user['id'] : '0'; ?>"/>
                            <div class="form-group">
                                <label for="email" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9">
                                    <input name="email" type="email" value="<?php echo $user ? $user['email'] : ''; ?>" class="form-control" id="email" placeholder="Email" required=""/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-3 control-label">Mật khẩu</label>
                                <div class="col-sm-9">
                                    <input name="password" type="password" value="" class="form-control" id="password" placeholder="Mật khẩu mới"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Họ và tên</label>
                                <div class="col-sm-9">
                                    <input name="name" type="text" value="<?php echo $user ? $user['name'] : ''; ?>" class="form-control" id="name" placeholder="Họ và tên" required=""/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="col-sm-3 control-label">Địa chỉ</label>
                                <div class="col-sm-9">
                                    <input name="address" type="text" value="<?php echo $user ? $user['address'] : ''; ?>" class="form-control" id="address" placeholder="Địa chỉ"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="col-sm-3 control-label">Di động</label>
                                <div class="col-sm-9">
                                    <input name="phone" type="text" value="<?php echo $user ? $user['phone'] : ''; ?>" class="form-control" id="phone" placeholder="Số di động" pattern="[0-9]{10,11}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-primary"><?php echo $user ? 'Cập nhật' : 'Thêm mới' ;?></button>
                                    <a class="btn btn-warning" href="admin.php">Trở về</a>
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
