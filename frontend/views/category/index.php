<?php require('frontend/views/common/header-not-home.php'); ?>
<div class="b-main b-main_home">
    <div class="b-main-container container">
       <!--Breadcrumb -->
        <ul class="breadcrumb">
            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
          <a href="#" itemprop="url">
            <span itemprop="title">Trang chủ</span>
          </a>
        </li>
        <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
          <a href="<?php echo alias($category['name']).'-c'.$category['id'].'.html'; ?>" itemprop="url"><span itemprop="title"><?php echo $category['name']; ?></span>
          </a>
        </li>
        </ul>
        <!--END-Breadcrumb -->
    <div class="row">
    	<?php require('frontend/views/common/sidebar-left.php'); ?>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <!-- BEGIN CONTENT -->
                <?php require('frontend/views/product/list.php'); ?>
                <!-- END CONTENT -->
        </div>
    </div><!--CENTRAL_COLUMM -->
    </div>
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
</div>
</body>
</html>