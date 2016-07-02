<!DOCTYPE html>
<html lang="vi" prefix="og: http://ogp.me/ns#">
<head>
    <base href="<?php echo BASEURL; ?>"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="<?php echo isset($description) ? $description : truncateStr($product['description'],160,"") ?>"/>
    <title><?php echo isset($title) ? $title : 'siêu thị thú nuôi'; ?></title>
    <!-- Facebook-->
    <meta property="og:title" content="<?php echo isset($title) ? $title : 'siêu thị thú nuôi'; ?>" />
    <meta property="og:type" content="product" />
    <meta property="og:description" content="<?php echo isset($description) ? $description : truncateStr($product['description'],160,"") ?>" />
    <meta property="og:image" content="<?php echo isset($product['image']) ? 'http://sieuthithunuoi/public/upload/product'.alias($product['name']) : 'http://sieuthithunuoi.com/public/images/logo.png' ?>" />
    <meta property="og:url" content="<?php echo 'http://sieuthithunuoi/'.alias($product['name']).'-p'.$product['id'].'.html'; ?>" />
    <!-- Twitter-->
    <meta name="twitter:card" content="website">
    <meta name="twitter:site" content="@Sieuthithunuoi.com">
    <meta name="twitter:creator" content="@Sieuthithunuoi.com">
    <meta name="twitter:title" content="<?php echo isset($title) ? $title : 'siêu thị thú nuôi'; ?>"/>
    <meta name="twitter:image" content="<?php echo isset($product['image']) ? 'http://sieuthithunuoi/public/upload/product'.alias($product['name']) : 'http://sieuthithunuoi.com/public/images/logo.png' ?>" />
    <meta name="twitter:description" content="<?php echo isset($description) ? $description : truncateStr($product['description'],160,"") ?>" />
    <link rel="shortcut icon" href="public/images/favicon.ico" type="image/x-icon"/>
    <link href="public/css/bootstrap.min.css" rel="stylesheet"/>  
    <link href="public/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="public/css/style.css" rel="stylesheet"/>  
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="public/js/html5shiv.js"></script>
    <script src="public/js/respond.min.js"></script>
    <![endif]-->
    </head>
<body>
<header id="header" class="b-header-3 b-header-3_not-home animated" role="banner">
      <!-- Header -->
    <div class="container b-header-3__content">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="row">
          <div class="b-header-3__logo col-lg-2 col-xs-12 col-sm-3">
                <a href="/" class="b-header-3__logo-image" title="Siêu thị thú nuôi">sieuthithunuoi.con</a>
          </div>
            <div class="header_icon col-lg-7 col-sm-9">
                <div class="header_icon_book">
                    <a>
                        <i class="fa fa-truck fa-2x visible-lg-inline-block visible-md-inline-block visible-sm-inline-block"></i>
                        <div class="visible-lg-inline-block visible-md-inline-block visible-sm-inline-block">
                            <p><b>Miễn phí giao hàng</b></p>
                            <p>Tận nơi - Toàn Quốc</p>
                        </div>
                        <span>Miễn phí giao hàng toàn quốc với đơn hàng trên 200.000VNĐ. Tp.HCM trên 100.000VNĐ</span>
                    </a>
                </div><!-- /header_icon book -->
                <div class="header_icon_truck">
                    <a>
                    <i class="fa fa-calendar fa-2x visible-lg-inline-block visible-md-inline-block visible-sm-inline-block"></i>
                    <div class="visible-lg-inline-block visible-md-inline-block visible-sm-inline-block">
                        <p><b>7 Ngày đổi trả</b></p>
                        <p>365 Ngày bảo hành</p>
                    </div>
                    <span>Sản phẩm nhận được không đúng miêu tả, không đạt được chất lượng bạn có thể đổi ngay.</span>
                    </a>
                </div><!-- /header_icon trunk-->
                <div class="header_icon_phone">
                    <a>
                    <i class="fa fa-clock-o fa-2x visible-lg-inline-block visible-md-inline-block visible-sm-inline-block"></i> 
                        <div class="visible-lg-inline-block visible-md-inline-block visible-sm-inline-block">
                         <p><b>Cam kết giao hàng</b></p>
                            <p>Trong vòng 1,2 ngày</p>
                        </div>     
                        <span>- Trong vòng 1 ngày đối với Tp.HCM<br/>- 2-3 ngày đối với các tỉnh</span>
                    </a>
                </div><!-- /header_icon phone-->
            </div><!-- /header_icon -->
            <div class="col-lg-3 col-xs-6 col-sm-2 visible-lg-block">
                <div id="login">
                    <div>
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="menu1"><span class="login">Đăng nhập/Đăng Ký</span><span class="caret"></span><br><span class="billing">Tài khoản và đơn hàng</span></a>
                    </div>
                    </div>
                        <a class="cart pull-right" href="gio-hang.html">
                            <span class="counter"><?php echo cart_number(); ?></span>
                        </a>
            </div><!-- /user -->
        </div><!-- /.row-1-->

        <div class="b-header-3__row-2 row"> 
                <div class="b-header-3__menu  col-lg-3 col-xs-4 col-sm-4 visible-lg">
                    <nav class="b-header-3__nav" role="navigation">
                        <div class="b-header-3__nav-box">
                            <a href="javascript:void(0)" class="b-header-3__menu-all" title="Tất cả Danh Mục">
                                <i class="fa fa-bars tk-i-all"></i>
                                <h3 class="b-header-3__menu-title" title="Tất Cả Danh Mục">DANH MỤC SẢN PHẨM</h3>
                            </a>
                                <?php echo menu_li(menu_list($categories)); ?>
                        </div>
                    </nav><!--/.b-header-3__nav -->
                </div>
                <div class="col-lg-7 col-xs-12 col-sm-7">
                    <form id="search_form" action="search.php" method="get">
                        <div class="input-group">
                            <div class="input-group-btn hidden-sm hidden-xs">
                                <button aria-expanded="false" type="button" class="btn btn-default dropdown-toggle show-all-button" data-toggle="dropdown">
                                    <span class="filter_box" data-category="">Tất cả</span><span class="caret"></span>
                                </button>
                               <ul class="dropdown-menu">
                                    <li><a class="pointer">Tất cả sản phẩm</a></li>
                                            <li><a class="pointer">Thức ăn vật nuôi</a></li>
                                            <li><a class="pointer">Dinh dưỡng vitamin</a></li>
                                            <li><a class="pointer">Sữa tắm đặc trị</a></li>
                                            <li><a class="pointer">Nhà ngủ ổ niệm</a></li>
                                            <li><a class="pointer">Túi xách vận chuyển</a></li>
                                </ul>
                            </div>
                            <input name="search" autocomplete="off" class="form-control" value="" placeholder="Tìm kiếm sản phẩm, thương hiệu mong muốn..." type="text">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit"  name="ok" value="search" >
                                    <span class="hidden-sm hidden-xs">Tìm</span>
                                    <i class="fa fa-search hidden-lg hidden-md"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
                <div class="col-lg-2 col-sm-5 hidden-xs">
                        <div class="hotline pull-right ">
                            <i class="fa fa-map-marker"></i><span> - TP.HCM --</span>
                            <i class="fa fa-phone"></i><span> - 0163.864.0062 </span>
                        </div>
                </div>

        </div>
    </div>
</header><!-- End Header-->