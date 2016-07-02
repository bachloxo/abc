<ul class="row clearfix list-product">
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

<div class="text-center" style="float: left;">
	<?php echo $pagination; ?>
</div>