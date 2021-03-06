<?php
/* Smarty version 3.1.33, created on 2019-03-02 05:20:46
  from 'D:\xampp1\htdocs\php05_eshopper\views\layouts\cart_detail.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7a049e56ec04_52775883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbd76eb5125284cc1bfed0008cc23421b2ffb6e6' => 
    array (
      0 => 'D:\\xampp1\\htdocs\\php05_eshopper\\views\\layouts\\cart_detail.php',
      1 => 1551500442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7a049e56ec04_52775883 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="cart_items">
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
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['cart'], 'ct');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ct']->value) {
?>
					<tr>
						<td class="cart_product" valign="top">
							<a href="product_detail.php?id=<?php echo $_smarty_tpl->tpl_vars['ct']->value['id'];?>
"><img src="images/home/<?php echo $_smarty_tpl->tpl_vars['ct']->value['picture'];?>
" style="width: 200px;"></a>
						</td>
						<td class="cart_description" valign="top">
							<h4 style="font-size: 14px; margin-top: -5px;"><a href="product_detail.php?id=<?php echo $_smarty_tpl->tpl_vars['ct']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ct']->value['name'];?>
</a></h4>
							
						</td>
						<td class="cart_price" valign="top">
							<p><?php echo number_format($_smarty_tpl->tpl_vars['ct']->value['price']);?>
 <sup>đ</sup></p>
						</td>
						<td class="cart_quantity" valign="top" style="margin-top: 4px;">
							<div class="cart_quantity_button">
								<a class="cart_quantity_up" href="" data-id="<?php echo $_smarty_tpl->tpl_vars['ct']->value['id'];?>
"> + </a>
								<input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $_smarty_tpl->tpl_vars['ct']->value['sl'];?>
" autocomplete="off" size="2">
								<a class="cart_quantity_down" href="" data-id="<?php echo $_smarty_tpl->tpl_vars['ct']->value['id'];?>
"> - </a>
							</div>
						</td>
						<td class="cart_total">
							<p class="cart_total_price"><?php echo number_format($_smarty_tpl->tpl_vars['ct']->value['price']*$_smarty_tpl->tpl_vars['ct']->value['sl']);?>
 <sup>đ</sup></p>
						</td>
						<td class="cart_delete">
							<a class="cart_quantity_delete" href="" data-id="<?php echo $_smarty_tpl->tpl_vars['ct']->value['id'];?>
"><i class="fa fa-times"></i></a>
						</td>
					</tr>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<!-- hàng tổng cộng -->
					<tr>
						<td colspan="4" class="cart_total" style="text-align: right;">
							<p class="cart_total_price" style="text-align: right; font-size: 16px; margin-top: 5px;">Tổng cộng:
							</p>
						</td>
						
						<td class="cart_total" style="text-align: right;">
							<p class="cart_total_price" style="text-align: right; font-size: 16px; margin-top: 5px;"><?php echo number_format($_smarty_tpl->tpl_vars['tongtien']->value);?>
 <sup>đ</sup>
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
</div><!-- /.modal --><?php }
}
