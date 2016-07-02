<?php require('backend/views/common/header.php'); ?>

<body id="minovate" class="appWrapper">
    <div id="wrap" class="animsition">
            <?php require('backend/views/common/navbar.php'); ?>
            <?php require('backend/views/common/sidebar.php'); ?>
            <?php require('backend/views/category/table.php'); ?>
     </div>
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
                $('#category_form').submit();
            });
        });
    </script>
<?php require('backend/views/common/footer.php'); ?>