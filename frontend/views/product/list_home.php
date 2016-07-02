	<ul class="list-product">
		<?php if (empty($products)) : ?>
		<h3 class="col-sm-12">Không có sản phẩm nào trong danh mục này.</h3>
		<?php endif; ?>
		<?php foreach($products as $product): ?>
			<li class="col-lg-3 col-sm-4 col-xs-6">
				<a href="<?php echo alias($product['name']).'-p'. $product['id'].'.html'; ?>">
					<span><img src="public/upload/product/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>"/></span>
					<h4><a href="<?php echo alias($product['name']).'-p'. $product['id'].'.html'; ?>"><?php echo truncateStr($product['name'],40,"") ?> ...</a></h4>
					<p class="price__main"><?php echo number_format($product['price'],0,',','.'); ?> VNĐ</p>	
					<button class="order visible-sm visible-xs">
						<a href="them-gio-hang.html?pid=<?php echo $product['id']; ?>">
						<img src="/public/images/icons/ico10.png" height="14" width="18" alt="">Thêm vào giỏ hàng</a>
	                </button>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
<div class="b-main__category__title">
                <div href="#" title="Bóng Đá" class="b-main__category__title-main">
                  <h2 class="b-main__category__title-name">Thức ăn & đặc trị</h2>
                  <span class="b-main__category-arrow"></span>
                </div>
                <div class="pull-right sub_title_home">
                		<a href="http://sieuthithunuoi.com/thuc-an-thu-nuoi-c54.html">Thức ăn thú nuôi</a>
                		<a href="http://sieuthithunuoi.com/dinh-duong-vitamins-c55.html">Dinh dưỡng - vitamins</a>
                		<a href="http://sieuthithunuoi.com/sua-tam-dac-tri-c56.html">Sữa tắm & đặc trị</a>
                </div>
            </div>
<ul class="list-product">
	<?php if (empty($products_category1)) : ?>
	<h3 class="col-sm-12">Không có sản phẩm nào trong danh mục này.</h3>
	<?php endif; ?>
	<?php foreach($products_category1 as $product_category1): ?>
		<li class="col-lg-3 col-sm-4 col-xs-6">
			<a href="<?php echo alias($product_category1['name']).'-p'. $product_category1['id'].'.html'; ?>">
				<span>
					<img src="public/upload/product/<?php echo $product_category1['image']; ?>" alt="<?php echo $product_category1['name']; ?>"/>
				</span>
			</a>
				<h4><a href="<?php echo alias($product_category1['name']).'-p'. $product_category1['id'].'.html'; ?>"><?php echo truncateStr($product_category1['name'],40,"") ?> ...</a></h4>
			<p class="price__main"><?php echo number_format($product_category1['price'],0,',','.'); ?> VNĐ</p>	
			<button class="order visible-sm visible-xs">
					<a href="them-gio-hang.html?pid=<?php echo $product_category1['id']; ?>">
					<img src="/public/images/icons/ico10.png" height="14" width="18" alt="">Thêm vào giỏ hàng</a>
            </button>
		</li>
	<?php endforeach; ?>
</ul>
			<div class="b-main__category__title">
                <div href="#" title="Bóng Đá" class="b-main__category__title-main">
                  <h2 class="b-main__category__title-name">Đồ chuyên dụng</h2>
                  <span class="b-main__category-arrow"></span>
                  </div>
                  <div class="pull-right sub_title_home">
                		<a href="http://sieuthithunuoi.com/nha-ngu-o-niem-c57.html">Nhà ngủ, ổ niệm</a>
                		<a href="http://sieuthithunuoi.com/tui-sach-van-chuyen-c58.html">Túi xách & vận chuyển</a>
                		<a href="http://sieuthithunuoi.com/ve-sinh-huan-luyen-c63.html">Vệ sinh & huấn luyện</a>
                </div>
            </div>
<ul class="list-product">
	<?php if (empty($products_category2)) : ?>
	<h3 class="col-sm-12">Không có sản phẩm nào trong danh mục này.</h3>
	<?php endif; ?>
	<?php foreach($products_category2 as $product_category2): ?>
		<li class="col-lg-3 col-sm-4 col-xs-6">
			<a href="<?php echo alias($product_category2['name']).'-p'. $product_category2['id'].'.html'; ?>">
				<span>
					<img src="public/upload/product/<?php echo $product_category2['image']; ?>" alt="<?php echo $product_category2['name']; ?>"/>
				</span>
			</a>
				<h4><a href="<?php echo alias($product_category2['name']).'-p'. $product_category2['id'].'.html'; ?>"><?php echo truncateStr($product_category2['name'],40,"") ?> ...</a></h4>
				<p class="price__main"><?php echo number_format($product_category2['price'],0,',','.'); ?> VNĐ</p>				
			<button class="order visible-sm visible-xs">
					<a href="them-gio-hang.html?pid=<?php echo $product_category2['id']; ?>">
					<img src="/public/images/icons/ico10.png" height="14" width="18" alt="">Thêm vào giỏ hàng</a>
            </button>
		</li>
	<?php endforeach; ?>
