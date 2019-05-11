<?php
/* Smarty version 3.1.33, created on 2019-03-01 09:13:36
  from 'D:\xampp1\htdocs\php05_eshopper\views\layouts\recommended-items.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c78e9b0cba1d3_82571083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98c4bb0f35dd9a4d4ed5408984e4ee5374f1d05a' => 
    array (
      0 => 'D:\\xampp1\\htdocs\\php05_eshopper\\views\\layouts\\recommended-items.php',
      1 => 1550972416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c78e9b0cba1d3_82571083 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="recommended_items"><!--recommended_items-->
	<h2 class="title text-center">Sản phẩm bán chạy</h2>

	<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['repro_list']->value, 'repro', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['repro']->value) {
?> 
			<?php if ($_smarty_tpl->tpl_vars['k']->value%3 == 0) {?> <!-- bắt đầu nhóm mới -->
				<?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>
					<div class="item active">	<!-- bắt đầu 1 carousel item -->
				<?php } else { ?>
					<div class="item">	<!-- bắt đầu 1 carousel item -->
				<?php }?>
			<?php }?>
				<div class="col-sm-4"> <!-- Bắt đầu 1 SP -->
					<div class="product-image-wrapper">
						<div class="single-products">
							<div class="productinfo text-center">
								<img src="images/home/<?php echo $_smarty_tpl->tpl_vars['repro']->value->picture;?>
" alt="" />
								<h2>
									<?php if ($_smarty_tpl->tpl_vars['repro']->value->saleprice > 0 && $_smarty_tpl->tpl_vars['repro']->value->saleprice < $_smarty_tpl->tpl_vars['repro']->value->price) {?>
										<small><s><?php echo number_format($_smarty_tpl->tpl_vars['repro']->value->price);?>
</s></small> <?php echo number_format($_smarty_tpl->tpl_vars['repro']->value->saleprice);?>
 <sup>đ</sup>
									<?php } else { ?>
										<?php echo number_format($_smarty_tpl->tpl_vars['repro']->value->price);?>
 <sup>đ</sup>
									<?php }?>
								</h2>
								<p><?php echo $_smarty_tpl->tpl_vars['repro']->value->name;?>
</p>
								<a data-id="<?php echo $_smarty_tpl->tpl_vars['repro']->value->id;?>
" href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Đặt mua</a>
							</div> <!-- ./product-info -->
						</div> <!-- ./single-product -->
					</div> <!-- ./product-image -->
				</div> <!-- ./sản phẩm -->
			<?php if ($_smarty_tpl->tpl_vars['k']->value%3 == 2) {?>
			</div> <!-- ./carousel-item -->
			<?php }?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div> <!-- ./carousel-inner -->
		<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
			<i class="fa fa-angle-left"></i>
		</a>
		<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
			<i class="fa fa-angle-right"></i>
		</a>			
	</div>
</div><!--/recommended_items--><?php }
}
