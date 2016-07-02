<?php
ob_start();
session_start();

require_once('config.php');
require_once('librarys/functions.php');
require_once('frontend/models/model.php');
require_once('frontend/models/cart.php');
require_once('frontend/views/common/header-not-home.php'); ?>
<style type="text/css">
   #sidebar.sticky {
    position:fixed;
    top:15px;
}
@media (min-width: 0px) and (max-width: 768px) {
     #sidebar.sticky {
          position: fixed;
    right: 0;
    left: 0;
    z-index: 1030;
}
}
</style>
<div class="b-main" role="main">
    <div class="b-main-container container">
    <div class="row">          
            <?php require('frontend/views/common/sidebar-left-html.php'); ?> 
            <div class="page col-sm-9">
                    <div id="1">
                            <h1> Hướng dẫn mua hàng ở Siêu thị thú nuôi</h1>
                          <p>Cách mua hàng trên <a href="sieuthithunuoi.com">sieuthithunuoi.com</a> rất đơn giản, các bạn chỉ cần hoàn thành 3 bước là có thể mua được. Tuy nhiên, các bạn nên đọc kỹ để tránh rơi vào trường hợp đơn hàng bị huỷ do sai thông tin, hoặc thông tin không hợp lý và chính xác.</p>        <h2>Bước 1: Chọn món hàng cần mua</h2>
                            <p>Các bạn vào trang “Sản phẩm“, nhấp vào nút “Thêm vào giỏ” để đặt mua sản phẩm mình yêu thích. Hoặc các bạn có thể nhấp vào sản phẩm để xem chi tiết thông tin của sản phẩm Sau đó nhấp vào nút “Thêm vào giỏ hàng” cũng không muộn.
                            </p>
                            <h2>Bước 2: Kiểm tra giỏ hàng</h2>
                            <p>Các bạn nhấp vào mục cuối cùng trong menu (Hình cái giỏ hàng) để vào giỏ hàng. Trong này sẽ hiển thị thông tin các món hàng mà bạn đã đặt mua trước đó với số lượng mặc định là 01.

                            Bây giờ, các bạn kiểm tra lại lần cuối xem món hàng mình đặt đã hợp lý chưa? Kiểm tra lại số lượng, nếu không thích có thể bỏ món hàng bằng cách nhấp dấu chéo, hoặc cho số lượng về 0. Sau đó nhấp “Cập nhật giỏ hàng“.
                            Khi các thông tin đã chính xác, hãy chọn nút “Thanh toán” để tiến hành sang bước tiếp theo.
                            </p>
                            <h2>Bước 3: Khai báo thông tin thanh toán</h2>
                            <p>Các bạn kiểm tra và điền đầy đủ các thông tin của mình vào <strong>bằng tiếng Việt có dấu</strong>.</p>
                            <p><ul>
                                <li><strong>Họ và tên:</strong> Đầy đủ, có dấu.</li>
                                <li><strong>Địa chỉ:</strong> ghi rõ số nhà, đường, thị xã, quận, huyện.</li>
                                <li><strong>Số điện thoại:</strong> ghi chính xác, để bên CPN liên lạc.</li>
                                <li><strong>Email:</strong> Ghi đúng, để nhận thông tin khi đặt hàng.</li>
                            </ul></p>
                            <p>Sau khi điền thông tin nhân viên của chúng tôi sẽ liên hệ trực tiếp với bạn trong ngày.</p>
                    </div>
                    <div id="2">
                    <br>
                        <h2><b>THÔNG TIN GIAO HÀNG</b></h2>
                        <h3><a href="https://giaohangnhanh.vn/ghn-bang-bao-gia.pdf" target="_blank">GIAOHANGNHANH.VN</a></h3>
                        Công ty Cổ Phần Đầu Tư Thương Mại Và Chuyển Phát Nhanh F1 ( F1 EXPRESS AND TRADING INVESTMENT JOINT STOCK COMPANY ) được thành lập ngày 20/6/2012 theo Giấy phép đăng ký kinh doanh số: 0311907295, do Sở KHĐT TPHCM cấp, với ngành nghề hoạt động chính là cung cấp dịch vụ chuyển phát nhanh.

                        Dịch vụ giao hàng của Giaohangnhanh.vn được thiết kế và xây dựng hướng đến việc cung cấp giải pháp giao hàng hoàn chỉnh và toàn diện nhất cho các doanh nghiêp TMĐT với cam kết về thời gian, chất lượng dịch vụ và tiện ích tối đa.

                        Liên hệ

                        Khách hàng liên hệ với sieuthithunuoi.com để biết thêm chi tiết


                        Văn phòng HCM
                        Địa chỉ: 277/68 Trường Chinh, Phường 14, Quận Tân Bình, Hồ Chí Minh

                        <hr />

                        <h3><a href="http://www.viettelpost.com.vn/?tabid=210">TỔNG CÔNG TY CP BƯU CHÍNH VIETTEL</a></h3>
                        ViettelPost là một đơn vị thành viên của Tập đoàn Viễn thông Quân đội (Viettel), chuyên kinh doanh các dịch vụ: Chuyển phát nhanh trong nước và quốc tế; Vận tải hành khách, hàng hóa, chuyên tuyến quốc tế; Phát hàng thu tiền (COD); Cho thuê kho bãi; Phát hành báo chí; Viễn thông; Văn phòng phẩm; Bảo hiểm; Vé máy bay…

                        Sau hơn 16 năm xây dựng và phát triển, vị thế của Viettel Post ngày càng được khẳng định trên thị trường với nhiều danh hiệu, giải thưởng uy tín, giá trị cốt lõi cho cổ đông ngày càng được tăng cao và liên tục tích lũy.

                        Liên hệ

                        Khách hàng liên hệ với sieuthithunuoi.com để biết thêm chi tiết

                        <hr />

                        <h3><a href="http://www.hcmpost.vn/">BƯU ĐIỆN THÀNH PHỐ HỒ CHÍ MINH<a></h3>
                        Bưu điện TP.Hồ Chí Minh (HCMC Post) trực thuộc Tổng Công ty Bưu chính Việt Nam (VNPost), thành viên của Tập đoàn Bưu chính Viễn thông Việt Nam (VNPT). Tự hào với hơn 35 năm kinh nghiệm và là doanh nghiệp chủ lực trong việc cung cấp các dịch vụ Bưu chính – chuyển phát trên địa bàn Thành phố, Bưu điện TP.HCM cam kết luôn mang đến khách hàng những dịch vụ với chất lượng tốt nhất.

                        Với lợi thế về mạng lưới rộng khắp; cơ sở hạ tầng hiện đại; đội xe chuyên dụng quy mô lớn; đội ngũ bưu tá dày dạn kinh nghiệm, am hiểu địa bàn, Bưu điện TP.HCM cam kết cung cấp cho khách hàng chất lượng dịch vụ vượt trội và phong cách phục vụ chuyên nghiệp nhất.

                        “Vạn hoa dịch vụ - Hội tụ điểm đến” là nỗ lực không ngừng của Bưu điện TP.HCM trong việc cung cấp các dịch vụ tiện ích đến Quý khách hàng.

                        Liên hệ

                        Khách hàng liên hệ với sieuthithunuoi.com để biết thêm chi tiết


                        <hr />

                        <h2>BẢNG GIÁ</h2>
                        <i>(Click vào tên công ty để xem bảng giá) Lưu ý : Chỉ tính phí và giao hàng qua dịch vụ này cho các tỉnh thành phố ngoài Tp.HCM</i>
                    </div>
                    <div id="3">
                    <br>
                    <h2><b>CHÍNH SÁCH ĐỔI TRẢ HÀNG</b></h2>
                           <p>Nhằm tạo sự tin tưởng và mang lại quyền lợi cho khách hàng khi đến mua hàng tại công ty, chúng tôi áp dụng chính sách hỗ trợ đổi trả hàng như sau:</p>
                        <p>Đối với khách hàng tại khu vực Tp.HCM, quý khách có thể trực tiếp liên hệ đổi/ trả hàng tại văn phòng của sieuthithunuoi ở địa chỉ . Thời gian phục vụ từ 8h00 đến 17h00 từ thứ Hai đến thứ Bảy, không tính Chủ Nhật và các ngày lễ Tết.
                        Quý khách có thể thực hiện đổi trả hàng miễn phí trong vòng 7 ngày kể từ ngày nhận được hàng cho các sản phẩm đặt mua tại sieuthithunuoi. Các sản phẩm thực hiện đổi trả phải còn nguyên vẹn, không có dấu hiệu sử dụng và phải còn tem, mác. Ngoài ra, để thực hiện đổi trả hàng khách hàng phải còn giữ hóa đơn mua hàng tại sieuthithunuoi.com
                        <p>
                        Chúng tôi sẽ thực hiện các bước tiếp theo để kiểm tra chất lượng sản phẩm và tiến hành đổi/ trả hàng hoặc hoàn tiền theo yêu cầu của quý khách và thực hiện theo đúng quy định tại mục II của chính sách này.
                        </p>
                            <h2><b>Các trường hợp đổi trả hàng</b></h2>
                        <p>Đổi hàng theo nhu cầu khách hàng Tất cả các mặt hàng mua từ sieuthithunuoi đều có thể hoàn trả trong vòng 7 ngày kể từ ngày nhận hàng. Chúng tôi chỉ chấp nhận đổi trả cho các sản phẩm còn nguyên điều kiện ban đầu, và còn hóa đơn mua hàng tại sieuthithunuoi và sản phẩm chưa qua sử dụng, bao gồm:</p>
                        <ul>
                            <li>Tem/ phiếu bảo hành, tem thương hiệu, các quà tặng kèm theo ( nếu có) v.v… phải còn đầy đủ và nguyên vẹn.</li>
                            <li>Không bị dơ bẩn, trầy xước, bể vỡ, hư hỏng, có mùi lạ hoặc có dấu hiệu đã qua sử dụng.</li>
                        </ul>
                        <h3>Lưu ý:</h3>
                            <i>Những sản phẩm đồi trả hàng không đáp ứng các điều kiện nêu trên sẽ được tự động chuyển hoàn về địa chỉ đăng kí theo thong tin đơn hàng của quý khách.</i>
                            <p>Đổi trả không vì lý do chủ quan từ khách hàng sieuthithunuoi khuyến khích quý khách hàng phải kiểm tra tình trạng bên ngoài của thùng hàng và sản phẩm trước khi thanh toán để đảm bảo rằng hàng hóa được giao đúng theo đơn đặt hàng và tình trạng bên ngoài không bị tác động. Nếu gặp trường hợp này, Quý khách vui lòng từ chối nhận hàng và báo ngay cho bộ phận hỗ trợ khách hàng để chúng tôi có phương án xử lí kịp thời. (Xin lưu ý những bước kiểm tra sâu hơn như dùng thử sản phẩm chỉ có thể được chấp nhận sau khi đơn hàng được thanh toán đầy đủ).Trong trường hợp khách hàng đã thanh toán, nhận hàng và sau đó phát hiện hàng hóa bị bể vỡ, sai nội dung hoặc thiếu hàng, xin vui lòng liên hệ ngay với bộ phận hỗ trợ khách hàng của sieuthithunuoi.com để được chúng tôi hỗ trợ các bước tiếp theo như đổi/ trả hàng hoặc gửi sản phẩm còn thiếu đến khách hàng…
                        <p>Chú ý:</p><i> Sau 48h kể từ ngày quý khách nhận được hàng, sieuthithunuoi có quyền từ chối hỗ trợ cho những khiếu nại theo nội dung như trên.</i></p>
                        <h2>Phương thức hoàn tiền</h2>
                        <i>Tùy theo lí do hoàn trả sản phẩm, sieuthithunuoi.com sẽ có những phương thức hoàn thiện với chi tiết sau:</i>
                        <ul>
                            <li>Đổi trả theo nhu cầu khách hàng: Trường hợp này sẽ hoàn tiền lại cho khách hàng (sau khi đã trừ phí xử lý đơn hàng).</li>
                            <li>Đổi trả không vì lý do chủ quan: Khách sẽ được đổi mới sản phẩm, đổi sản phẩm mới cùng loại, và khách hàng có thể hoàn tiền mặt nếu muốn.</li>
                        </ul>
                            <h3>Liên hệ, thắc mắc, khiếu nại về vấn đề đổi trả hàng</h3>
                        <p>Xin quý khách vui lòng liên hệ: 277/68 trường chinh:Hotline: 0935.36.0246 (Mr.Bach)

                        E-mail: chamsoc@sieuthithunuoi.com

                        Website: <a href="http://sieuthithunuoi.com/">sieuthithunuoi.com</a></p>
                    </div>
                    <div id="4">
                    <br>
                        <h2><b>CHÍNH SÁCH BẢO HÀNH</b></h2>
                         <h3><strong>MỤC 1: ĐIỀU KIỆN BẢO HÀNH MIỄN PHÍ</strong></h3>
                        1.      Sản phẩm còn trong thời hạn bảo hành và có đăng ký bảo hành.</p>
                        2.      Sản phẩm bị hư do lỗi kỹ thuật của nhà sản xuất.</p>
                        3.      Phiếu bảo hành phải được xuất trình khi có yêu cầu bảo hành miễn phí. Trong trường hợp cần thiết, khách hàng cần phải xuất trình hóa đơn mua hàng.</p>
                        4.      Phiếu bảo hành phải còn nguyên vẹn, phải thể hiện rõ tên khách hàng và ngày mua, không chắp nối, không bị tẩy xóa.</p>
                        5.      Trong thời hạn bảo hành một năm, khi sản phẩm có trục trặc hay sự cố, khách hàng vui lòng liên lạc với trạm bảo hành gần nhất để được tư vấn bảo hành miễn phí tại nhà.</p>
                        LƯU Ý: Trong trường hợp cần chuyển sản phẩm đến trạm bảo hành để sửa chữa thì kỹ thuật của trạm bảo hành sẽ là người quyết định và trong trường hợp này khách hàng phải trả chi phí vận chuyển sản phẩm từ nhà đến trạm bảo hành và ngược lại.</p>
                        &nbsp;
                        <h3><strong>MỤC 2: ĐIỀU KIỆN KHÔNG ĐƯỢC BẢO HÀNH MIỄN PHÍ</strong></h3>
                        1.      Sản phẩm đã hết hạn bảo hành.</p>
                        2.      Không có phiếu bảo hành hay chứng từ hóa đơn liên quan đến sản phẩm.</p>
                        3.      Số sê-ri máy, kiểu máy trên sản phẩm không trùng khớp với số sê-ri máy, kiểu máy trên phiếu bảo hành.</p>
                        4.      Sản phẩm bị hư hỏng do thiên tai, lũ lụt, sét đánh, hỏa hoạn hay do vận chuyển làm nứt, móp, bể, trầy xước.</p>
                        5.      Sản phẩm hư hỏng do sử dụng không đúng theo hướng dẫn, do lắp đặt không đúng kỹ thuật, do nguồn điện không đúng, không ổn định về điện thế hoặc tần số.</p>
                        6.      Sản phẩm bị rỉ sét, ố bẩn do ăn mòn hay do chất lỏng đổ vào</p>
                        7.      Sản phẩm có dấu hiệu đã tháo lắp, sửa chữa thay thế linh kiện ở những nơi khác ngoài các trạm bảo hành.</p>
                    </div>
            </div>
            <div class="clearfix"></div>
        </div>
            </div><!--/span-->       
