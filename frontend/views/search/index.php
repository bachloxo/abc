<?php require('frontend/views/common/header-not-home.php'); ?>
<div class="b-main" role="main">
<div class="container">
	<div class="row" style="margin-top:30px;">
        <div class="col-lg-9 col-md-9">
             <?php require('frontend/views/search/list.php'); ?>
        </div><!--/span-->    
            <?php require('frontend/views/common/sidebar.php'); ?> 	
	</div>
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