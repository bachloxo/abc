<style type="text/css">
	.table th, .table td {
		text-align: center;
	}
	.table th:nth-child(2), .table td:nth-child(2)  {
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
	.box {border: 1px dotted #333; margin-bottom: 10px;}
	.box .note {padding:10px;}
</style>
<div class="middle">
	<form id="cart_form" method="post" action="dat-hang.html" role="form">
		<div class="col-md-8 col-sm-12">
			<h2>Thông tin đơn hàng</h2>
			<div class="table-responsive">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th class="hidden-xs">Order</th>
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
								<a href="<?php echo alias($product['name']).'-p'. $product['id'].'.html'; ?>"><?php echo $product['name']; ?></a>
							</td>
							<td>
									<?php echo $product['number'];?>
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
							<td class="visible-xs" colspan="3"><p>Phí vận chuyển/Shipping Fee:</p></th>
							<td class="hidden-xs" colspan="4"><p>Phí vận chuyển/Shipping Fee:</p></th>
							<td colspan="1"><p>0 <u>đ</u></p></th>
						</tr>
						<tr>
							<td class="visible-xs" colspan="3"><b>Tổng cộng/Total :</b></th>
							<td class="hidden-xs" colspan="4"><b>Tổng cộng/Total :</b></th>
							<td colspan="1"><b><?php echo number_format(cart_total(),0,',','.'); ?> VNĐ</b></th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
		<div class="col-md-4 col-sm-12">	
			<h2>Thông tin khách hàng</h2>
			<div class="form-group">
				<input id="name" name="name" type="text" class="form-control" placeholder="Họ và tên" required="required"/>
			</div>
			<div class="form-group">
				<input id="email" name="email" type="email" class="form-control" placeholder="Email" required="required"/>
			</div>
			<div class="form-group">
				<input id="address" name="address" type="text" class="form-control" placeholder="Địa chỉ giao hàng" required="required"/>
			</div>
			<div class="form-group">
				<input id="phone" name="phone" type="phone" class="form-control" placeholder="Số di động" required="required" pattern="[0-9]{10,11}"/>
			</div>
			<div class="row">
				<div class="form-group col-md-7">
					<label for="s">Mã bảo mật</label>
					<input class="form-control"  placeholder="Mã bảo mật" type="text" name="captcha" value="" id="captcha" maxlength="10" size="32" required="required">
				</div>
				<div class="col-md-5">
					<label for="s">&nbsp;</label>
					<img style="display: block;height: 34px;max-width: 100%;" src="/public/plugins/captcha/random_image.php" />
				</div>
			</div>
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Đặt hàng</button>
			</div>
			<div id="result" class="box"></div>
			<div class="box">
				<div class="note">
				Sau khi quý khách hàng gửi thông tin mua hàng<br>
				Nhân viên của chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất<br>
				Xin chân thành Cảm ơn !!.
				</div>
			</div>	
		</div>
	</form>
</div>