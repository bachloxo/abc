<?php
ob_start();
session_start();
require_once('config.php');
require_once('librarys/functions.php');
require_once('frontend/models/model.php');
require_once('frontend/models/cart.php');
//load view
$title = 'About Us Thông tin Siêu thị thú nuôi';
$categories = get_all('categories', array(
    'select' => 'id, parent_id, name',
    'order_by' => 'parent_id ASC, position ASC'
));
require_once('frontend/views/common/header-not-home.php'); 
?>
<div class="b-main" role="main">
    <div class="b-main-container container">
        <div class="row">          
            <div class="col-md-9">
               <h1>Kết nối với chúng tôi</h1>
               <p>Báo giá sỉ/ trở thành nhà cung cấp qua email : info@sieuthithunuoi.com</p> 
               <p>Rao bán sản phẩm cho cửa hàng của bạn: info@sieuthithunuoi.com</p>
               <p>Mua lại toàn bộ hệ thống php MVC thuần hoàn thiện SEO và mobile friendly và domain của website cũng như rất nhiều từ khóa lên top. Liên hệ info@sieuthithunuoi.com</p>
            </div>
            <aside class="col-lg-3 col-md-3 col-sm-12 visible-lg-block visible-md-block">
                <div class="ad-right">
                    <div class="box-truck"></div>
                    <div class="box-content">
                        <div class="header">
                            <h4 class="title">Chính sách giao hàng</h4>
                        </div>
                        <div class="body">
                                <div class="item">
                                    <div class="icon"><i class="home truck"></i></div>
                                        <div class="text">Giao hàng bởi sieuthithunuoi.com</div>
                                </div>                  
                                <div class="item ">
                                    <div class="icon"><i class="home location"></i></div>
                                    <div class="text">Chỉ miễn phí giao hàng tại Tp. Hồ Chí Minh.</div>
                                </div>
                                <div class="item ">
                                    <div class="icon"><i class="home box"></i></div>
                                    <div class="text">Đổi trả trong 3 ngày, thủ tục đơn giản.</div>
                                </div>
                                <div class="item">
                                    <div class="icon"><i class="home bill"></i></div>
                                    <div class="text">Nhà cung cấp xuất hóa đơn cho sản phẩm này.</div>
                                </div>
                        </div>      
                    </div>
                </div>
            </aside>
            <div class="clearfix"></div>
        </div>
    </div><!--/span-->       
</div><!--/b-main-->
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