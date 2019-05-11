<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Shopping Cart</li>
			</ol>
		</div>
		<div class="table-responsive cart_info">
			<table class="table table-condensed">
				<thead>
					<tr class="cart_menu">
						<td class="image">Sản phẩm</td>
						<td class="description"></td>
						<td class="price">Giá</td>
						<td class="quantity">Số lượng</td>
						<td class="total">Thành tiền</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					{foreach $smarty.session.cart as $ct}
					<tr>
						<td class="cart_product" valign="top">
							<a href="product_detail.php?id={$ct['id']}"><img src="images/home/{$ct['picture']}" style="width: 200px;"></a>
						</td>
						<td class="cart_description" valign="top">
							<h4 style="font-size: 14px; margin-top: -5px;"><a href="product_detail.php?id={$ct['id']}">{$ct['name']}</a></h4>
							
						</td>
						<td class="cart_price" valign="top">
							<p>{number_format($ct['price'])} <sup>đ</sup></p>
						</td>
						<td class="cart_quantity" valign="top" style="margin-top: 4px;">
							<div class="cart_quantity_button">
								<a class="cart_quantity_up" href="" data-id="{$ct['id']}"> + </a>
								<input class="cart_quantity_input" type="text" name="quantity" value="{$ct['sl']}" autocomplete="off" size="2">
								<a class="cart_quantity_down" href="" data-id="{$ct['id']}"> - </a>
							</div>
						</td>
						<td class="cart_total">
							<p class="cart_total_price">{number_format($ct['price'] * $ct['sl'])} <sup>đ</sup></p>
						</td>
						<td class="cart_delete">
							<a class="cart_quantity_delete" href="" data-id="{$ct['id']}"><i class="fa fa-times"></i></a>
						</td>
					</tr>
					{/foreach}
					<!-- hàng tổng cộng -->
					<tr>
						<td colspan="4" class="cart_total" style="text-align: right;">
							<p class="cart_total_price" style="text-align: right; font-size: 16px; margin-top: 5px;">Tổng cộng:
							</p>
						</td>
						
						<td class="cart_total" style="text-align: right;">
							<p class="cart_total_price" style="text-align: right; font-size: 16px; margin-top: 5px;">{number_format($tongtien)} <sup>đ</sup>
							</p>
						</td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section> <!--/#cart_items-->
<p style="text-align: right;">
	<a href="#thanhtoan-modal" class="btn btn-primary float-right" id="btn-thanhtoan" data-toggle="modal">Thanh toán</a>
</p>
<!-- //model -->
<div class="modal fade" id="thanhtoan-modal">
	<div class="modal-dialog" role="document">
		<form action="" method="post" id="thanhtoan-form">
			<div class="modal-content">
				<div class="modal-header">
					<span class="modal-title">Thông tin đặt hàng</span>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Tên khách hàng</label>
						<input type="text" name="name" id="name" class="form-control" placeholder="Nhập họ tên" required>
					</div>
					<div class="form-group">
						<label>Địa chỉ</label>
						<input type="text" name="address" id="address" class="form-control" placeholder="Địa chỉ" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" id="email" class="form-control" placeholder="Nhập email" required>
					</div>
					<div class="form-group">
						<label>Số điện thoại</label>
						<input type="text" name="phone" id="phone" class="form-control" placeholder="Nhập số điện thoại" required>
					</div>
				</div>
				<div class="modal-footer">

					<button type="submit" class="btn btn-primary">Đặt mua</button>
				</div>			

			</div><!-- /.modal-content -->
		</form>
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->