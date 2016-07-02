<!-- ====================================================
================= CONTENT ===============================
===================================================== -->
<section id="content">

    <div class="page page-shop-single-order">

        <div class="pageheader">

            <h2>Single Order </h2>

            <div class="page-bar">

                <ul class="page-breadcrumb">
                    <li>
                        <a href="admin.php"><i class="fa fa-home"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="admin.php?controller=order">Orders</a>
                    </li>
                    <li>
                        <a href="admin.php?controller=order&action=view&oid=<?php echo $order['id']; ?>">Order #<?php echo $order['id']; ?></a>
                    </li>
                </ul>
                
            </div>

        </div>

        <div class="pagecontent">


            <div class="add-nav">
                <div class="nav-heading">
                    <h3>Order Details : <strong class="text-greensea">#<?php echo $order['id']; ?></strong></h3>
                    <span class="controls pull-right">
                      <a href="admin.php?controller=order&amp;action=delete" class="btn btn-ef btn-ef-1 btn-ef-1-default btn-ef-1a btn-rounded-20 mr-5" data-toggle="tooltip" title="Back"><i class="fa fa-times"></i></a>
                      <a href="javascript:;" class="btn btn-ef btn-ef-1 btn-ef-1-default btn-ef-1a btn-rounded-20 mr-5" data-toggle="tooltip" title="Send"><i class="fa fa-envelope"></i></a>
                      <a href="javascript:window.print()" class="btn btn-ef btn-ef-1 btn-ef-1-default btn-ef-1a btn-rounded-20" data-toggle="tooltip" title="Print"><i class="fa fa-print"></i></a>
                    </span>
                    <form class="controls pull-right" id="order_form" method="post" action="admin.php?controller=order&amp;action=complete" role="form">
                    	<input name="oid" type="hidden" value="<?php echo $order['id']; ?>"/>
						<button class="btn btn-ef btn-ef-1 btn-ef-1-default btn-ef-1a btn-rounded-20 mr-5" type="submit" data-toggle="tooltip" title="Completed"><i class="fa fa-thumbs-o-up"></i></button>
                    </form>  
                </div>

                <div role="tabpanel">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#details" aria-controls="details" role="tab" data-toggle="tab">Details</a></li>
                        <li role="presentation"><a href="#invoices" aria-controls="invoices" role="tab" data-toggle="tab">Invoices</a></li>
                        <li role="presentation"><a href="#payments" aria-controls="payments" role="tab" data-toggle="tab">Payments</a></li>
                        <li role="presentation"><a href="#notes" aria-controls="notes" role="tab" data-toggle="tab">Notes</a></li>
                        <li role="presentation"><a href="#historyTab" aria-controls="history" role="tab" data-toggle="tab">History</a></li>
                    </ul>

                    <div class="tab-content">
                        <!-- tab in tabs -->
                        <div role="tabpanel" class="tab-pane active" id="details">
                            <!-- row -->
                            <div class="row">
                                <!-- col -->
                                <div class="col-md-12">
                                    <!-- tile -->
                                    <section class="tile time-simple">
                                        <!-- tile body -->
                                        <div class="tile-body">
                                            <!-- row -->
                                            <div class="row">
                                                <!-- col -->
                                                <div class="col-md-8">
                                                    <p class="text-default lt">Created: <?php echo $order['create_time']; ?></p>
                                                    <p class="text-uppercase text-strong mt-40 mb-0 custom-font">Status</p>
                                                    <h3 class="text-uppercase text-success mt-0 mb-20">Peding</h3>
                                                </div>
                                                <!-- /col -->
                                                <!-- col -->
                                                <div class="col-md-4">
                                                    <p class="text-uppercase text-strong mb-10 custom-font">Customer</p>
                                                    <ul class="list-unstyled text-default lt mb-20">
                                                        <li><strong class="inline-block w-xs">Name:</strong> <?php echo $order['name']; ?></li>
                                                        <li><strong class="inline-block w-xs">State:</strong> Vietnam</li>
                                                        <li><strong class="inline-block w-xs">Phone:</strong> <?php echo $order['phone']; ?></li>
                                                        <li><strong class="inline-block w-xs">Email:</strong> <a href="javascript:;"><?php echo $order['email']; ?></a></li>
                                                    </ul>
                                                </div>
                                                <!-- /col -->

                                            </div>
                                            <!-- /row -->

                                            <!-- row -->
                                            <div class="row b-t pt-20">

                                                <!-- col -->
                                                <div class="col-md-3 b-r">
                                                    <p class="text-uppercase text-strong mb-10 custom-font">Order Details</p>
                                                    <ul class="list-unstyled text-default lt mb-20">
                                                        <li><strong>ID:</strong> <a href="javascript:;"><?php echo $order['id']; ?></a></li>
                                                        <li><?php echo $order['create_time']; ?></li>
                                                        <li><?php echo $order['name']; ?></li>
                                                        <li>VietNam</li>
                                                    </ul>
                                                </div>
                                                <!-- /col -->

                                                <!-- col -->
                                                <div class="col-md-6 b-r">
                                                    <p class="text-uppercase text-strong mb-10 custom-font">
                                                        Address
                                                        <a href="javascript:;" class="btn btn-default btn-rounded-20 btn-xs pull-right"><i class="fa fa-pencil"></i></a>
                                                    </p>

                                                    <!-- col -->
                                                    <div class="col-md-6">
                                                        <ul class="list-unstyled text-default lt mb-20">
                                                            <li><?php echo $order['name']; ?></li>
                                                            <li><?php echo $order['address']; ?></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /col -->

                                                    <!-- col -->
                                                    <div class="col-md-6">
                                                        <ul class="list-unstyled text-default lt mb-20">
                                                            <li><?php echo $order['email']; ?></li>
                                                            <li><?php echo $order['phone']; ?></li>
                                                        </ul>
                                                    </div>
                                                    <!-- /col -->

                                                </div>
                                                <!-- /col -->

                                                <!-- col -->
                                                <div class="col-md-3">
                                                    <p class="text-uppercase text-strong mb-10 custom-font">Delivery &amp; Payment</p>
                                                    <ul class="list-unstyled text-default lt mb-20">
                                                        <li><strong>Delivery:</strong> Pick-Up</li>
                                                        <li><strong>Payment:</strong> Cash</li>
                                                    </ul>
                                                </div>
                                                <!-- /col -->

                                            </div>
                                            <!-- /row -->


                                        </div>
                                        <!-- /tile body -->

                                    </section>
                                    <!-- /tile -->


                                    <!-- tile -->
                                    <section class="tile tile-simple">

                                        <!-- tile body -->
                                        <div class="tile-body p-0">

                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped">
                                                    <thead>
                                                    	<tr>
															<th>STT</th>
															<th>Ảnh</th>
															<th>Sản phẩm</th>
															<th>Item Status</th>
															<th>Giá</th>
															<th>Discount %</th>
															<th>Số lượng</th>
															<th>Total</th>
														</tr>
                                                    </thead>
                                                    <tbody>
														<?php
														$stt = 0;
														$order_total = 0;
														foreach ($order_detail as $product): 
															$stt++;
															$order_total += $product['price'] * $product['number'];
														?>
														<tr>
															<td><?php echo $stt;?></td>
															<td>
																<?php
																$image = 'public/upload/product/'.$product['image'];
																if (is_file($image)) {
											                        echo '<image src="'.$image.'" style="max-width:50px; max-height:50px;" />';
											                    }
											                    ?>
											                </td>
															<td>
																<?php echo $product['name'];?>
															</td>
															<td><span class="label label-success">Available</span></td>
															<td>
																<?php echo number_format($product['price'],0,',','.'); ?> VNĐ
															</td>
															<td>0%</td>
															<td class="ng-binding">
																<?php echo $product['number'];?>
															</td>
															<td class="ng-binding"><?php echo number_format(($product['price']*$product['number']),0,',','.'); ?> VNĐ</td>
														</tr>
														<?php endforeach; ?>
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

                            <!-- row -->
                            <div class="row">
                                <!-- col -->
                                <div class="col-md-3 col-md-offset-9 price-total">

                                    <!-- tile -->
                                    <section class="tile tile-simple bg-tr-black lter">

                                        <!-- tile body -->
                                        <div class="tile-body">

                                            <ul class="list-unstyled">
                                                <li class="ng-binding"><strong class="inline-block w-sm mb-5">Subtotal:</strong> <?php echo number_format($order_total,0,',','.'); ?></li>
                                                <li class="ng-binding"><strong class="inline-block w-sm mb-5">Shipping:</strong> 0 VNĐ</li>
                                                <li class="ng-binding"><strong class="inline-block w-sm mb-5">Grand Total:</strong> <?php echo number_format($order_total,0,',','.'); ?></li>
                                                <li class="ng-binding"><strong class="inline-block w-sm mb-5">Total Paid:</strong> <?php echo number_format($order_total,0,',','.'); ?></li>
                                                <li class="ng-binding"><strong class="inline-block w-sm mb-5">Total Refunded:</strong> $0.00</li>
                                                <li><strong class="inline-block w-sm">Total Due:</strong> <h3 class="inline-block text-success"><?php echo number_format($order_total,0,',','.'); ?> VNĐ</h3></li>
                                            </ul>

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
                        <div role="tabpanel" class="tab-pane" id="invoices">
                            <!-- row -->
                            <div class="row">
                                <!-- col -->
                                <div class="col-md-12">


                                    <!-- tile -->
                                    <section class="tile time-simple">


                                        <!-- tile body -->
                                        <div class="tile-body">


                                            <!-- row -->
                                            <div class="row">

                                                <!-- col -->
                                                <div class="col-md-9">
                                                    <p class="text-default lt">Created: January 29, 2015 at 16:58</p>
                                                    <p class="text-uppercase text-strong mt-40 mb-0 custom-font">Status</p>
                                                    <h3 class="text-uppercase text-success mt-0 mb-20">Pending</h3>
                                                </div>
                                                <!-- /col -->

                                                <!-- col -->
                                                <div class="col-md-3">
                                                    <p class="text-uppercase text-strong mb-10 custom-font">Customer</p>
                                                    <ul class="list-unstyled text-default lt mb-20">
                                                        <li><strong class="inline-block w-xs">Name:</strong> John Douey</li>
                                                        <li><strong class="inline-block w-xs">State:</strong> Ukraine</li>
                                                        <li><strong class="inline-block w-xs">Phone:</strong> <?php echo $order['phone']; ?></li>
                                                        <li><strong class="inline-block w-xs">Email:</strong> <a href="javascript:;">john.douey@gmail.com</a></li>
                                                    </ul>
                                                </div>
                                                <!-- /col -->

                                            </div>
                                            <!-- /row -->

                                            <!-- row -->
                                            <div class="row b-t pt-20">

                                                <!-- col -->
                                                <div class="col-md-3 b-r">
                                                    <p class="text-uppercase text-strong mb-10 custom-font">Order Details</p>
                                                    <ul class="list-unstyled text-default lt mb-20">
                                                        <li><strong>ID:</strong> <a href="javascript:;">35651</a></li>
                                                        <li>January 29, 2015 at 16:58</li>
                                                        <li>John Douey</li>
                                                        <li>Ukraine</li>
                                                    </ul>
                                                </div>
                                                <!-- /col -->

                                                <!-- col -->
                                                <div class="col-md-6 b-r">
                                                    <p class="text-uppercase text-strong mb-10 custom-font">
                                                        Address
                                                        <a href="javascript:;" class="btn btn-default btn-rounded-20 btn-xs pull-right"><i class="fa fa-pencil"></i></a>
                                                    </p>

                                                    <!-- col -->
                                                    <div class="col-md-6">
                                                        <ul class="list-unstyled text-default lt mb-20">
                                                            <li>John Douey</li>
                                                            <li>Vajnorska 512</li>
                                                            <li>Bratislava, Bratislava 1</li>
                                                            <li>811 09</li>
                                                        </ul>
                                                    </div>
                                                    <!-- /col -->

                                                    <!-- col -->
                                                    <div class="col-md-6">
                                                        <ul class="list-unstyled text-default lt mb-20">
                                                            <li>john.douey@gmail.com</li>
                                                            <li>655 169 4599</li>
                                                        </ul>
                                                    </div>
                                                    <!-- /col -->

                                                </div>
                                                <!-- /col -->

                                                <!-- col -->
                                                <div class="col-md-3">
                                                    <p class="text-uppercase text-strong mb-10 custom-font">Delivery &amp; Payment</p>
                                                    <ul class="list-unstyled text-default lt mb-20">
                                                        <li><strong>Delivery:</strong> Pick-Up</li>
                                                        <li><strong>Payment:</strong> Cash</li>
                                                    </ul>
                                                </div>
                                                <!-- /col -->

                                            </div>
                                            <!-- /row -->


                                        </div>
                                        <!-- /tile body -->

                                    </section>
                                    <!-- /tile -->


                                    <!-- tile -->
                                    <section class="tile tile-simple">

                                        <!-- tile body -->
                                        <div class="tile-body p-0">

                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>Invoice ID</th>
                                                        <th>Created At</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                        <th style="width: 260px">Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><a href="javascript:;">201500156</a></td>
                                                        <td>Jan 26, 2015</td>
                                                        <td><span class="label label-success">Paid</span></td>
                                                        <td class="ng-binding">$264.00</td>
                                                        <td>
                                                            <a href="javascript:;" class="btn btn-xs btn-default"><i class="fa fa-search"></i> View</a>
                                                            <a href="javascript:;" class="btn btn-xs btn-primary"><i class="fa fa-envelope"></i> Send</a>
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
                        <div role="tabpanel" class="tab-pane" id="payments">

                            <!-- row -->
                            <div class="row">
                                <!-- col -->
                                <div class="col-md-12">

                                    <!-- tile -->
                                    <section class="tile time-simple">


                                        <!-- tile body -->
                                        <div class="tile-body">


                                            <!-- row -->
                                            <div class="row">

                                                <!-- col -->
                                                <div class="col-md-9">
                                                    <p class="text-default lt">Created: January 29, 2015 at 16:58</p>
                                                    <p class="text-uppercase text-strong mt-40 mb-0 custom-font">Status</p>
                                                    <h3 class="text-uppercase text-success mt-0 mb-20">Completed</h3>
                                                </div>
                                                <!-- /col -->

                                                <!-- col -->
                                                <div class="col-md-3">
                                                    <p class="text-uppercase text-strong mb-10 custom-font">Customer</p>
                                                    <ul class="list-unstyled text-default lt mb-20">
                                                        <li><strong class="inline-block w-xs">Name:</strong> John Douey</li>
                                                        <li><strong class="inline-block w-xs">State:</strong> Ukraine</li>
                                                        <li><strong class="inline-block w-xs">Phone:</strong> 069 654 5662</li>
                                                        <li><strong class="inline-block w-xs">Email:</strong> <a href="javascript:;">john.douey@gmail.com</a></li>
                                                    </ul>
                                                </div>
                                                <!-- /col -->

                                            </div>
                                            <!-- /row -->

                                            <!-- row -->
                                            <div class="row b-t pt-20">

                                                <!-- col -->
                                                <div class="col-md-3 b-r">
                                                    <p class="text-uppercase text-strong mb-10 custom-font">Order Details</p>
                                                    <ul class="list-unstyled text-default lt mb-20">
                                                        <li><strong>ID:</strong> <a href="javascript:;">35651</a></li>
                                                        <li>January 29, 2015 at 16:58</li>
                                                        <li>John Douey</li>
                                                        <li>Ukraine</li>
                                                    </ul>
                                                </div>
                                                <!-- /col -->

                                                <!-- col -->
                                                <div class="col-md-6 b-r">
                                                    <p class="text-uppercase text-strong mb-10 custom-font">
                                                        Address
                                                        <a href="javascript:;" class="btn btn-default btn-rounded-20 btn-xs pull-right"><i class="fa fa-pencil"></i></a>
                                                    </p>

                                                    <!-- col -->
                                                    <div class="col-md-6">
                                                        <ul class="list-unstyled text-default lt mb-20">
                                                            <li>John Douey</li>
                                                            <li>Vajnorska 512</li>
                                                            <li>Bratislava, Bratislava 1</li>
                                                            <li>811 09</li>
                                                        </ul>
                                                    </div>
                                                    <!-- /col -->

                                                    <!-- col -->
                                                    <div class="col-md-6">
                                                        <ul class="list-unstyled text-default lt mb-20">
                                                            <li>john.douey@gmail.com</li>
                                                            <li>655 169 4599</li>
                                                        </ul>
                                                    </div>
                                                    <!-- /col -->

                                                </div>
                                                <!-- /col -->

                                                <!-- col -->
                                                <div class="col-md-3">
                                                    <p class="text-uppercase text-strong mb-10 custom-font">Delivery &amp; Payment</p>
                                                    <ul class="list-unstyled text-default lt mb-20">
                                                        <li><strong>Delivery:</strong> Pick-Up</li>
                                                        <li><strong>Payment:</strong> Cash</li>
                                                    </ul>
                                                </div>
                                                <!-- /col -->

                                            </div>
                                            <!-- /row -->


                                        </div>
                                        <!-- /tile body -->

                                    </section>
                                    <!-- /tile -->


                                    <!-- tile -->
                                    <section class="tile tile-simple">

                                        <!-- tile body -->
                                        <div class="tile-body p-0">

                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>Payment ID</th>
                                                        <th>Payment Note</th>
                                                        <th>Payment Date</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><a href="javascript:;">201500156</a></td>
                                                        <td>Payment received for invoice 201500156</td>
                                                        <td>Jan 27, 2015</td>
                                                        <td><span class="label label-success">Received</span></td>
                                                        <td class="ng-binding">$264.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:;">201500156</a></td>
                                                        <td>Payment request sent for invoice 201500156</td>
                                                        <td>Jan 26, 2015</td>
                                                        <td><span class="label label-default">Sent</span></td>
                                                        <td class="ng-binding">$264.00</td>
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
                        <div role="tabpanel" class="tab-pane" id="notes">



                            <!-- row -->
                            <div class="row">
                                <!-- col -->
                                <div class="col-md-3">

                                    <!-- tile -->
                                    <section class="tile tile-simple">

                                        <!-- tile body -->
                                        <div class="tile-body">

                                            <header class="mb-20">
                                                <span class="text-sm text-default lt">Created at: 26 Jan, 2015</span>
                                                <span class="pull-right text-sm text-default lt">ID: 266946</span>
                                            </header>

                                            <h4 class="mt-10">This is Note</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

                                        </div>
                                        <!-- /tile body -->

                                    </section>
                                    <!-- /tile -->
                                </div>
                                <!-- /col -->

                                <!-- col -->
                                <div class="col-md-3">

                                    <!-- tile -->
                                    <section class="tile tile-simple">

                                        <!-- tile body -->
                                        <div class="tile-body">

                                            <header class="mb-20">
                                                <span class="text-sm text-default lt">Created at: 26 Jan, 2015</span>
                                                <span class="pull-right text-sm text-default lt">ID: 266946</span>
                                            </header>

                                            <h4 class="mt-10">This is Note</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

                                        </div>
                                        <!-- /tile body -->

                                    </section>
                                    <!-- /tile -->
                                </div>
                                <!-- /col -->

                                <!-- col -->
                                <div class="col-md-3">

                                    <!-- tile -->
                                    <section class="tile tile-simple">

                                        <!-- tile body -->
                                        <div class="tile-body">

                                            <header class="mb-20">
                                                <span class="text-sm text-default lt">Created at: 26 Jan, 2015</span>
                                                <span class="pull-right text-sm text-default lt">ID: 266946</span>
                                            </header>

                                            <h4 class="mt-10">This is Note</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

                                        </div>
                                        <!-- /tile body -->

                                    </section>
                                    <!-- /tile -->
                                </div>
                                <!-- /col -->

                                <!-- col -->
                                <div class="col-md-3">

                                    <!-- tile -->
                                    <section class="tile tile-simple">

                                        <!-- tile body -->
                                        <div class="tile-body">

                                            <header class="mb-20">
                                                <span class="text-sm text-default lt">Created at: 26 Jan, 2015</span>
                                                <span class="pull-right text-sm text-default lt">ID: 266946</span>
                                            </header>

                                            <h4 class="mt-10">This is Note</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

                                        </div>
                                        <!-- /tile body -->

                                    </section>
                                    <!-- /tile -->
                                </div>
                                <!-- /col -->

                                <!-- col -->
                                <div class="col-md-3">

                                    <!-- tile -->
                                    <section class="tile tile-simple">

                                        <!-- tile body -->
                                        <div class="tile-body">

                                            <header class="mb-20">
                                                <span class="text-sm text-default lt">Created at: 26 Jan, 2015</span>
                                                <span class="pull-right text-sm text-default lt">ID: 266946</span>
                                            </header>

                                            <h4 class="mt-10">This is Note</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

                                        </div>
                                        <!-- /tile body -->

                                    </section>
                                    <!-- /tile -->
                                </div>
                                <!-- /col -->

                                <!-- col -->
                                <div class="col-md-3">

                                    <!-- tile -->
                                    <section class="tile tile-simple">

                                        <!-- tile body -->
                                        <div class="tile-body">

                                            <header class="mb-20">
                                                <span class="text-sm text-default lt">Created at: 26 Jan, 2015</span>
                                                <span class="pull-right text-sm text-default lt">ID: 266946</span>
                                            </header>

                                            <h4 class="mt-10">This is Note</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

                                        </div>
                                        <!-- /tile body -->

                                    </section>
                                    <!-- /tile -->
                                </div>
                                <!-- /col -->

                                <!-- col -->
                                <div class="col-md-3">

                                    <!-- tile -->
                                    <section class="tile tile-simple no-bg">

                                        <!-- tile body -->
                                        <div class="tile-body p-0">

                                            <a href="javascript:;" class="tile-button bg-white"><i class="fa fa-plus"></i> Add Note</a>

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
                                    <section class="tile time-simple">


                                        <!-- tile body -->
                                        <div class="tile-body">


                                            <!-- row -->
                                            <div class="row">

                                                <!-- col -->
                                                <div class="col-md-9">
                                                    <p class="text-default lt">Created: January 29, 2015 at 16:58</p>
                                                    <p class="text-uppercase text-strong mt-40 mb-0 custom-font">Status</p>
                                                    <h3 class="text-uppercase text-success mt-0 mb-20">Completed</h3>
                                                </div>
                                                <!-- /col -->

                                                <!-- col -->
                                                <div class="col-md-3">
                                                    <p class="text-uppercase text-strong mb-10 custom-font">Customer</p>
                                                    <ul class="list-unstyled text-default lt mb-20">
                                                        <li><strong class="inline-block w-xs">Name:</strong> John Douey</li>
                                                        <li><strong class="inline-block w-xs">State:</strong> Ukraine</li>
                                                        <li><strong class="inline-block w-xs">Phone:</strong> 069 654 5662</li>
                                                        <li><strong class="inline-block w-xs">Email:</strong> <a href="javascript:;">john.douey@gmail.com</a></li>
                                                    </ul>
                                                </div>
                                                <!-- /col -->

                                            </div>
                                            <!-- /row -->

                                            <!-- row -->
                                            <div class="row b-t pt-20">

                                                <!-- col -->
                                                <div class="col-md-3 b-r">
                                                    <p class="text-uppercase text-strong mb-10 custom-font">Order Details</p>
                                                    <ul class="list-unstyled text-default lt mb-20">
                                                        <li><strong>ID:</strong> <a href="javascript:;">35651</a></li>
                                                        <li>January 29, 2015 at 16:58</li>
                                                        <li>John Douey</li>
                                                        <li>Ukraine</li>
                                                    </ul>
                                                </div>
                                                <!-- /col -->

                                                <!-- col -->
                                                <div class="col-md-6 b-r">
                                                    <p class="text-uppercase text-strong mb-10 custom-font">
                                                        Address
                                                        <a href="javascript:;" class="btn btn-default btn-rounded-20 btn-xs pull-right"><i class="fa fa-pencil"></i></a>
                                                    </p>

                                                    <!-- col -->
                                                    <div class="col-md-6">
                                                        <ul class="list-unstyled text-default lt mb-20">
                                                            <li>John Douey</li>
                                                            <li>Vajnorska 512</li>
                                                            <li>Bratislava, Bratislava 1</li>
                                                            <li>811 09</li>
                                                        </ul>
                                                    </div>
                                                    <!-- /col -->

                                                    <!-- col -->
                                                    <div class="col-md-6">
                                                        <ul class="list-unstyled text-default lt mb-20">
                                                            <li>john.douey@gmail.com</li>
                                                            <li>655 169 4599</li>
                                                        </ul>
                                                    </div>
                                                    <!-- /col -->

                                                </div>
                                                <!-- /col -->

                                                <!-- col -->
                                                <div class="col-md-3">
                                                    <p class="text-uppercase text-strong mb-10 custom-font">Delivery &amp; Payment</p>
                                                    <ul class="list-unstyled text-default lt mb-20">
                                                        <li><strong>Delivery:</strong> Pick-Up</li>
                                                        <li><strong>Payment:</strong> Cash</li>
                                                    </ul>
                                                </div>
                                                <!-- /col -->

                                            </div>
                                            <!-- /row -->


                                        </div>
                                        <!-- /tile body -->

                                    </section>
                                    <!-- /tile -->


                                    <!-- tile -->
                                    <section class="tile tile-simple">

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
                                                        <td>Order Created</td>
                                                        <td>Jan 20, 2015</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:;">2</a></td>
                                                        <td>Order Received</td>
                                                        <td>Jan 20, 2015</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:;">2</a></td>
                                                        <td>Order Shipped</td>
                                                        <td>Jan 21, 2015</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:;">2</a></td>
                                                        <td>Invoice Created</td>
                                                        <td>Jan 21, 2015</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:;">2</a></td>
                                                        <td>Invoice Sent</td>
                                                        <td>Jan 21, 2015</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:;">2</a></td>
                                                        <td>Payment Received</td>
                                                        <td>Jan 23, 2015</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:;">2</a></td>
                                                        <td>Order Completed</td>
                                                        <td>Jan 23, 2015</td>
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

                    </div>
                </div>
            </div>



        </div>

    </div>
    
</section>
<!--/ CONTENT -->