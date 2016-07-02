<style type="text/css">
	.table th, .table td {
		text-align: center;
	}
	.table th:nth-child(4), .table td:nth-child(4)  {
		width: auto;
		text-align: left;
	}
	.table tfoot td:nth-child(1),.table tfoot td:nth-child(2) {text-align: right;}
	.table th:nth-child(4), .table td:nth-child(4),
	.table th:nth-child(5), .table td:nth-child(5)  {
	}
	.table td {
		vertical-align: middle!important;
	}
	.back {margin-bottom: 15px;}
</style>
<form id="cart_form" method="post" action="index.php?controller=cart" role="form">

<div class="col-xs-12">
	<div class="table-responsive">
			<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th class="hidden-xs">Order</th>
				<th>Action</th>
				<th class="hidden-xs">Ảnh/Image</th>
				<th>Tên Sản phẩm/Items</th>
				<th>Số lượng/Qty</th>
				<th>Giá/Price</th>
				<th>Tổng/Grand total</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$stt = 0;
			foreach ($cart as $pid => $product): 
				$stt++;
			?>
			<tr>
				<td class="hidden-xs"><?php echo $stt;?></td>
				<td>
					<a href="xoa-gio-hang.html?pid=<?php echo $product['id'];?>" class="text-danger"><i class="glyphicon glyphicon-remove"></i></a>
				</td>
				<td class="hidden-xs">
					<?php
					$image = 'public/upload/product/'.$product['image'];
					if (is_file($image)) {
                        echo '<image src="'.$image.'" style="max-width:50px; max-height:50px;" />';
                    }
                    ?>
                </td>
				<td>
					<a href="<?php echo alias($product['name']).'-p'. $product['id'].'.html'; ?>"><?php echo $product['name']; ?></a>
				</td>
				<td>
					<div class="btn-group">
						<input name="number[<?php echo $product['id'];?>]" type="text" value="<?php echo $product['number'];?>" size="3" class="form-control text-center"/>
					</div>
				</td>
				<td>
					<?php echo number_format($product['price'],0,',','.'); ?>
				</td>
				<td>
					<?php echo number_format(($product['price']*$product['number']),0,',','.'); ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
		<tfoot>
			<tr>
				<td class="visible-xs" colspan="4"><p>Phí vận chuyển/Shipping Fee:</p></th>
				<td class="hidden-xs" colspan="6"><p>Phí vận chuyển/Shipping Fee:</p></th>
				<td colspan="1"><p>0 <u>đ</u></p></th>
			</tr>
			<tr>
				<td class="visible-xs" colspan="4"><b>Tổng cộng/Total :</b></th>
				<td class="hidden-xs" colspan="6"><b>Tổng cộng/Total :</b></th>
				<td colspan="1"><b><?php echo number_format(cart_total(),0,',','.'); ?> VNĐ</b></th>
			</tr>
		</tfoot>
	</table>
	</div>
	<div class="row">
			<div class="col-xs-12 col-lg-8 col-md-6 col-sm-8">
				<div class="row form-group">
					<div class="col-xs-6 col-lg-3 col-md-5 col-sm-4">
						<a href="." class="btn btn-warning back"><i class="glyphicon glyphicon-share-alt"></i> Quay lại mua hàng</a>
					</div>
					<div class="col-xs-6 col-lg-3 col-md-5 col-sm-4">
							<button type="submit" class="pull-left btn btn-primary"><i class="glyphicon glyphicon-refresh"></i> Cập nhật giỏ hàng</button>
					</div>
				</div>
			</div>
		<div class="col-xs-12 col-lg-4 col-md-6 col-sm-4">
			<div class="form-group pull-right">
				<a href="don-hang.html" class="btn btn-success"><i class="glyphicon glyphicon-list-alt"></i> Nhập thông tin giao hàng</a>
			</div>
		</div>
	</div>
</div>

</form>