</div><!--/b-main-->
<?php require('frontend/views/common/footer.php'); ?>
<script type="text/javascript">
         // Cache our vars for the fixed sidebar on scroll
    var $sidebar = $('#sidebar');
    // Get & Store the original top of our #sidebar-nav so we can test against it
    var sidebarTop = $sidebar.position().top;
    // Edit the `- 10` to control when it should disappear when the footer is hit.
    var blogHeight = $('.page').outerHeight() - 10;

    // Add the function below to the scroll event
    $(window).scroll(fixSidebarOnScroll);

    // On window scroll, this fn is called (binded above)
    function fixSidebarOnScroll() {
        // Cache our scroll top position (our current scroll position)
        var windowScrollTop = $(window).scrollTop();

        // Add or remove our sticky class on these conditions
        if (windowScrollTop >= blogHeight || windowScrollTop <= sidebarTop) {
            // Remove when the scroll is greater than our #content.OuterHeight()
            // or when our sticky scroll is above the original position of the sidebar
            $sidebar.removeClass('sticky');
        }
        // Scroll is past the original position of sidebar
        else if (windowScrollTop >= sidebarTop) {
            // Otherwise add the sticky if $sidebar doesnt have it already!
            if (!$sidebar.hasClass('sticky')) {
                $sidebar.addClass('sticky');
            }
        }
    }
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
</body>
</html>