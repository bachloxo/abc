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
                 <a href="<?php echo alias($category['name']).'-c'.$category['id'].'.html'; ?>" itemprop="url" class="category"><span itemprop="title"><?php echo $category['name']; ?></span>
                </a>
              </li>
              <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="<?php echo alias($product['name']).'-p'.$product['id'].'.html'; ?>" itemprop="url">
                  <span itemprop="title"><?php echo $product['name']; ?> </span>
                </a>
              </li>
              </ul>
              <!--END-Breadcrumb -->

                <?php require('frontend/views/product/detail.php'); ?>
                <!-- END CONTENT -->
            </div><!--/span-->       
</div><!--/b-main-->
<?php require('frontend/views/common/footer.php'); ?>    
    <!-- Custom Theme JavaScript -->
    <script>
      $(':radio').change(
        function(){
          $('.star-note').text( this.value + ' stars' );
        } 
      )
      // Scrolls to the selected menu item on the page
      $(function() {
          $('a[href*=#]:not([href=#])').click(function() {
              if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                  var target = $(this.hash);
                  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                  if (target.length) {
                      $('html,body').animate({
                          scrollTop: target.offset().top
                      }, 1000);
                      return false;
                  }
              }
          });
      });
    </script> 
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
    <script language="javascript">
        // Biến kiểm tra
        var ajax_sendding = false;
        $('#load_review').click(function()
        {
            // Xóa trắng thẻ div show lỗi
            $('#result').html('');

            var name = $('#txt-comment-name').val();
            var email = $('#txt-comment-email').val();
            var content = $('#txt-comment').val();
            var captcha = $('#captcha').val();
            var product_id = $('#product_id').val();
            var rating = $("input:checked").val(); 
            // kiểm tra trạng thái có đang gửi ajax không
             // Kiểm tra dữ liệu có null hay không
            if ($.trim(name) == ''){
                alert('Bạn chưa nhập tên đăng nhập');
                return false;
            }
         
            if ($.trim(email) == ''){
                alert('Bạn chưa nhập email');
                return false;
            }

            if ($.trim(content) == ''){
                alert('Bạn chưa nhập bình luận');
                return false;
            }

            if ($.trim(captcha) == ''){
                alert('Bạn chưa nhập captcha');
                return false;
            }
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
                url : '/frontend/controllers/product/do_validate_review.php',
                type : 'post',
                dataType : 'json',
                data : {
                    user_name : name,
                    email : email,
                    content : content,
                    captcha : captcha,
                    product_id : product_id,
                    rating : rating,
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
</body>
</html>