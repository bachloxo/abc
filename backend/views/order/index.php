<?php require('backend/views/common/header.php'); ?>

<body id="minovate" class="appWrapper">
    <div id="wrap" class="animsition">
            <?php require('backend/views/common/navbar.php'); ?>
            <?php require('backend/views/common/sidebar.php'); ?>
            <!-- BEGIN CONTENT -->
                <?php require('backend/views/order/table.php'); ?>
            <!-- END CONTENT -->          
    </div><!--/wrap-->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebar .panel-heading').click(function () {
                $('#sidebar .list-group').toggleClass('hidden-xs');
                $('#sidebar .panel-heading b').toggleClass('glyphicon-plus-sign').toggleClass('glyphicon-minus-sign');
            });
            $('#check_all').change(function(){
                $('.table input:checkbox').prop('checked', this.checked);
            });
            $('#action').change(function(){
                $('#order_form').submit();
            });
        });
    </script>
<?php require('backend/views/common/footer.php'); ?>