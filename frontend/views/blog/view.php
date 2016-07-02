<?php require('frontend/views/common/header-not-home.php'); ?>
<div class="b-main" role="main">
    <div class="b-main-container container">
    <!-- BEGIN CONTENT -->
     <!--Breadcrumb -->
      <ul class="breadcrumb">
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
            <a href="#" itemprop="url">
            <span itemprop="title">Trang chủ</span>
            </a>
          </li>
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
            <a href="/cham-soc-thu-nuoi.html" itemprop="url">
            <span itemprop="title">Chăm sóc thú nuôi</span>
            </a>
          </li>
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
             <a href="<?php echo alias($blog['title']).'-b'.$blog['id'].'.html'; ?>" itemprop="url">
             <span itemprop="title"><?php echo $blog['title']; ?></span>
            </a>
          </li>
      </ul>
      <!--END-Breadcrumb -->
      <div class="row">
          <?php require('frontend/views/blog/detail.php'); ?>
          <?php require('frontend/views/common/sidebar.php'); ?>
      </div>
                <!-- END CONTENT -->
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