<!DOCTYPE html>
<html lang="vi">
<head>
    <base href="<?php echo BASEURL; ?>"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="<?php echo truncateStr($product['description'],160,"") ?>"/>
    <title><?php echo isset($title) ? $title : 'siêu thị thú nuôi'; ?></title>
    <!-- Facebook-->
    <meta property="og:title" content="<?php echo isset($title) ? $title : 'siêu thị thú nuôi'; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="<?php echo truncateStr($product['description'],160,"") ?>" />
    <!-- Twitter-->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@Sieuthithunuoi.com">
    <meta name="twitter:creator" content="@Sieuthithunuoi.com">
    <meta name="twitter:title" content="<?php echo isset($title) ? $title : 'siêu thị thú nuôi'; ?>"/>
    <meta name="twitter:description" content="<?php echo truncateStr($product['description'],160,"") ?>"/>
    <link rel="shortcut icon" href="public/images/favicon.ico" type="image/x-icon"/>
    <link href="public/css/bootstrap.min.css" rel="stylesheet"/>  
    <link href="public/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="public/css/style.css" rel="stylesheet"/>  
        <link href="public/css/time-line.css" rel="stylesheet"/> 
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
            <div class="clear-fix visible-xs"><br><br><br></div>
            <div class="col-lg-10 col-sm-9 col-xs-12">
             <!-- BEGIN TIME LINE -->
                 <ol class="timeline">
                    <li class="timeline__step done">
                        <input class="timeline__step-radio" id="trigger1{{identifier}}" name="trigger{{identifier}}" type="radio">                  
                        <span class="timeline__step-title">
                            Chọn sản phẩm</span>
                        
                        <i class="timeline__step-marker"><i class="fa fa-check"></i></i>
                    </li>
                    <li class="timeline__step">
                        <input class="timeline__step-radio" id="trigger2{{identifier}}" name="trigger{{identifier}}" type="radio">                    
                        <span class="timeline__step-title">
                        Cập nhật giỏ hàng</span>

                        <i class="timeline__step-marker"><i class="fa fa-shopping-cart"></i></i>
                    </li>
                    <li class="timeline__step">
                        <input class="timeline__step-radio" id="trigger3{{identifier}}" name="trigger{{identifier}}" type="radio">
                        
                        <span class="timeline__step-title">
                            Nhập thông tin giao hàng</span>
                        
                        <i class="timeline__step-marker"><i class="fa fa-info"></i></i>
                    </li>
                </ol>
             <!-- END TIME LINE -->
            </div>
        </div><!-- /.row-1-->
    </div>
</header><!-- End Header-->
<div class="middle">
       <!-- BEGIN TIME LINE -->
   <br>
    <div class="container">
        <div class="row">
            <!-- BEGIN CONTENT -->
            <?php require('frontend/views/cart/list.php'); ?>
            <div class="clearfix"></div>
            <div class="col-md-12">
            <p><i>*** Sau khi cập nhật số lượng sản phầm trong giỏ hàng --> Click <b>Cập nhật</b></i></p>
            <p><i>*** Nhập SĐT và Địa chỉ để nhận hàng --> Click <b>Đơn hàng</b></i></p>
            <p><i>*** Tiếp tục mua thêm các sản phẩm khác --> Click <b>Quay lại mua hàng</b></i></p>
            </div>
            <!-- END CONTENT -->    
        </div><!--/row-->
    </div><!--/.container-->
</div>
    <?php require('frontend/views/common/footer.php'); ?> 
    <script type="text/javascript" src="public/js/jquery-1.10.2.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="public/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebar .panel-heading').click(function () {
                $('#sidebar .list-group').toggleClass('hidden-xs');
                $('#sidebar .panel-heading b').toggleClass('glyphicon-plus-sign').toggleClass('glyphicon-minus-sign');
            });
        });
    </script>
</body>
</html>