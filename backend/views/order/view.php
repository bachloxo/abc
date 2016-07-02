<?php require('backend/views/common/header.php'); ?>

<body id="minovate" class="appWrapper">
    <div id="wrap" class="animsition">
            <?php require('backend/views/common/navbar.php'); ?>
            <?php require('backend/views/common/sidebar.php'); ?>
                <!-- BEGIN CONTENT -->
                    <?php require('backend/views/order/detail.php'); ?>
                <!-- END CONTENT -->     
    </div><!--/wrap--> 
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
<?php require('backend/views/common/footer.php'); ?>