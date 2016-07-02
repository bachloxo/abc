<?php
ob_start();
session_start();
require_once('config.php');
require_once('librarys/functions.php');
require_once('frontend/models/model.php');
require_once('frontend/models/cart.php');
//load view
$title = 'About Us Thông tin Siêu thị thú nuôi';
$description= 'Về chúng tôi và thông tin Siêu thị thú nuôi';
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
               <h1>Siêu thị thú nuôi</h1>
               <p>Sieuthithunuoi.com là một startup mới, trẻ năng động và sẵn sàng thay đổi với thị trường<br>
                    Ưu tiên của sieuthithunuoi.com là mong muốn sự tiện lợi nhất cho khách hàng ở thời đại công nghệ luôn thay đổi.<br>
                    Việc chăm sóc thú cưng không còn như thập niên trước, với nghiên cứu, ứng dụng thực tiễn, nhiều sản phẩm phù hợp mang đến nguồn dinh dưỡng, sức khỏe cả về thể chất lẫn tinh thần cho người bạn đồng hành của bạn trong cuộc sống.<br>
                    Để giảm thời gian chi phí đi lại, mang đến sự tiện dụng nhất cho bạn. <a href="http://sieuthithunuoi.com">Sieuthithunuoi.com</a> Miễn phí giao hàng cho tất cả các khách hàng ở TP.HCM và phí vận chuyển tốt nhất với các khách hàng ở ngoài Tp.HCM.<br>
                    Sứ mệnh của sieuthithunuoi.com là tạo ra một hệ thống bán lẻ đủ sức cạnh tranh với các nhà bán lẻ hàng đầu tại Việt Nam và xa hơn là cạnh tranh trực tiếp với các nhà bán lẻ 
                    trên thế giới muốn xâm nhập thị trường Việt nam trong tương lai.
               </p> 
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