</ul>
<div class="b-main__category__title">
    <div href="#" title="Bóng Đá" class="b-main__category__title-main">
      <h2 class="b-main__category__title-name">Đồ chơi & phụ kiện</h2>
      <span class="b-main__category-arrow"></span>
      </div>
      <div class="pull-right sub_title_home">
    		<a href="http://sieuthithunuoi.com/do-choi-va-sach-huan-luyen-c59.html">Đồ chơi và sách huấn luyện</a>
    		<a href="http://sieuthithunuoi.com/quan-ao-phu-kien-c60.html">Quần áo & phụ kiện</a>
    		<a href="http://sieuthithunuoi.com/vong-co-day-dan-c61.html">Vòng cổ & dây dẫn</a>
    </div>
</div>
<ul class="list-product">
	<?php if (empty($products_category3)) : ?>
	<h3 class="col-sm-12">Không có sản phẩm nào trong danh mục này.</h3>
	<?php endif; ?>
	<?php foreach($products_category3 as $product_category3): ?>
		<li class="col-lg-3 col-sm-4 col-xs-6">
			<a href="<?php echo alias($product_category3['name']).'-p'. $product_category3['id'].'.html'; ?>">
				<span>
					<img src="public/upload/product/<?php echo $product_category3['image']; ?>" alt="<?php echo $product_category3['name']; ?>"/>
				</span>
			</a>
				<h4><a href="<?php echo alias($product_category3['name']).'-p'. $product_category3['id'].'.html'; ?>"><?php echo truncateStr($product_category3['name'],40,"") ?> ...</a></h4>
				<p class="price__main"><?php echo number_format($product_category3['price'],0,',','.'); ?> VNĐ</p>				
			<button class="order visible-sm visible-xs">
					<a href="them-gio-hang.html?pid=<?php echo $product_category3['id']; ?>">
					<img src="/public/images/icons/ico10.png" height="14" width="18" alt="">Thêm vào giỏ hàng</a>
            </button>
		</li>
	<?php endforeach; ?>
</ul>
<div class="b-main__category__title">
    <div href="#" title="Bóng Đá" class="b-main__category__title-main">
      <h2 class="b-main__category__title-name">Dụng cụ & làm đẹp</h2>
      <span class="b-main__category-arrow"></span>
      </div>
      <div class="pull-right sub_title_home">
    		<a href="http://sieuthithunuoi.com/dung-cu-an-uong-c62.html">Dụng cụ ăn uống</a>
    		<a href="http://sieuthithunuoi.com/cham-soc-suc-khoe-c64.html">Chăm sóc sức khỏe</a>
    		<a href="http://sieuthithunuoi.com/dung-cu-lam-dep-c53.html">Dụng cụ làm đẹp</a>
    </div>
</div>
<ul class="list-product">
	<?php if (empty($products_category4)) : ?>
	<h3 class="col-sm-12">Không có sản phẩm nào trong danh mục này.</h3>
	<?php endif; ?>
	<?php foreach($products_category4 as $product_category4): ?>
		<li class="col-lg-3 col-sm-4 col-xs-6">
			<a href="<?php echo alias($product_category4['name']).'-p'. $product_category4['id'].'.html'; ?>">
				<span>
					<img src="public/upload/product/<?php echo $product_category4['image']; ?>" alt="<?php echo $product_category4['name']; ?>"/>
				</span>
			</a>
				<h4><a href="<?php echo alias($product_category4['name']).'-p'. $product_category4['id'].'.html'; ?>"><?php echo truncateStr($product_category4['name'],40,"") ?> ...</a></h4>
				<p class="price__main"><?php echo number_format($product_category4['price'],0,',','.'); ?> VNĐ</p>				
			<button class="order visible-sm visible-xs">
					<a href="them-gio-hang.html?pid=<?php echo $product_category4['id']; ?>">
					<img src="/public/images/icons/ico10.png" height="14" width="18" alt="">Thêm vào giỏ hàng</a>
            </button>
		</li>
	<?php endforeach; ?>
</ul>