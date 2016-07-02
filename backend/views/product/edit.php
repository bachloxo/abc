<?php require('backend/views/common/header.php'); ?>
<body id="minovate" class="appWrapper">
    <div id="wrap" class="animsition">
            <?php require('backend/views/common/navbar.php'); ?>
            <?php require('backend/views/common/sidebar.php'); ?>
        <!-- BEGIN CONTENT -->
            <?php require('backend/views/product/form.php'); ?>
        <!-- END CONTENT -->
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebar .panel-heading').click(function () {
                $('#sidebar .list-group').toggleClass('hidden-xs');
                $('#sidebar .panel-heading b').toggleClass('glyphicon-plus-sign').toggleClass('glyphicon-minus-sign');
            });
        });
    </script>
        <script language="javascript">
        // Biến kiểm tra
        var ajax_sendding = false;
        $('#load_product_options').click(function()
        {
            // Xóa trắng thẻ div show lỗi
            $('#result').html('');
            var product_id = $('#product_id').val();
            var products_option1 = $('#products_option1').val();
            var products_option_value1= $('#products_option_value1').val();
            var products_option2= $('#products_option2').val();
            var products_option_value2= $('#products_option_value2').val();
            // kiểm tra trạng thái có đang gửi ajax không
            // Nếu đang gửi thì dừng
            if (ajax_sendding == true){
                alert('Dang Load Ajax');
                return false;
            }
             
            // Ngược lại thì bắt đầu gửi ajax
            // Nhưng trước hết gán biến ajax_sendding = true để khi người dùng click tiếp 
            // se không có tác dụng
            ajax_sendding = true;
             
            // Bật span loaddding lên
            $('#loadding').show();

            $.ajax({
                url : '/backend/controllers/product/do_validate_product_option.php',
                type : 'post',
                dataType : 'json',
                data : {
                    product_id: $product_id,
                    products_option1 : $products_option1,
                    products_option_value1 : $products_option_value1,
                    products_option2 : $products_option2,
                    products_option_value2 : $products_option_value2,
                },
                success : function (result)
                {
                    // Kiểm tra xem thông tin gửi lên có bị lỗi hay không
                    // Đây là kết quả trả về từ file do_validate.php
                    if (!result.hasOwnProperty('error') || result['error'] != 'success')
                    {
                        alert('Có vẻ như bạn đang hack website của tôi');
                        return false;
                    }
                    var html = '';                    
                    // Lấy thông tin lỗi captcha
                    if ($.trim(result.captcha) != ''){
                        html += result.captcha+ '<br/>';
                    }
                    
                    // Cuối cùng kiểm tra xem có lỗi không
                    // Nếu có thì xuất hiện lỗi
                    if (html != ''){
                        $('#result').append(html);
                    }
                    else {
                        // Thành công
                        $('#result').append('Cảm ơn bạn đã nhận xét cho sản phẩm');
                    }
                }
            }).always(function(){
                    ajax_sendding = false;
                    $('#loadding').hide();
                });
            
            return false;
        });            
    </script>
<?php require('backend/views/common/footer.php'); ?>