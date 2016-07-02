<div class="middle col-md-12">
    <div  itemscope itemtype="http://schema.org/Product" class="product-box hproduct h-product">
        <div class="row">
            <div class="imgdetail col-md-5">
             	   <div class="product-preview">
                        <div class="picture u-photo">
                             <img itemprop="image" src="public/upload/product/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" id="mainPreviewImg"/>
                        </div>
                        <div class="thumbs clearfix">
                            <div class="thumb active">
                                <a href="#mainPreviewImg"><img src="public/upload/product/<?php echo $product['image']; ?>" alt=""/></a>
                            </div>
                            <div class="thumb">
                                <a href="#mainPreviewImg"><img src="public/upload/product/<?php echo $product['image1']; ?>" alt=""/></a>
                            </div>
                            <div class="thumb">
                                <a href="#mainPreviewImg"><img src="public/upload/product/<?php echo $product['image2']; ?>" alt=""/></a>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="global_product col-md-7 hreview-aggregate h-review" rel="product">
            <h1 itemprop="name" class="product-title fn"><span class="fn item p-name"><?php echo $product['name']; ?></span></h1>
                <!--  = Rating =  -->
             	<div class="rating ">
                <i class="fa fa-star fa-lg"></i>
                <i class="fa fa-star fa-lg"></i>
                <i class="fa fa-star fa-lg"></i>
                <i class="fa fa-star fa-lg"></i>
                <i class="fa fa-star-half-o fa-lg"></i> 
                <span itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                    <span class="rating p-rating" itemprop="ratingValue" value="4.6">4.6</span>
                        <meta itemprop="bestRating" content="5.0"/>
                        <meta itemprop="worstRating" content="0.0"/> 
                    stars, dựa trên<span class="count" itemprop="ratingCount">
                    <?php echo ($product['id']-35); ?></span> đánh giá
                </span><br>
                </div>
                <!--  = End Rating=  -->
                <div id="customerbox" itemprop="review" itemscope itemtype="http://schema.org/Review">
                	<span itemprop="reviewBody">Great!: "High quality and balanced product."</span>
                		<span itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                		<meta itemprop="ratingValue" content="4.6">
                		</span>
                        <span itemprop="author" itemscope itemtype="http://schema.org/Person">
                        	<span itemprop="name">Bob Smith</span>
						</span>
                </div>  
                <div class="noti_text">Thương hiệu: <span class="review_border brand p-brand h-card" itemprop="brand"><?php echo ($product['brand']); ?></span>
                <span class="review_title hidden-xs"><i class="fa fa-pencil"></i><a href="#tab_content_product_comments">_ Viết đánh giá cho sản phẩm</a></span>
                </div>
                <div class="noti_text identifier"> <span class="type"> Mã sản phẩm: #</span><span class="value" itemprop="sku"><?php echo ($product['id']); ?></span>
                </div>
                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                    <meta itemprop="priceCurrency" content="VND" />
                    <meta itemprop="seller" content="Đồ dùng vật nuôi, thú cưng" />
                    <meta itemprop="availability" content="Còn hàng" />
                    <div class="item_price price p-price" itemprop="price" value="<?php echo number_format($product['price'],0,',','.'); ?>"><?php echo number_format($product['price'],0,',','.'); ?><span class="currency"><span class="value-title" title="VNĐ" /> đ</span></div>
                </div>
                <div class="noti_text">Quý khách vui lòng mua số lượng 0<?php echo ($product['number']); ?> sản phẩm này cho 1 đơn hàng!</div>
                <div class="product-box e-description">
                      <p itemprop="description" ><?php echo ($product['summary']); ?></p>
                </div>
                <div class="dat-hang">
                        <a href="them-gio-hang.html?pid=<?php echo $product['id']; ?>" class="button">
                            <i class="fa fa-shopping-cart fa-2x"></i>Cho vào giỏ hàng
                        </a>
                </div>
                <div class="time-ship">
                    <i class="shipping"></i>
                    <?php
                    getday_shippingplustwoday();
                    getday_order();
                    ?>
                </div>
            </div>
        </div>
		<div class="row">
			<div class="fb-like" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
		</div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="row">
                    <div id="product_description">
	                    <ul class="product_menu">
	                        <li class="active">
	                            <a href="#tab_content_product_introduction" data-toggle="tab" aria-expanded="true">
	                                Thông tin sản phẩm
	                            </a>
	                        </li><!-- end item -->
	                         <li class="hidden-xs ">
	                            <a href="#tab_content_product_comments"  data-toggle="tab" aria-expanded="false">
	                                Đánh giá &amp; Bình luận
	                            </a>
	                        </li><!-- end item -->
	                    </ul><!-- end tabs -->
                        <div class="tabs-content">
                            <div id="tab_content_product_introduction"  class="tab-content active">
                                <p><?php echo $product['info_detail']; ?></p>
                            </div>
                            <hr>
                            <div id="tab_content_product_comments" class="tab-content">
				            	<h2>Đánh giá &amp; Bình luận</h2>
					            <div class="rating-content row">
					            		<form action="" method="post">
                                            <input type="hidden" id="product_id" value="<?php echo ($product['id']); ?>">
							            	<div class="form-group col-sm-3 col-xs-6">
											    <label for="s">Tên</label>
											    <input type="text" placeholder="Tên của bạn" class="form-control" id="txt-comment-name" maxlength="100" required>
											</div>
											<div class="form-group col-sm-4 col-xs-6">
											    <label class="hidden-xs" for="d">Email / Số điện thoại</label>
											     <label class="visible-xs-block" for="d">Email / SĐT</label>
											    <input type="text" placeholder="Email/Số điện thoại của bạn" class="form-control" id="txt-comment-email" maxlength="100" required>
											</div>
											<div class="form-group col-sm-3 col-xs-6">
											    <label for="s">Mã bảo mật</label>
											    <input class="form-control"  placeholder="Mã bảo mật" type="text" name="captcha" value="" id="captcha" maxlength="10" size="32" required>
											</div>
											<div class="form-group col-sm-2 col-xs-6">
											    <label for="s">&nbsp;</label>
											    <img style="display: block;height: 34px;max-width: 100%;" src="/public/plugins/captcha/random_image.php" />
											</div>
											<div class="form-group col-xs-12">
							                    <label for="textarea-comment">Bình luận</label>
							                    <textarea class="form-control" maxlength="500" id="txt-comment" placeholder="Nhập bình luận của bạn..." rows="5" required ></textarea>
							                </div>
                                            <div id="result" class="col-xs-12 text-danger"></div>
											<div class="form-group col-xs-8">
											 <small>Đánh giá sản phẩm </small>
											   <span class="starRating inline-block">
										        <input id="rating5" type="radio" name="rating" value="5" checked>
										        <label for="rating5">5</label>
										        <input id="rating4" type="radio" name="rating" value="4">
										        <label for="rating4">4</label>
										        <input id="rating3" type="radio" name="rating" value="3" >
										        <label for="rating3">3</label>
										        <input id="rating2" type="radio" name="rating" value="2">
										        <label for="rating2">2</label>
										        <input id="rating1" type="radio" name="rating" value="1">
										        <label for="rating1">1</label>
										      </span>
                                              <div id="loadding" style="display: none;"><img src="/public/images/loading_gif_small.gif"></div>
											</div>
											<div class="form-group col-xs-4">
												<div class="pull-right">
													<a href="#">Bỏ qua </a>
												 	<input class="btn btn-default" id="load_review" type="submit" name="submit" value="Gửi bình luận" />
												</div>
											</div>
										</form>
					            </div>
                            <?php if (empty($products_review)) : ?>
                                <a href="#tab_content_product_comments"><b>Viết đánh giá đầu tiên cho sản phẩm</b></a>
                            <?php endif; ?>
                            <ul class="product_comment">
                            <?php foreach($products_review as $product_review): ?>
                                <li class="product_comment_li">
                                    <div class="product_comment_author">
                                        <b><?php echo $product_review['user_name']; ?></b> <small>Đã đánh giá sản phẩm</small>
                                        <?php switch ($product_review['rating'])
                                                {
                                                case 1:
                                                    echo '<i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>';
                                                break;
                                                case 2: 
                                                    echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>';
                                                break;
                                                case 3: 
                                                    echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>';
                                                break;
                                                case 4:
                                                    echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>';
                                                break;
                                                case 5:
                                                    echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>';
                                                break;
                                                default :  
                                                  echo 'No vote';
                                                break;
                                                }
                                        ?>
                                        </span>
                                        <a href="#tab_content_product_comments"><small>Trả lời</small></a>
                                    </div>
                                    <div class="product_comment_content">
                                    <?php echo $product_review['content']; ?>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                            </ul>
				        	</div>
                        </div>
				    </div>
				</div>
			</div>
            <aside class="col-lg-3 col-md-3 col-sm-12 product-related">
                <div class="box-content col-md-12 hidden-lg ">
                    <div class="header row">
                        <h4 class="title">Sản phẩm tương tự</h4>
                    </div>
                    <div class="body">
                        <ul class="list-product">
                            <li class="col-md-12 col-sm-3 col-xs-6">
                                <a href="royal-canin-maxi-junior-p62.html">
                                    <span>
                                        <img src="public/upload/product/62-royal-canin-maxi-junior.png" alt="Royal Canin Maxi Junior">
                                    </span>
                                </a>
                                <div>
                                    <h4><a href="royal-canin-maxi-junior-p62.html">Royal Canin Maxi Junior</a></h4>
                                    <p class="price__main">170.000 VNĐ</p>              
                                </div>
                            </li>
                            <li class="col-md-12 col-sm-3 col-xs-6">
                                <a href="royal-canin-labrador-retriever-junior-cho-labrador-con-p69.html">
                                    <span>
                                        <img src="public/upload/product/69-royal-canin-labrador-retriever-junior-cho-labrador-con.png" alt="Royal Canin Labrador Retriever Junior - Chó Labrador con">
                                    </span>
                                </a>
                                <div>
                                    <h4><a href="royal-canin-labrador-retriever-junior-cho-labrador-con-p69.html">Royal Canin Labrador Retriever Junior - Chó Labrador con</a></h4>
                                    <p class="price__main">600.000 VNĐ</p>              
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="visible-lg-block product-related ">
                	<div class="ad-right">
	                    <div class="box-truck"></div>
	                    	<div class="box-content">
		                        <div class="header">
		                            <h4 class="title">Chính sách giao hàng</h4>
		                        </div>
	                        <div class="body">
                                <div class="item">
                                    <div class="icon"><i class="home truck"></i></div>
                                    <div class="text">Giao hàng bởi sieuthithunuoi.com</div>
                                </div>                  
                                <div class="item ">
                                    <div class="icon"><i class="home location"></i></div>
                                    <div class="text">Chỉ miễn phí giao hàng tại Tp. Hồ Chí Minh.</div>
                                </div>
                                <div class="item ">
                                    <div class="icon"><i class="home box"></i></div>
                                    <div class="text">Đổi trả trong 3 ngày, thủ tục đơn giản.</div>
                                </div>
                                <div class="item">
                                    <div class="icon"><i class="home bill"></i></div>
                                    <div class="text">Nhà cung cấp xuất hóa đơn cho sản phẩm này.</div>
                                </div>
                        	</div>
                		</div>
           			</div>
           		</div>
            </aside>
        </div>
        <div class="global_product">
    		<div class="text-center dat-hang">
            	<a href="them-gio-hang.html?pid=<?php echo $product['id']; ?>" class="button">
                	<i class="fa fa-shopping-cart fa-2x"></i>Cho vào giỏ hàng
            	</a>
    		</div>
    	</div>
    	<div class="clearfix" style="height:20px;"></div>
   	</div>
</div>