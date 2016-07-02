<?php require('frontend/views/common/header-not-home.php'); ?>

    <div class="container">
        <div class="row">
            <!-- BEGIN CONTENT -->
            <div class="middle col-xs-12"> 
                <h1>Đặt hàng thành công</h1>
                <p>
                    Nhân viên của chúng tôi sẽ liên lạc sớm nhất với bạn để xác nhận đơn hàng.
                </p>
                <p>Chúc bạn có một ngày vui vẻ !</p>
            </div>            
            <!-- END CONTENT -->    
        </div><!--/row-->
    </div><!--/.container-->
        <div class="clearfix"></div>
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