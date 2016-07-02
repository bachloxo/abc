<!--/ CONTENT -->
<!-- ====================================================
================= CONTENT ===============================
===================================================== -->
<section id="content">

    <div class="page page-shop-orders">

        <div class="pageheader">

            <h2>Orders </h2>

            <div class="page-bar">

                <ul class="page-breadcrumb">
                    <li>
                        <a href="admin.php"><i class="fa fa-home"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="admin.php?controller=order">Orders</a>
                    </li>
                </ul>
                
            </div>

        </div>

        <!-- page content -->
        <div class="pagecontent">


            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-md-12">

                    <!-- tile -->
                    <section class="tile">

                        <!-- tile header -->
                        <div class="tile-header dvd dvd-btm">
                            <h1 class="custom-font"><strong>Orders</strong> List</h1>
                            <ul class="controls">
                                <li><a href="javascipt:;"><i class="fa fa-plus mr-5"></i> New Order</a></li>

                                <li class="dropdown">

                                    <a role="button" tabindex="0" class="dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down ml-5"></i></a>

                                    <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                        <li>
                                            <a href>Export to XLS</a>
                                        </li>
                                        <li>
                                            <a href>Export to CSV</a>
                                        </li>
                                        <li>
                                            <a href>Export to XML</a>
                                        </li>
                                        <li role="presentation" class="divider"></li>
                                        <li>
                                            <a href>Print Invoices</a>
                                        </li>

                                    </ul>

                                </li>
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

                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-custom" id="orders-list">
                                    <thead>
                                    	<tr>
                                        <th style="width:40px;" class="no-sort">
                                            <label class="checkbox checkbox-custom-alt checkbox-custom-sm m-0">
                                                <input type="checkbox" id="select-all"><i></i>
                                            </label>
                                        </th>
                                        <th>ID</th>
										<th>Khách hàng</th>
										<th>Thời gian</th>
										<th>Tình trạng</th>
	                                  	</tr>
                                    </thead>
                                    <tbody>
									<?php foreach ($orders as $order): ?>
									<tr>
										<td><label class="checkbox checkbox-custom-alt checkbox-custom-sm m-0"><input class="selectMe" name="oid[]" type="checkbox" value="<?php echo $order['id'];?>"/><i></i></label></td>
										<td><?php echo $order['id'];?></td>
										<td><a href="admin.php?controller=order&amp;action=view&amp;oid=<?php echo $order['id'];?>"><?php echo $order['name'];?></a></td>
										<td><?php echo $order['create_time'];?></td>
										<td><?php echo $status[$order['status']];?></td>
									</tr>
									<?php endforeach; ?>
	                                </tbody>
	                            </table>
                            </div>
                        </div>
                        <!-- /tile body -->
                                            <!-- tile footer -->
	                    <div class="tile-footer dvd dvd-top">
	                        <div class="row">
	                            <div class="col-sm-5 hidden-xs">
	                                <select class="input-sm form-control w-sm inline">
	                                    <option value="0">Bulk action</option>
	                                    <option value="1">Delete selected</option>
	                                    <option value="2">Archive selected</option>
	                                    <option value="3">Copy selected</option>
	                                </select>
	                                <button class="btn btn-sm btn-default">Apply</button>
	                            </div>
	                            <div class="col-sm-3 text-center">
	                                <small class="text-muted">showing 0-15 of <?php echo $total_rows; ?> items</small>
	                            </div>
	                            <div class="col-sm-4 text-right">
	                                <?php echo $pagination_backend; ?>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- /tile footer -->
                    </section>
                    <!-- /tile -->

                </div>
                <!-- /col -->
            </div>
            <!-- /row -->




        </div>
        <!-- /page content -->

    </div>
    
</section>
<!--/ CONTENT -->