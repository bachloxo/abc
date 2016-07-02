<?php
ob_start();
session_start();

require_once('config.php');
require_once('librarys/functions.php');
require_once('frontend/models/model.php');
require_once('frontend/models/cart.php');
$categories = get_all('categories', array(
    'select' => 'id, parent_id, name',
    'order_by' => 'parent_id ASC, position ASC'
));
//phân trang
if(isset($_GET['page'])) $page = intval($_GET['page']); 
        else $page = 1;
        
$page = ($page>0) ? $page : 1;
$limit = 20;
$offset = ($page - 1) * $limit;
$options = array(
    'limit' => $limit,
    'offset' => $offset,
    'order_by' => 'id DESC'
);
$blogs = get_all('blog', $options);
require_once('frontend/views/common/header-not-home.php');
mysqli_close($db);
?>
<div class="b-main" role="main">
<div class="container">
	<div class="row" style="margin-top:30px;">
    <div class="col-lg-9 col-md-9">
             <ul class="row clearfix list-product">
               <?php if (isset($_REQUEST['ok'])) ?>
               <?php {
                      // Gán hàm addslashes để chống sql injection
                    $search = addslashes($_GET['search']);
                    // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
                    $query = "select * from products where name like '%$search%'";

                    $db = mysqli_connect("mysql.hostinger.vn", "u650584132_bach", "tdnt4d10kt") or die('Could not connect to Server');
                    
                    mysqli_select_db( $db,"u650584132_sttt") or die('Could not connect to Database');
         
                    // Thực thi câu truy vấn
                    $sql = mysqli_query($db,$query);
                    // Đếm số đong trả về trong sql.
                    $num = mysqli_num_rows($sql);
                if (empty($search)) 
                    {
                            echo "Yeu cau nhap du lieu vao o trong";
                        } else {
                            // Ngược lại nếu người dùng nhập liệu thì tiến hành xứ lý show dữ liệu.
                            // Nếu $num > 0 hoặc $search khác rỗng tức là có dữ liệu mối show ra nhé, ngược lại thì báo lỗi.
                                if ($num > 0 && $search != "") 
                                {
                                // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                                while ($products = mysqli_fetch_assoc($sql))
                                    {
                                         $name = $products['name'];
                                         $id =  $products['id'];
                                         $image =  $products['image'];
                                         $price = $products['price'];
                                ?>
                                <li class="b-main__category__content-item-detail central-column col-md-3" style="float: left;">
                                        <a style="color: rgb(68, 68, 68); display: block; width: 200px; position: relative;" href="<?php echo alias($name).'-p'. $id.'.html'; ?>">
                                        <span class="b-main__category__content-item-img-wrap">
                                            <img  class="b-main__category__content-item-img img-responsive" src="public/upload/product/<?php echo $image; ?>" alt="<?php echo $name; ?>"/>
                                        </span>
                                        </a>
                                        <div class="b-main__category__content-item-name">
                                            <h4><a href="<?php echo alias($name).'-p'. $id.'.html'; ?>"><?php echo $name; ?></a></h4>
                                            <p class="price__main"><?php echo number_format($price,0,',','.'); ?> VNĐ</p>
                                        </div>
                                </li>     
                                <?php 
                                    }
                                } else 
                                    {
                                        echo "Khong tim thay ket qua!";
                                    }
                        }
                    }
                                ?>  
                                </ul>
<div class="text-center" style="float: left;">
	<?php echo $pagination; ?>
</div>
            </div><!--/span-->    
            <?php require('frontend/views/common/sidebar.php'); ?>   
</div>		
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