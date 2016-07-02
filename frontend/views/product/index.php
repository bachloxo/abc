<?php require('frontend/views/common/header.php'); ?>
<div class="b-main b-main_home">
    <div class="b-main-container container">
        <section class="b-main_home-banner clearfix hidden-xs">               
	           <?php require('frontend/views/common/slide.php'); ?>
        </section>
    <div class="row">
        <div class="col-lg-9 col-md-9">
            <div class="b-main__category__title">
                <div href="#" title="Bóng Đá" class="b-main__category__title-main">
                  <h2 class="b-main__category__title-name">Sản phẩm mới</h2>
                  <span class="b-main__category-arrow"></span>
                </div>
            </div>
            <!-- BEGIN CONTENT -->
            <?php require('frontend/views/product/list_home.php'); ?>
            <!-- END CONTENT -->
		</div>
        <?php require('frontend/views/common/sidebar.php'); ?>
    </div><!--CENTRAL_COLUMM -->
    <div class="intro h-card">
        <h1 class="p-name">Mua hàng online vật dụng thức ăn đồ chơi thú nuôi, chó, mèo...</h1>
        <hr>
            <div class="content">
                <img class="pull-left u-photo" src="http://sieuthithunuoi.com/public/images/logo.png">
               <p> Sieuthithunuoi.com ra đời vào tháng 3/2014, với cách thức kinh doanh Mua hàng online - Giao hàng tận nơi. Siêu thị thú nuôi cung cấp đồ dùng, thức ăn vật nuôi chính hãng, nguồn gốc tại Pháp với các thương hiệu hàng đầu được khẳng định tên tuổi trên toàn thế giới và được sử dụng rất phổ biến tại các nước châu âu.</p>
                <p>Để đảm bảo hăm sóc sức khỏe thú cưng, siêu thị thú cưng khuyên bạn nên dựa vào nhiệt độ cơ thể của chú chó để theo dõi tình hình sức khỏe và có biện pháp chăm sóc phù hợp nhất, tùy theo loại thú cưng mà bạn phải chăm sóc khác nhau cũng như dùng các sản phẩm chuyên dùng. Dịch vụ của siêu thị thú nuôi
                mang đến giải pháp hàng đầu cho thú cưng của bạn, thức ăn chó mèo, siêu thị thú nuôi luôn nói không với hàng chất lượng thấp. Cam kết thú nuôi của bạn được chăm sóc với các sản phẩm tốt nhất…</p>            
            </div>
        <div class="fb-like" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
    </div>
    </div>
</div>
<?php require('frontend/views/common/footer.php'); ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebar .list-group').toggleClass('hidden-xs');
            $('#sidebar .panel-heading').click(function () {
                $('#sidebar .list-group').toggleClass('hidden-xs');
                $('#sidebar .panel-heading b').toggleClass('glyphicon-plus-sign').toggleClass('glyphicon-minus-sign');
            });
            even_height();
        });        
        $(window).resize(function() {
            even_height();
        });
        function even_height() {
            var height = 0;
            var images = $('.thumbnail img');
            $.each(images, function(i, image) {
                if ($(image).height() > height) {
                    height = $(image).height();
                }
            });
            $('.product-list .thumbnail > a').height(height);
        }
    </script>
        <script>
    var facebookAppId = 220558114759707;
    // RECAPTCHA
    var isNativeApp = false;
    var rootUrl = 'http://sieuthithunuoi.com';
    var recaptchaKey = '6LcTOQUTAAAAAON_bNetEtgzm-yfBmCgLw17vxg_';
    var renderRecaptcha = false;
</script>
<script type="text/javascript" src="public/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
<script src="public/js/script.min.js"></script>
</body>
</html>