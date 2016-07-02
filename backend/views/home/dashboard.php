<section id="content">
        <div class="page page-dashboard">
            <div class="pageheader">
                <h2>Tổng quan </h2>
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li><a href="."><i class="fa fa-home"></i> home</a></li>
                        <li><a href="admin.php">Tổng quan</a></li>
                    </ul>
                    <div class="page-toolbar">
                        <a role="button" tabindex="0" class="btn btn-lightred no-border pickDate">
                            <i class="fa fa-calendar"></i>&nbsp;&nbsp;<span></span>&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- cards row -->
            <div class="row">
                <!-- col -->
                <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                    <div class="card">
                        <div class="front bg-greensea">
                            <!-- row -->
                            <div class="row">
                                <!-- col -->
                                <div class="col-xs-4">
                                    <i class="fa fa-users fa-4x"></i>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-xs-8">
                                    <p class="text-elg text-strong mb-0">2</p>
                                    <span>Users</span>
                                </div>
                                <!-- /col -->
                            </div>
                            <!-- /row -->
                        </div>
                        <div class="back bg-greensea">
                            <!-- row -->
                            <div class="row">
                                <!-- col -->
                                <div class="col-xs-4">
                                    <a href=#><i class="fa fa-cog fa-2x"></i> Settings</a>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-xs-4">
                                    <a href=#><i class="fa fa-chain-broken fa-2x"></i> Content</a>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-xs-4">
                                    <a href="admin.php?controller=user"><i class="fa fa-ellipsis-h fa-2x"></i> More</a>
                                </div>
                                <!-- /col -->
                            </div>
                            <!-- /row -->
                        </div>
                    </div>
                </div>
                <!-- /col -->

                <!-- col -->
                <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                    <div class="card">
                        <div class="front bg-lightred">
                            <!-- row -->
                            <div class="row">
                                <!-- col -->
                                <div class="col-xs-4">
                                    <i class="fa fa-shopping-cart fa-4x"></i>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-xs-8">
                                    <p class="text-elg text-strong mb-0"><?php echo $total_orders; ?></p>
                                    <span>Orders</span>
                                </div>
                                <!-- /col -->
                            </div>
                            <!-- /row -->
                        </div>
                        <div class="back bg-lightred">
                            <!-- row -->
                            <div class="row">
                                <!-- col -->
                                <div class="col-xs-4">
                                    <a href=#><i class="fa fa-cog fa-2x"></i> Settings</a>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-xs-4">
                                    <a href=#><i class="fa fa-chain-broken fa-2x"></i> Content</a>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-xs-4">
                                    <a href="admin.php?controller=order"><i class="fa fa-ellipsis-h fa-2x"></i> More</a>
                                </div>
                                <!-- /col -->
                            </div>
                            <!-- /row -->
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                    <div class="card">
                        <div class="front bg-blue">
                            <!-- row -->
                            <div class="row">
                                <!-- col -->
                                <div class="col-xs-4">
                                    <i class="fa fa-usd fa-4x"></i>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-xs-8">
                                    <p class="text-elg text-strong mb-0"><?php echo $total_sales; ?></p>
                                    <span>Sales</span>
                                </div>
                                <!-- /col -->
                            </div>
                            <!-- /row -->
                        </div>
                        <div class="back bg-blue">
                            <!-- row -->
                            <div class="row">
                                <!-- col -->
                                <div class="col-xs-4">
                                    <a href=#><i class="fa fa-cog fa-2x"></i> Settings</a>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-xs-4">
                                    <a href=#><i class="fa fa-chain-broken fa-2x"></i> Content</a>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-xs-4">
                                    <a href=#><i class="fa fa-ellipsis-h fa-2x"></i> More</a>
                                </div>
                                <!-- /col -->
                            </div>
                            <!-- /row -->
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                    <div class="card">
                        <div class="front bg-slategray">

                            <!-- row -->
                            <div class="row">
                                <!-- col -->
                                <div class="col-xs-4">
                                    <i class="fa fa-eye fa-4x"></i>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-xs-8">
                                    <p class="text-elg text-strong mb-0"><?php echo $total_products_review ; ?></p>
                                    <span>Product Reviews</span>
                                </div>
                                <!-- /col -->
                            </div>
                            <!-- /row -->
                        </div>
                        <div class="back bg-slategray">
                            <!-- row -->
                            <div class="row">
                                <!-- col -->
                                <div class="col-xs-4">
                                    <a href=#><i class="fa fa-cog fa-2x"></i> Settings</a>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-xs-4">
                                    <a href=#><i class="fa fa-chain-broken fa-2x"></i> Content</a>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-xs-4">
                                    <a href=#><i class="fa fa-ellipsis-h fa-2x"></i> More</a>
                                </div>
                                <!-- /col -->
                            </div>
                            <!-- /row -->
                        </div>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
</section>