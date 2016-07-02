<aside class="col-lg-3 col-md-3 col-sm-12 visible-lg-block visible-md-block">
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
		<div class="box-content col-md-12">
			<div class="header row">
		        <h4 class="title">Sản phẩm bán chạy</h4>
		    </div>
		    <div class="body">
		    	<ul class="list-product">
		    		<li class="col-md-12">
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
		    		<li class="col-md-12">
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
		<div class="box-content col-md-12">
			<div class="header row">
		        <h4 class="title">Cẩm nang thú nuôi</h4>
		    </div>
	    	<ul class="list-blog">
				<?php if (empty($blogs)) : ?>
				<h3 class="col-md-12">Không có bài viết nào trong danh mục này.</h3>
				<?php endif; ?>
				<?php foreach($blogs as $blog): ?>
					<li>
							<h3><b><a href="<?php echo alias($blog['title']).'-b'. $blog['id'].'.html'; ?>"><?php echo $blog['title']; ?> ...</a></b></h3>
							<p><small><?php echo truncateStr($blog['content'],160,"") ?></small></p>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- sieuthithunuoi_blog -->
		<ins class="adsbygoogle"
		     style="display:block"
		     data-ad-client="ca-pub-9640629050839085"
		     data-ad-slot="5899186458"
		     data-ad-format="auto"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
</aside>